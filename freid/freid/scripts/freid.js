webix_on_core_ready = function(){
	var old_proto = webix.proto;	
	webix.proto = function(){
		var result = old_proto.apply(this, arguments);
		result.prototype._proto_chain = [];
		for (var i=1; i < arguments.length; i++) {
			if (typeof arguments[i] == "function")
				result.prototype._proto_chain.push(arguments[i].prototype);
			else
				result.prototype._proto_chain.push(arguments[i]);
		}
		return result;
	};
	webix.protoUI = function(source, target){
		webix.ui[source.name] = webix.proto.apply(webix, arguments);
	};
	var old_extend  = webix.extend;
	webix.extend = function(target, source, force){
		if (typeof target == "function"){
			delete source.$init;
			var result = old_extend(target.prototype, source, force);
			if (typeof source == "function")
				target.prototype._proto_chain.push(source.prototype);
			else
				target.prototype._proto_chain.push(source);
			return result;
		} else
			return old_extend(target, source, force);
	};
};


var Freid = {
	complexInit:{
		"webix.ui.datatable":function(){
			var temp = webix.html.create("DIV");
			return webix.ui({
				view:"datatable",
				select:"row",
				container:temp
			});
		},
		"webix.ui.dataview":function(){
			webix.extend(webix.ui.dataview, webix.VirtualRenderStack, true);
			var temp = webix.html.create("DIV");
			return webix.ui({
				view:"dataview",
				container:temp
			});
		},
		"webix.DataStore":function(){
			var t = new webix.DataStore();
			t._proto_chain = [webix.EventSystem];
			return t;
		}
	},
	mixedObj:{
		"webix.ui":true
	},
	contObj:{
		"webix.storage":true,
		"webix.destructors":true
	},
	hideObj:{
		"webix.on_setter":true,
		"webix.ui.views":true,
		"webix.skin":true
	},
	analize:function(){
		this._get_views_list();
		this._get_mixins_list();
		this._get_helpers_list();
		this._get_object_list();
		this._get_debug_list();
		this._get_constant_list();
		this._get_x_list();
		this._get_full_list();
		this.printAllCollections();
		this.initEvents();
	},
	generate:function(component){
		Jung.generateMD(component);
	}, 
	structure:function(){
		var stru = {};
		for (var i = Freid.vOrder.length - 1; i >= 0; i--) {
			var name = Freid.vOrder[i];
			var unit = Freid.touch(name, Freid.vPull[name]);
			var ustr = stru[name.split(".").pop()] = { methods:{}, properties:{}, events:{} };
			for (var j = unit.mOrder.length - 1; j >= 0; j--) {
				var mname = unit.mOrder[j];
				var mobj = unit.mPull[mname];
				ustr["methods"][mname] = mobj.assert||"";
			};

			for (var j = unit.pOrder.length - 1; j >= 0; j--) {
				var mname = unit.pOrder[j];
				var mobj = unit.pPull[mname];
				ustr["properties"][mname] = mobj.assert||"";
			};

			for (var j = unit.eOrder.length - 1; j >= 0; j--) {
				var mname = unit.eOrder[j];
				var mobj = unit.ePull[mname];
				ustr["events"][mname] = mobj.assert||"";
			};
		};

		webix.ajax().post("./templates/dump.php", { data: JSON.stringify(stru, null, "\t")});
		},
	initEvents:function(){
		document.body.onclick = function(e){
			var source = e.target;
			if (source.className.indexOf("word") != -1){
				Freid.unmark();
				Freid.mark(source);
			} else if (source.tagName.toLowerCase() == "h3") {
				Freid.editAssert(source);
			} else if (source.tagName.toLowerCase() == "h2") {
				Freid.toggleGroup(source);
			} else if (source.className.indexOf("name") === 0) {
				Freid.editAssert(source);
		}
		};
	},

	toggleGroup:function(node){
		var cont = node.nextSibling;
		if (cont.style.display == "none")
			cont.style.display = "";
		else
			cont.style.display = "none";
	},
	unmark:function(){
		if (Freid._last_marked)
			Freid._last_marked.className = Freid._last_marked.className.replace("activeword", "word");
		Freid._last_marked = null;
	},
	mark:function(node){
		node.className = node.className.replace("word", "activeword");	
		Freid._last_marked = node;
		var top = node.parentNode;
		var key = node.getAttribute("key");
		Freid.describe(top, key);
	},
	editAssert:function(node){
		var top = node.parentNode;
		var type = top.id.split("_");
		var owner = top.getAttribute("obj");
		if (owner){
			var obj = owner.replace("webix.","");
			var realowner = node.nextSibling.innerHTML.replace("webix.","");
			var method = type.splice(1).join("_");
			if (type[0] != "api")
				method = method+"_"+type[0];
			
			if (obj == realowner || realowner == "&nbsp;"){
				Freid.open_page("../api__"+obj+"_"+method+".html");
			} else {
				Freid.open_page("../api__link__"+obj+"_"+method+".html");
			}
		} else {
			var obj = node.innerHTML.replace("webix.","");
			Freid.open_page("../api__refs__"+obj+".html");
		}
	},
	open_page:function(page){
		window.open(page.toLowerCase(),"_blank");
	},

	_rg_small_alfa:RegExp("[a-z]"),
	_rg_small:RegExp("^[a-z0-9]+$"),
	_rg_big_alfa:RegExp("[A-Z]"),
	positive:function(){return true;},
	negative:function(){return false;},

	tOrder:[], tPull:{},
	aaOrder:[], aaPull:{}, aaCompare:{},

	_get_by_assert:function(fullname, pull, order, name, check){
		var ass = doc[fullname.toLowerCase()];
		if (ass && ass[name])
			this._get_by_type(ass[name], pull, order, "", check, true);
	},
	_get_by_type:function(col, pull, order, name, check, fossil, key){
		var ignore = key?(webix.debug_freid_ignore[key]||webix.debug_freid_ignore["*"]):null;
		for (var key in col){
			if (ignore && ignore[key])
				continue;
			var obj = check(key, col[key]);
			if (obj){
				var exists = !!pull[name+obj.key];
				if (!exists){
					if (fossil){
						obj.fossil = true;
					}
					order.push(name+obj.key);
					pull[name+obj.key]=obj;
				} else {
					pull[name+obj.key].unsure = false;
				}
			}
			order.sort();
		}
	},
	_get_by_code:function(col, pull, order, name, check, key){
		var ignore = key?(webix.debug_freid_ignore[key]||webix.debug_freid_ignore["*"]):null;
		for (var key in col){
			var obj = col[key];
			if (typeof obj == "function"){
				var code = obj.toString();
				check(code, pull, order, name, col, key, ignore);
			}
			order.sort();
		}
	},
	_is_code_property:function(code, pull, order, objname, obj, method_name, ignore){
		var re = /this._settings\.([a-zA-Z_]+)/g;
		var match;

		var match = code.match(re);
		if (match){
			for (var i=0; i<match.length; i++){
				var name = match[i].replace("this._settings.","");
				if (ignore && ignore[name]) return false;

				if (pull[objname+name]) continue;
				//inner
				if (name.indexOf("_") != -1) continue;
				pull[objname+name] = {
					obj:{},
					unsure:true,
					key:name,
					pretty:name,
					value:webix.undefined,
					setter:true,
					bycode:true
				};
				order.push(objname+name);
			}
		}
	},
	_is_code_event:function(code, pull, order, objname, obj, method_name, ignore){
		var re = /this.callEvent\(([a-zA-Z'"]+)/g;
		var match;

		var match = code.match(re);
		if (match){
			for (var i=0; i<match.length; i++){
				var name = match[i].replace("this.callEvent(","").replace(/['"]+/g,"");
				if (ignore && ignore[name]) return false;
				if (name == "on") continue;
				if (pull[objname+name]) continue;

				pull[objname+name] = {
					obj:{},
					unsure:true,
					key:name,
					pretty:name,
					value:webix.undefined,
					setter:true
				};
				order.push(objname+name);
			}
		}
	},


	_get_full_list:function(){
		for (var i = 0; i < this.vOrder.length; i++){
			var key = this.vOrder[i];
			var obj = this.vPull[key].obj;
			if (typeof obj == "function")
				obj = obj.prototype;
			this.aaOrder.push(key);
			this.aaPull[key] = this.vPull[key];
			this.aaCompare[key] = obj;
		}

		for (var i = 0; i < this.mOrder.length; i++){
			var key = this.mOrder[i];
			var obj = this.mPull[key].obj;
			if (typeof obj == "function")
				obj = obj.prototype;
			this.aaOrder.push(key);
			this.aaPull[key] = this.mPull[key];
			this.aaCompare[key] = obj;
		}
	},

	_is_view:function(key, obj){
		if (typeof obj != "function") return false;
		if (!Freid._rg_small.test(key)) return false;
		if (key == "get" || key == "delay" || key == "resize") return false;

		return {
			obj:obj,
			key:key,
			pretty:key,
			fullname:"webix.ui."+key
		};
	},
	_get_views_list:function(){
		this.vOrder = [];
		this.vPull = {};
		this._get_by_type(webix.ui, this.vPull, this.vOrder, "webix.ui.", this._is_view);
		for (var key in this.vPull)
			if (Freid.hideView[key])
				this.vPull[key].hidden = true;
	},

	
	_is_mixin:function(key, obj){
		if (!Freid._rg_big_alfa.test(key.substr(0, 1))) return false;
		
		return {
			obj:obj,
			key:key,
			pretty:key,
			fullname:"webix."+key
		};
	},
	_get_mixins_list:function(){
		this.mOrder = [];
		this.mPull = {};
		this._get_by_type(webix, this.mPull, this.mOrder, "webix.", this._is_mixin);
	},
	_is_helper:function(key, obj, pretty){
		if (typeof obj != "function") return false;
		if (!Freid._rg_small_alfa.test(key.substr(0, 1))) return false;
		if (key.indexOf("log") === 0 || key.indexOf("error") === 0 || key.indexOf("assert") === 0 || key.indexOf("debug") === 0) return false;

		if (key == "ajax") return false;
		if (key == "on_setter") return false;
		return {
			obj:obj,
			key:key,
			pretty: (pretty||"webix.")+key,
			fullname: (pretty||"webix.")+key
		};
	},
	_is_view_helper:function(key, obj){
		if (Freid.vPull["webix.ui."+key]) return false;
		return Freid._is_helper(key, obj, "webix.ui.");
	},
	_get_helpers_list:function(){
		this.hOrder = [];
		this.hPull = {};
		this._get_by_type(webix, this.hPull, this.hOrder, "webix.", this._is_helper);
		this._get_by_type(webix.ui, this.hPull, this.hOrder, "webix.ui.", this._is_view_helper);
		//this._get_by_type(webix.global, this.hPull, this.hOrder, "", this._is_global_helper);
	},


	_is_object_helper:function(key, obj){
		if (typeof obj != "object" && key !="ajax") return false;
		if (Freid.hideObj["webix."+key]) return false;
		if (!Freid._rg_small.test(key)) return false;
		return {
			obj:obj,
			key:key,
			pretty:key,
			fullname:"webix."+key
		};
	},
	_is_storage_helper:function(key, obj){
		if (typeof obj != "object") return false;
		if (!Freid._rg_small.test(key)) return false;
		return {
			obj:obj,
			key:key,
			pretty:"storage." + key,
			fullname:"webix.storage."+key
		};
	},
	_is_global_helper:function(key, obj){
		return {
			obj:obj,
			key:key,
			pretty: key,
			fullname: key
		};
	},
	_get_object_list:function(){
		this.oOrder = [];
		this.oPull = {};
		this._get_by_type(webix, this.oPull, this.oOrder, "webix.", this._is_object_helper);
		this._get_by_type(webix.storage, this.oPull, this.oOrder, "webix.storage.", this._is_storage_helper);
	},

	_is_x:function(key, obj){
		var sub = key.substr(0,1);
		if (sub == "_" || sub == "$") return false;
		var name = "webix."+key;

		if (Freid.hPull[name]) return false;
		if (Freid.dPull[name]) return false;
		if (Freid.cPull[name]) return false;
		if (Freid.oPull[name]) return false;
		if (Freid.mPull[name]) return false;
		if (Freid.hideObj[name]) return false;
		return {
			obj:obj,
			key:key,
			pretty:name,
			fullname:name
		};
	},
	_is_x_view:function(key, obj){
		var sub = key.substr(0,1);
		if (sub == "_" || sub == "$") return false;
		var name = "webix.ui."+key;
		if (Freid.hPull[name]) return false;
		if (Freid.vPull[name]) return false;
		if (Freid.cPull[name]) return false;
		if (Freid.hideObj[name]) return false;
		return {
			obj:obj,
			key:key,
			pretty:name,
			fullname:name
		};
	},
	_get_x_list:function(){
		this.xOrder = [];
		this.xPull = {};
		this._get_by_type(webix, this.xPull, this.xOrder, "webix.", this._is_x);
		this._get_by_type(webix.ui, this.xPull, this.xOrder, "webix.ui.", this._is_x_view);
	},

	_is_debug:function(key, obj){
		if (key.indexOf("log") !== 0 && key.indexOf("error") !== 0 && key.indexOf("assert") !== 0 && key.indexOf("debug") !== 0) return false;
		return {
			obj:obj,
			key:key,
			pretty:key,
			fullname:"webix."+key
		};
	},
	_get_debug_list:function(){
		this.dOrder = [];
		this.dPull = {};	
		this._get_by_type(webix, this.dPull, this.dOrder, "webix.", this._is_debug);
	},

	_is_constant:function(key, obj){
		if (typeof obj == "object" || typeof obj == "function") return false;
		if (key.indexOf("log") === 0 || key.indexOf("error") === 0 || key.indexOf("assert") === 0 || key.indexOf("debug") === 0) return false;
		if (key.indexOf("_") === 0) return false;
		return {
			obj:obj,
			key:key,
			pretty:"webix."+key,
			fullname:"webix."+key
		};
	},
	_get_constant_list:function(){
		this.cOrder = [];
		this.cPull = {};	
		this._get_by_type(webix, this.cPull, this.cOrder, "webix.", this._is_constant);
		this._get_by_type(webix.ui, this.cPull, this.cOrder, "webix.ui.", this._is_constant);
	},

	addToBody:function(html){
		var d = document.createElement("DIV");
		d.innerHTML = html;
		document.body.appendChild(d);
		return d;
	},
	printCollections:function(order, pull, name, visible){
		var html = "<h2>"+name+" ("+order.length+")</h2><div class='area' "+(visible?"":"style='display:none;'")+">";
		for (var i=0; i<order.length; i++){
			var data = pull[order[i]];
			var css = "word "; 
			if (data.hidden)
				css+=" hidden";
			if (data.invalidName)
				css+=" inname";

			html+="<div key='"+data.fullname+"' class='"+css+"'>"+data.pretty+"</div>";
		}
		var node = this.addToBody(html+"<div class='endline'></div></div>");
		node.childNodes[1].order = order;
		node.childNodes[1].pull = pull;
	},
	printAllCollections:function(){
		this.printCollections(this.vOrder, this.vPull, "Views", true);
		this.printCollections(this.mOrder, this.mPull, "Mixins");
		this.printCollections(this.hOrder, this.hPull, "Helper methods");
		this.printCollections(this.oOrder, this.oPull, "Helper objects");
		this.printCollections(this.cOrder, this.cPull, "Constants");
		this.printCollections(this.dOrder, this.dPull, "Debug");
		this.printCollections(this.xOrder, this.xPull, "Artefacts");
		this.addToBody("<div id='details'></div>");
	},











	_add_data_store:function(data){
		var key = "webix.DataStore";
		var real = Freid.aaPull[key];

		var obj = {};
		var t = new webix.DataStore();
		t.provideApi(obj);

		var api = Freid.touch("webix.DataStoreAPI", {obj:obj});
		api.fullname = "webix.DataStore";
		var events = Freid.touch("webix.DataStoreEvents",{obj:t});
		events.fullname = "webix.DataStore";

		data.ancestors.push(["webix.DataStore", {obj:obj}, api]);
		data.ancestors.push(["webix.DataStore", {obj:t}, events,{
			onBeforeSort:	true,
			onAfterSort:	true,
			onBeforeAdd:	true,
			onAfterAdd:		true,
			onBeforeDelete:	true,
			onAfterDelete:	true,
			onDataUpdate:   true
		}]);
	},

	_add_tree_store:function(data){
		var key = "webix.TreeStore";
		var real = Freid.aaPull[key];

		var obj = {};
		var t = webix.extend(new webix.DataStore(), webix.TreeStore, true);
		t.provideApi(obj);

		var api = Freid.touch("webix.TreeStoreAPI", {obj:obj});
		api.fullname = "webix.TreeStore";
		
		data.ancestors.push(["webix.TreeStore", {obj:obj}, api]);
	},

	_get_ancestors:function(source, data){
		if (data.ancestors)
			return data.ancestors;
		var anc = source._proto_chain;
		
		data.ancestors = [];
		data.parents = [];

		if (data.fullname == "webix.DataLoader"){
			this._add_data_store(data);
		} else if (data.fullname == "webix.TreeDataLoader"){
			this._add_tree_store(data);
			this._add_data_store(data);
		}

		if (!anc || !anc.length)
			return;

		for (var x = 0; x<anc.length; x++){
			var found = false;
			for (var i=0; i<Freid.aaOrder.length; i++){
				var key = Freid.aaOrder[i];
				var obj = Freid.aaCompare[key];
				if (obj == anc[x]){
					var realobj =  Freid.aaPull[key];
					var subdata = Freid.touch(key, realobj);
					data.ancestors.push([key, realobj, subdata]);
					data.parents.push([key, realobj, subdata]);
					for (var j = 0; j < subdata.ancestors.length; j++) {
						data.ancestors[data.ancestors.length]=subdata.ancestors[j];
					}
					found = true;
					break;
				}
			}
			if (!found){
			//	data.ancestors.push("Unknown",null);
			}
		}
	},
	_entity_by_ancestor:function(data, pull, order){
		for (var x = 0; x<data[order].length; x++){
			var method = data[order][x];
			var record = data[pull][method];
			for (var i=data.ancestors.length-1; i>=0; i--){
				if (data.ancestors[i][2][pull][method] && !data.ancestors[i][2][pull][method].unsure){
					record.defined = data.ancestors[i];
					break;
				}
			}
		}
	},
	_get_events_from_ancestors:function(data, pull, order) {
		for (var i=data.ancestors.length-1; i>=0; i--){
			//datastor or similar
			var filter = data.ancestors[i][3];

			var anc = data.ancestors[i][2];
			for (var x = 0; x<anc[order].length; x++){
				var method = anc[order][x];
				
				if (!filter || filter[method]){
					var record = anc[pull][method];
					if (filter) record.unsure = false;
					if (!data[pull][method] && !record.unsure && !record.bycode) {
						data[order].push(method);
						data[pull][method]=record;
						record.defined = data.ancestors[i];
						delete record.missed;
					}
				}
			}
		}
	},
	_check_asserts:function(data, pull, order, name){
		for (var i=0; i<data[order].length; i++){

			var key = data[order][i];
			var method = data[pull][key];
			var parent = (method.defined?method.defined[2].fullname:data.fullname).toLowerCase();
			
			var assert = doc[parent];
			if (assert){
				assert = assert[name];
				if (assert)
					method.assert = assert[key];
			}
		}

		var ass = data.instance._assert;
		if (ass){
			var methods = ass[name];
			
			for (var key in methods) {
				if (!data[pull][key])
					data[order].push(key);
				data[pull][key]={
					obj:null, 
					key:key,
					assert:methods[key],
					missed:true
				};
			}
		}
	},
	describe:function(type, key){
		document.getElementById("details").innerHTML = Freid.touchHTML(key, type.pull[key]);
	},
	touchHTML:function(key, obj){
		var data = Freid.touch(key, obj);
		var html = "<h3>"+key+"</h3><div>";
		html+="<small>"+Freid.prettyAncestors(data)+"</small>";
		html+="<h5>Methods ("+data.mOrder.length+")</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.mOrder, data.mPull, "api");
		html+="<h5>Properties</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.pOrder, data.pPull, "config");
		html+="<h5>Events</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.eOrder, data.ePull, "event");
		html+="<h5>Artefacts ("+data.aOrder.length+")</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.aOrder, data.aPull, "other");
		html += "</div>";
		return html;
	},
	prettyAncestors:function(data){
		var html = [];
		for (var i=0; i<data.ancestors.length; i++){
			var text = data.ancestors[i][0];
			for (var j=0; j<data.parents.length; j++){
				if (data.parents[j][0]  == text){
					text = "<strong>"+text+"</strong>";
					break;
				}
			}
			html.push(text);
		}
		return html.join(", ");
	},
		touchHTMLMethods:function(key, obj, order, pull, type){
		var query = {};

		if (!order.length) return "";
		var data = [];
		for (var i=0; i<order.length; i++){
			var method = pull[order[i]];
			var text = "<div obj='"+key+"' id='"+type+"_"+method.key+"' class='method'>";
			var css = (method.defined?"":" own")+(method.fossil?" missed":"");

			var marker_css = "";
			if (!method.assert || !method.assert.short)
				marker_css = "missed";
			else if (!method.assert.descr || !method.assert.example)
				marker_css = "invalid";
			// if (method.unsure)
			// 	marker_css += " unsure";

			text+="<div class='marker "+marker_css+"'>&nbsp;</div>";
			text+="<div class='name"+css+"'>"+(method.pretty  || method.key)+"</div>";
			text+="<div class='defined'>"+(method.defined?method.defined[0]:"&nbsp;")+"</div>";
			text+="</div>";
			
			data.push(text);
			query[method.key]=method.defined?method.defined[0]:key;
		}

		return "<div class='section'>"+data.join("")+"<div class='sectionend'></div></div>";
	},
	touch:function(key, obj){
		if (Freid.tPull[key]) return Freid.tPull[key];

		var data = {};

		
		Freid.tOrder.push(key);
		Freid.tPull[key] = data;

		var instance = obj.obj;

		if (Freid.complexInit[key])
			instance = Freid.complexInit[key]();
		else if (instance._webix_proto_wait)
			instance = obj.obj = instance.call(webix);
			
		if (typeof instance == "function" && !Freid.mixedObj[key])
			instance = instance.prototype;

		if (instance.loadNext){
			if (instance.loadBranch)
				var t = webix.extend(new webix.DataStore(), webix.TreeStore, true);
			else
				var t = new webix.DataStore();
			t.provideApi(instance);
		}

		
			
		data.mOrder = [];
		data.pOrder = [];
		data.eOrder = [];
		data.aOrder = [];

		data.mPull = {};
		data.pPull = {};
		data.ePull = {};
		data.aPull = {};

		data.fullname = key;
		data.obj = obj;
		data.instance = instance;

		this._get_ancestors(data.instance, data);

		Freid._current_data = data;
		this._get_by_type(data.instance, data.mPull, data.mOrder, "", this._is_method, false, key);
		this._get_by_type(data.instance, data.pPull, data.pOrder, "", this._is_property, false, key);
		this._get_by_type(data.instance, data.aPull, data.aOrder, "", this._is_artefact, false, key);
		this._get_by_type(data.instance, data.ePull, data.eOrder, "", this._is_event, false, key);

		if (instance.defaults)
			this._get_by_type(instance.defaults, data.pPull, data.pOrder, "", this._is_def_property, false, key);

		this._get_by_code(data.instance, data.pPull, data.pOrder, "", this._is_code_property, key);
		this._get_by_code(data.instance, data.ePull, data.eOrder, "", this._is_code_event, key);
		this._force_from_docs(data);

		this._get_events_from_ancestors(data, "ePull", "eOrder");
		this._get_events_from_ancestors(data, "aPull", "aOrder");
		this._get_events_from_ancestors(data, "pPull", "pOrder");

		this._entity_by_ancestor(data, "mPull", "mOrder");
		this._entity_by_ancestor(data, "pPull", "pOrder");
		this._entity_by_ancestor(data, "ePull", "eOrder");
		this._entity_by_ancestor(data, "aPull", "aOrder");

		this._get_by_assert(data.fullname, data.mPull, data.mOrder, "methods", this._is_assert);
		this._get_by_assert(data.fullname, data.pPull, data.pOrder, "properties", this._is_assert);
		this._get_by_assert(data.fullname, data.aPull, data.aOrder, "artefacts", this._is_assert);
		this._get_by_assert(data.fullname, data.ePull, data.eOrder, "events", this._is_assert);

		this._check_asserts(data, "mPull", "mOrder", "methods");
		this._check_asserts(data, "ePull", "eOrder", "events");
		this._check_asserts(data, "pPull", "pOrder", "properties");
		this._check_asserts(data, "aPull", "aOrder", "artefacts");

		data.aOrder.sort();
		data.mOrder.sort();
		data.pOrder.sort();
		data.eOrder.sort();

		return data;
	},

	_force_from_docs:function(data){
		var arts = webix.debug_freid_artf[data.fullname];
		var confs = webix.debug_fred_config[data.fullname];
		var events = webix.debug_fred_event[data.fullname];

		this._force_collection(arts, data.aOrder, data.aPull);
		this._force_collection(confs, data.pOrder, data.pPull);
		this._force_collection(events, data.eOrder, data.ePull);
	},
	_force_collection:function(force, order, pull){
		if (force)
			for (var key in force){
				if (pull[key])
					pull[key].unsure = pull[key].bycode = false;
				else{
					pull[key] = {
						obj:{},
						key:key,
						pretty:key
					};
					order.push(key);
				}
			}
	},
	_is_method:function(key, obj){
		if (typeof obj != "function") return false;
		if (key.indexOf("_") === 0) return false;
		if (key.indexOf("$") === 0) return false;
		if (key.indexOf("_setter") != -1) return false;
		if (key == "$init") return false;

		return {
			obj:obj,
			key:key
		};
	},
	_is_def_property:function(key, obj){
		if (Freid._current_data.pPull[key]){
			Freid._current_data.pPull[key].value = obj;
			return false;
		}
		return {
			obj:obj,
			key:key,
			pretty:key,
			value:obj,
			setter:false
		};
	},
	_is_property:function(key, obj){
		if (key.indexOf("_setter") == -1) return false;
		var name = key.replace("_setter","");
		return {
			obj:obj,
			key:name,
			pretty:name,
			value:webix.undefined,
			setter:true
		};
	},
	_is_event:function(key, obj){
		return false;
	},
	_is_assert:function(key, obj){
		return {
			obj:obj,
			key:key,
			pretty:key
		}
	},
	_is_artefact:function(key, obj){
		if (Freid._current_data.mPull[key]) return false;
		if (Freid._current_data.pPull[key]) return false;
		if (key.indexOf("_setter") != -1) return false;
		
		if (key.indexOf("debug_") != -1) return false;
		if (key.indexOf("_") === 0) return false;
		
		if (key == "defaults" || key == "$init" || key == "$ready") return false;

		return {
			obj:obj,
			key:key
		};
	}
};

