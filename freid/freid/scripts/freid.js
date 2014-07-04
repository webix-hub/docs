var Freid = {
	analize:function(){
		this._get_views_list();
		this.printAllCollections();
		this.initEvents();
	},
	generate:function(component){
		Jung.generateMD(component);
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
	_get_by_type:function(col, pull, order, name, check, fossil, ignore_key){
		var ignore = ignore_key?(gantt.debug_freid_ignore[ignore_key]||gantt.debug_freid_ignore["*"]):null;
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
	_get_by_code:function(col, pull, order, name, check, ignore_key){
		var ignore = ignore_key?(gantt.debug_freid_ignore[ignore_key]||gantt.debug_freid_ignore["*"]):null;
		for (var key in col){
			var obj = col[key];
			if (typeof obj == "function"){
				var code = obj.toString();
				check(code, pull, order, name, col, key, ignore);
			}
			order.sort();
		}
	},
	_is_code_template:function(code, pull, order, objname, obj, method_name, ignore){
		var re = /(gantt|this)\.templates\.([a-zA-Z_]+)/g;
		var match;

		var match = code.match(re);
		if (match){
			for (var i=0; i<match.length; i++){
				var name = match[i].replace("gantt.templates.","").replace("this.templates","");
				if (ignore && ignore[name]) return false;

				if (pull[objname+name]) continue;
				//inner
				if (name.indexOf("_") != -1) continue;
				pull[objname+name] = {
					obj:{},
					unsure:true,
					key:name,
					pretty:name,
					bycode:true
				};
				order.push(objname+name);
			}
		}
	},
	_is_code_property:function(code, pull, order, objname, obj, method_name, ignore){
		var re = /gantt\.config\.([a-zA-Z_]+)/g;
		var match;

		var match = code.match(re);
		if (match){
			for (var i=0; i<match.length; i++){
				var name = match[i].replace("gantt.config.","");
				if (ignore && ignore[name]) return false;

				if (pull[objname+name]) continue;
				//inner
				if (name.indexOf("_") != -1) continue;
				pull[objname+name] = {
					obj:{},
					unsure:true,
					key:name,
					pretty:name,
					value:gantt.undefined,
					setter:true,
					bycode:true
				};
				order.push(objname+name);
			}
		}
	},
	_is_code_event:function(code, pull, order, objname, obj, method_name, ignore){
		var re = /\.callEvent\(["']([a-zA-Z]+)/g;
		var match;

		var match = code.match(re);
		if (match){
			for (var i=0; i<match.length; i++){
				var name = match[i].replace("\.callEvent(","").replace(/['"]+/g,"");
					console.log(name)
				if (ignore && ignore[name]) return false;
				if (name == "on") continue;
				if (pull[objname+name]) continue;

				pull[objname+name] = {
					obj:{},
					unsure:true,
					key:name,
					pretty:name,
					value:gantt.undefined,
					setter:true
				};
				order.push(objname+name);
			}
		}
	},


	_get_views_list:function(){
		var obj = {
			obj:gantt,
			key:"gantt",
			pretty:"gantt",
			fullname:"gantt"
		};

		this.vOrder = ["gantt"];
		this.vPull = { gantt:obj };

		for (var key in this.vPull)
			if (Freid.hideView[key])
				this.vPull[key].hidden = true;
	},

	
	addToBody:function(html,css,parent){
		var d = document.createElement("DIV");
		d.innerHTML = html;
		if (css) d.className = css;
		if (parent && document.getElementById(parent) != null) document.getElementById(parent).appendChild(d); else document.body.appendChild(d);
		return d;
	},
	printCollections:function(order, pull, name, visible){
		var vLen = 0;
		for (var q=0; q<order.length; q++) if (order[q] != "GS") vLen++;
		var html = "";
		if (name != null) {
			 html += "<h2>"+name+" ("+vLen+")</h2>";
		} else {
			 html += "<div style='height:10px;overflow:hidden;'></div>";
		}
		html += "<div class='area' "+(visible?"":"style='display:none;'")+">";
		for (var i=0; i<order.length; i++){
			if (order[i] == "GS") {
				html+="<div class='group_separator'>&nbsp;</div>";
			} else {
			var data = pull[order[i]];
			var css = "word "; 
			if (data.hidden)
				css+=" hidden";
			if (data.invalidName)
				css+=" inname";

			html+="<div key='"+data.fullname+"' class='"+css+"'>"+data.pretty+"</div>";
		}
		}
		var node = this.addToBody(html+"<div class='endline'></div></div>", "views_collection", "views_here_id");
		node.childNodes[1].order = order;
		node.childNodes[1].pull = pull;
	},
	printAllCollections:function(){
		this.printCollections(this.vOrder, this.vPull, null /*"Views"*/, true);
		this.addToBody("<div id='details'></div>", "", "methods_here_id");

		Freid.mark(document.getElementsByClassName("word")[0]);
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
		html+="<h5>Methods ("+data.mOrder.length+")</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.mOrder, data.mPull, "api");
		html+="<h5>Properties</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.pOrder, data.pPull, "config");
		html+="<h5>Events</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.eOrder, data.ePull, "event");
		html+="<h5>Templates</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.tOrder, data.tPull, "template");
		html+="<h5>Artefacts ("+data.aOrder.length+")</h5>";
		html+=Freid.touchHTMLMethods(key, obj, data.aOrder, data.aPull, "other");
		html += "</div>";
		return html;
	},
	touchHTMLMethods:function(key, obj, order, pull, type){
		var query = {};

		if (!order.length) return "";
		
		var data = {reg:[],depr:[]};
		var dataLabels = {depr: "<span style='color:#dc7979;'>deprecated</span>"};
		
		for (var i=0; i<order.length; i++){
			var method = pull[order[i]];
			var text = "<div obj='"+key+"' id='"+type+"_"+method.key+"' class='method'>";
			var css = (method.defined?"":" own") + (method.fossil ? " missed": "") + (!method.assert ? " new": "");
			if (method.assert && method.assert.deprecated)
				css+=" deprecated";

			var marker_css = "";
			if (!method.assert || !method.assert["short"])
				marker_css = "missed";
			else if (!method.assert.descr || !method.assert.example)
				marker_css = "invalid";
			// if (method.unsure)
			// 	marker_css += " unsure";

			text+="<div class='marker "+marker_css+"'>&nbsp;</div>";
			text+="<div class='name"+css+"'>"+(method.pretty  || method.key)+"</div>";
			text+="<div class='defined' realowner='"+(method.defined?method.defined[0]:"")+"'>&nbsp;</div>";//text+="<div class='defined'>"+(method.defined?method.defined[0]:"&nbsp;")+"</div>";
			if (method.assert && method.assert.deprecated && method.defined && method.defined[0]) {
				//text += "<span style='color:#63aacb;padding-left:8px;'>"+k+"</span>";
			}
			text+="</div>";
			
			if (method.defined && (!method.assert || !method.assert.deprecated)) {
				var k = method.defined[0];
				if (!data[k]) {
					data[k] = [];
					dataLabels[k] = "<span style='color:#63aacb;'>inherited from "+k+"</span>";
				}
				data[k].push(text);
			} else {
				if (method.assert && method.assert.deprecated) {
					if (method.defined) {
						var k = "depr_"+method.defined[0];
						if (!data[k]) {
							data[k] = [];
							dataLabels[k] = "<span style='color:#dc7979;'>deprecated / inherited from "+method.defined[0]+"</span>";
						}
						data[k].push(text);
					} else {
						data.depr.push(text);
					}
				} else {
					data.reg.push(text);
				}
				// data[method.assert && method.assert.deprecated?"depr":"reg"].push(text);
			}
			
			query[method.key]=method.defined?method.defined[0]:key;
		}

		var html = "";
		var cols = 3;
		html += "<div class='section'>";
		for (var a in data) {
			if (a.match(/^depr/)) {
				var d = data[a];
				delete data[a];
				data[a] = d;
				d = null;
			}
		}
		for (var a in data) {
			if (data[a].length > 0) {
				if (dataLabels[a] != null) {
					html += "<div class='sectionlabel'><div class='text_method_type_name'>"+dataLabels[a]+"</div></div>";
				}
				var in_col = Math.max(Math.ceil(data[a].length/cols),8);
				var i = 0;
				for (var q=0; q<data[a].length; q++) {
					if (i == 0) html += "<div class='sectioncol'>";
					html += data[a][q];
					if (++i%in_col == 0 || q==data[a].length-1) { i = 0; html += "</div>"; }
				}
			}
		}
		html += "<div class='sectionend'></div></div>";
		
		return html;
	},
	touch:function(key, obj){
		if (Freid.tPull[key]) return Freid.tPull[key];

		var data = {};

		
		Freid.tOrder.push(key);
		Freid.tPull[key] = data;

		var instance = obj.obj;

		if (typeof instance == "function" && !Freid.mixedObj[key])
			instance = instance.prototype;

		data.mOrder = [];
		data.pOrder = [];
		data.eOrder = [];
		data.aOrder = [];
		data.tOrder = [];

		data.mPull = {};
		data.pPull = {};
		data.ePull = {};
		data.aPull = {};
		data.tPull = {};

		data.fullname = key;
		data.obj = obj;
		data.instance = instance;

		Freid._current_data = data;
		this._get_by_type(data.instance, data.mPull, data.mOrder, "", this._is_method, false, key);
		this._get_by_type(data.instance, data.pPull, data.pOrder, "", this._is_property, false, key);
		this._get_by_type(data.instance, data.aPull, data.aOrder, "", this._is_artefact, false, key);
		this._get_by_type(data.instance, data.ePull, data.eOrder, "", this._is_event, false, key);

		//gantt.config
		this._get_by_type(instance.config, data.pPull, data.pOrder, "", this._is_def_property, false, key);
		this._get_by_type(instance.templates, data.tPull, data.tOrder, "", this._is_def_template, false, key);
		

		this._get_by_code(data.instance, data.pPull, data.pOrder, "", this._is_code_property, key);
		this._get_by_code(data.instance, data.ePull, data.eOrder, "", this._is_code_event, key);
		this._get_by_code(data.instance, data.tPull, data.tOrder, "", this._is_code_template, key);

		//gantt._click
		this._get_by_code(data.instance._click, data.ePull, data.eOrder, "", this._is_code_event, key);
		this._force_from_docs(data);

		this._get_by_assert(data.fullname, data.mPull, data.mOrder, "methods", this._is_assert);
		this._get_by_assert(data.fullname, data.pPull, data.pOrder, "properties", this._is_assert);
		this._get_by_assert(data.fullname, data.aPull, data.aOrder, "artefacts", this._is_assert);
		this._get_by_assert(data.fullname, data.ePull, data.eOrder, "events", this._is_assert);

		this._check_asserts(data, "mPull", "mOrder", "methods");
		this._check_asserts(data, "ePull", "eOrder", "events");
		this._check_asserts(data, "pPull", "pOrder", "properties");
		this._check_asserts(data, "aPull", "aOrder", "artefacts");
		this._check_asserts(data, "tPull", "tOrder", "templates");

		data.aOrder.sort();
		data.mOrder.sort();
		data.pOrder.sort();
		data.eOrder.sort();

		return data;
	},

	_force_from_docs:function(data){
		var arts = gantt.debug_freid_artf[data.fullname];
		var confs = gantt.debug_freid_config[data.fullname];
		var events = gantt.debug_freid_event[data.fullname];
		var templates = gantt.debug_freid_template[data.fullname];

		this._force_collection(arts, data.aOrder, data.aPull);
		this._force_collection(confs, data.pOrder, data.pPull);
		this._force_collection(events, data.eOrder, data.ePull);
		this._force_collection(templates, data.tOrder, data.tPull);
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
		if (key.indexOf("_") !== -1) return false;
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
	_is_def_template:function(key, obj){
		if (Freid._current_data.tPull[key]){
			Freid._current_data.tPull[key].value = obj;
			return false;
		}
		return {
			obj:obj,
			key:key,
			pretty:key,
			value:obj
		};
	},
	_is_property:function(key, obj){
		return false;
	},
	_is_event:function(key, obj){
		return false;
	},
	_is_assert:function(key, obj){
		return {
			obj:obj,
			key:key,
			pretty:key
		};
	},
	_is_artefact:function(key, obj){
		if (Freid._current_data.mPull[key]) return false;
		if (Freid._current_data.pPull[key]) return false;
		if (key.indexOf("_") != -1) return false;
		
		if (key.indexOf("debug_") != -1) return false;
		if (key.indexOf("_") === 0) return false;
		
		if (key == "defaults" || key == "$init" || key == "$ready") return false;

		return {
			obj:obj,
			key:key
		};
	}
};

