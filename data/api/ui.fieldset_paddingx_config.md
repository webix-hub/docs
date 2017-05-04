paddingX
=============


@short:sets the right and left padding (applies the specified value to both sides) 
	
@type: number
@default:18
@example:
webix.ui({
    view:"fieldset", 
    label:"Field Set 1",
    paddingX:20,
    body:{
        rows:[
            { view:"text", label:"Email"},
            { view:"text", label:"Password"}
        ]
    }
});

@template:	api_config
@descr:

@relatedapi:
api/ui.fieldset_paddingy_config.md
