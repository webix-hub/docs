$save
=============

@short:
	the method that will be called when data is saved

@type: function

@example:

webix.protoUI({
    view:"myview",
	$save: function $save(name, data) {
		var save = this.config.save;
		if (save && save[name]) webix.ajax().post(save[name], data);
	},
}, webix.ui.view);

@template:	api_config
@descr:


