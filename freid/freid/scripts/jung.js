var Jung = {
	generateMD:function(component){
		this._save_index = 0;
		this._save_list = [];
		this._already_saving = false;


		this._generateTop(component);
	},
	_generateTop:function(component){
		
		var views = JSON.stringify(this._get_views_list());
		var helpers = JSON.stringify(this._get_helpers_list());
		
		this._get_helper_methods_list();

		this._save_page("top.php", {
			file:"toc/"+Freid.root+".md",
			name:Freid.root,
			helpers:helpers,
			short:doc["webix."+Freid.root].short,
			objs:views
		});

		var hidden = this._get_views_list(true);
		var mixins = this._get_mixins_list();
		mixins = JSON.stringify(mixins.concat(hidden));

		this._save_page("top_mixins.php", {
			file:"toc/"+Freid.root+"_mixins.md",
			name:component,
			objs:mixins
		});
	},
	_save_page:function(file, data){
		this._save_list.push({file:file, data:data});
		this._try_to_save();
		
	},
	_try_to_save:function(){
		if (this._already_saving) return;
		if (this._save_index == this._save_list.length) return;

		this._already_saving = true;
		var pack = this._save_list[this._save_index];
		this._save_list[this._save_index] = false;
		this._save_index++;

		webix.ajax().post("./freid/templates/"+pack.file, pack.data, this._save_done);
	},
	_save_done:function(){
		Jung._already_saving = false;
		Jung._try_to_save();
		document.getElementById("stat").innerHTML=Jung._save_index+" from "+Jung._save_list.length;
	},
	_get_helpers_list:function(){
		var res = [];
		for (var i=0; i<Freid.oOrder.length; i++){
			var key = Freid.oOrder[i];
			if (Freid.contObj[key])
				continue;

			var name = key.replace("webix.","");
			var lname = name.toLowerCase();
			var moto = (doc["webix."+lname]||{}).short;

			var master = Freid.oPull[key];
			var data = Freid.touch(key, master);

			res.push({ name:name, short:moto });

			var methods = JSON.stringify(this._get_methods_list(data, name));
			var configs = JSON.stringify(this._get_configs_list(data, name));
			var events = JSON.stringify(this._get_events_list(data, name));
			var others = JSON.stringify(this._get_others_list(data, name));

			var parents = JSON.stringify([]);

			this._save_page("api.php", {
				file:lname,
				name:name,
				based:parents,
				methods:methods,
				events:events,
				configs:configs,
				others:others
			});
		}

		return res;
	},
	_get_helper_methods_list:function(){
		var data = []; var names = ["", "ui"];
		data[0] = ["webix.", Freid.touch("webix",{obj:webix})];
		data[1] = ["webix.ui.", Freid.touch("webix.ui", {obj:webix.ui})];

		var methods = [];
		var others = [];
		var events =  [];

		//event system helpers
		var evs = ["hasEvent", "mapEvent", "attachEvent", "detachEvent", "blockEvent", "unblockEvent", "callEvent"];
		for (var i = evs.length - 1; i >= 0; i--)
			data[0][1].mPull[evs[i]].defined = ["webix.EventSystem"];
	
		for (var i=0; i<data.length; i++){
			var mCheck = {};
			for (var key in Freid.hPull)
				mCheck[key.replace(data[i][0],"")] = true;
			var cCheck = {};
			for (var key in Freid.cPull)
				cCheck[key.replace(data[i][0],"")] = true;

			methods = methods.concat(this._get_methods_list(data[i][1], names[i], mCheck));
			events = events.concat(this._get_events_list(data[i][1], names[i]));
			others = others.concat(this._get_others_list(data[i][1], names[i], cCheck));
		}

		this._save_page("api.php", {
			file:"common_helpers",
			name:"common helpers",
			based:JSON.stringify([]),
			methods:JSON.stringify(methods),
			events:JSON.stringify(events),
			configs:JSON.stringify([]),
			others:JSON.stringify(others)
		});
	},
	_get_views_list:function(mode){
		var res = [];
		for (var i=0; i<Freid.vOrder.length; i++){
			var key = Freid.vOrder[i];
			var name = key.replace("webix.","");
			var lname = name.toLowerCase();
			var moto = (doc["webix."+lname]||{}).short;

			var master = Freid.vPull[key];
			var data = Freid.touch(key, master);

			if (master.hidden && !mode) continue;
			if (!master.hidden && mode) continue;

			res.push({ name:name, short:moto });

			var methods = JSON.stringify(this._get_methods_list(data, name));
			var configs = JSON.stringify(this._get_configs_list(data, name));
			var events = JSON.stringify(this._get_events_list(data, name));
			var others = JSON.stringify(this._get_others_list(data, name));

			var parents = [];
			for (var j=0; j<data.ancestors.length; j++)
				parents[j] = value = data.ancestors[j][0];
			
			var lname = name.toLowerCase();
			this._save_page("api.php", {
				file:lname,
				name:name,
				based:JSON.stringify(parents),
				methods:methods,
				events:events,
				configs:configs,
				others:others
			});
		}

		return res;
	},
	_get_methods_list:function(data, name, check){
		var ret = [];
		var pname = name.toLowerCase();
		for (var i=0; i<data.mOrder.length; i++){
			var key = data.mOrder[i];
			if (check && !check[key]) continue;
			if (key.indexOf("$")==0) continue;

			var mname = key.toLowerCase();
			var info = data.mPull[key];
			var assert = info.assert || { descr:""};
			var defined = info.defined?(info.defined[0]).replace("webix.",""):name;
			var mdefined = defined.toLowerCase();

			if (mdefined == pname){
				this._save_page("method.php", {
					file:mdefined+"_"+mname+".md",
					name:key,
					defined:defined,
					params:JSON.stringify(assert.args),
					descr:assert.short,
					returns:assert.returns
				});
				ret.push({name:key, descr:assert.short, owner:mdefined });
			} else {
				this._save_page("link.php", {
					file:pname+"_"+mname+".md",
					link:mdefined+"_"+mname+".md"
				});
				ret.push({name:key, descr:assert.short, owner:"link/"+pname });
			}

			
		}
		return ret;
	},
	_get_events_list:function(data, name){
		var ret = [];
		var pname = name.toLowerCase();
		for (var i=0; i<data.eOrder.length; i++){
			var key = data.eOrder[i];
			var mname = key.toLowerCase();
			var info = data.ePull[key];
			var assert = info.assert || { descr:""};

			var defined = ((info.defined&&info.defined[0])?info.defined[0].replace("webix.",""):name);
			var mdefined = defined.toLowerCase();


			if (mdefined == pname){
				this._save_page("event.php", {
					file:mdefined+"_"+mname+"_event.md",
					name:key,
					defined:defined,
					params:JSON.stringify(assert),
					descr:assert.short
				});
				ret.push({name:key, descr:assert.short, owner:mdefined});
			} else {
				this._save_page("link.php", {
					file:pname+"_"+mname+"_event.md",
					link:mdefined+"_"+mname+"_event.md"
				});
				ret.push({name:key, descr:assert.short, owner:"link/"+pname});
			}
		}
		return ret;
	},
	_check_event_name:function(name, test, replace){
		var index = name.indexOf(test);
		if (index == -1) return name;
		return name.substr(0, index) + replace + this._capitalise(name.substr(index+test.length));
	},
	_capitalise:function(string){
    	return string.charAt(0).toUpperCase() + string.slice(1);
	},
	_get_configs_list:function(data, name, check){
		var ret = [];
		var pname = name.toLowerCase();
		for (var i=0; i<data.pOrder.length; i++){
			var key = data.pOrder[i];
			if (check && !check[key]) continue;
			var mname = key.toLowerCase();
			var info = data.pPull[key];
			var assert = info.assert || { descr:""};

			
			var defined = ((info.defined&&info.defined[0])?info.defined[0].replace("webix.",""):name);
			var mdefined = defined.toLowerCase();
			
			
			if (mdefined == pname){
				this._save_page("config.php", {
					file:mdefined+"_"+mname+"_config.md",
					name:key,
					defined:defined,
					params:JSON.stringify(assert.assert),
					descr:assert.short
				});
				ret.push({name:key, descr:assert.short, owner:mdefined});
			} else {
				this._save_page("link.php", {
					file:pname+"_"+mname+"_config.md",
					link:mdefined+"_"+mname+"_config.md"
				});
				ret.push({name:key, descr:assert.short, owner:"link/"+pname});
			}
		}
		return ret;
	},		
	_get_others_list:function(data, name, check){
		var ret = [];
		var pname = name.toLowerCase();
		for (var i=0; i<data.aOrder.length; i++){
			var key = data.aOrder[i];
			if (check && !check[key]) continue;
			var mname = key.toLowerCase();
			var info = data.aPull[key];
			var assert = info.assert || { descr:""};

			
			var defined = ((info.defined&&info.defined[0])?info.defined[0].replace("webix.",""):name);
			var mdefined = defined.toLowerCase();
			
			if (mdefined == pname){
				this._save_page("other.php", {
					file:mdefined+"_"+mname+"_other.md",
					name:key,
					defined:defined,
					params:JSON.stringify(assert.assert),
					descr:assert.short
				});
				ret.push({name:key, descr:assert.short, owner:mdefined});
			} else {
				this._save_page("link.php", {
					file:pname+"_"+mname+"_other.md",
					link:mdefined+"_"+mname+"_other.md"
				});
				ret.push({name:key, descr:assert.short, owner:"link/"+pname});
			}
		}
		return ret;
	},
	_get_mixins_list:function(data, name){
		var res = [];
		for (var i=0; i<Freid.mOrder.length; i++){
			var key = Freid.mOrder[i];
			var name = key.replace("webix.","");
			var lname = name.toLowerCase();
			var moto = (doc["webix."+lname]||{}).short;

			res.push({ name:name.toLowerCase(),  short:moto });
			
			var data = Freid.touch(key, Freid.mPull[key]);
			var methods = JSON.stringify(this._get_methods_list(data, name));
			var configs = JSON.stringify(this._get_configs_list(data, name));
			var events = JSON.stringify(this._get_events_list(data, name));
			var others = JSON.stringify(this._get_others_list(data, name));
			

			this._save_page("api.php", {
				file:lname,
				name:name,
				methods:methods,
				events:events,
				configs:configs,
				others:others
			});
		}

		return res;
	}
};