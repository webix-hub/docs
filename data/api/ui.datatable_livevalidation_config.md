liveValidation
=============


@short: validation during cell editing
	

@type: boolean
@example:

webix.ui({
    view:"datatable",
    rules:{
       price:function(obj){ return obj>0; }
    },
    liveValidation:true,
    ...
})


@template:	api_config
@descr:


If enabled, validation will run during text typing in editor