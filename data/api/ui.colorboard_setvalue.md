setValue
=============


@short:sets a new value for the component
	

@params:
-value	string	a color in the <i>hex</i> format	

@returns:
-value	string	a color in the <i>hex</i> format	

@example:
webix.ui({ 
    view:"colorboard",
    id:"color",
    cols    :30,
    rows    :30,
    width   :400,
    height  :400
});
$$('color3').setValue("#2626FF");

$$('color').getValue();// -> "#2626FF"


@template:	api_method
@relatedapi:
	api/ui.colorboard_getvalue.md
    api/datavalue_value_config.md
@related: 
	desktop/controls_guide.md
@descr:


