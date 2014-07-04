var Jung = {
	generateMD:function(component){
		this._save_index = 0;
		this._save_list = [];
		this._already_saving = false;


		this._generateTop(component);
	},
	_generateTop:function(component){
		var views = JSON.stringify(this._get_views_list());
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
			var templates = JSON.stringify(this._get_templates_list(data, name));
			var others = JSON.stringify(this._get_others_list(data, name));

			
			var lname = name.toLowerCase();
			this._save_page("api.php", {
				file:lname,
				name:name,
				based:"",
				methods:methods,
				events:events,
				templates:templates,
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
	_get_templates_list:function(data, name, check){
		var ret = [];
		var pname = name.toLowerCase();
		for (var i=0; i<data.tOrder.length; i++){
			var key = data.tOrder[i];
			if (check && !check[key]) continue;
			var mname = key.toLowerCase();
			var info = data.tPull[key];
			var assert = info.assert || { descr:""};

			
			var defined = ((info.defined&&info.defined[0])?info.defined[0].replace("webix.",""):name);
			var mdefined = defined.toLowerCase();
			
			this._save_page("template.php", {
				file:mdefined+"_"+mname+"_template.md",
				name:key,
				defined:defined,
				params:JSON.stringify(assert.assert),
				descr:assert.short
			});
			ret.push({name:key, descr:assert.short, owner:mdefined});
		}
		return ret;
	}
};