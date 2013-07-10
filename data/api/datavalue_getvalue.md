getValue
=============


@short:returns the current value of the component
	

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
$$('color3').setValue("#2626FF")

$$('color').getValue();// -> "#2626FF"

@relatedapi:
	api/ui.colorboard_setvalue.md
    api/datavalue_value_config.md
@related: 
	desktop/controls_guide.md
    
@template:	api_method
@defined: dataValue
@descr:



Value of the control may be:


- text value in the input [text](desktop/controls.md#text) and [textarea](desktop/controls.md#textarea) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/controls.md#checkbox), [radio](desktop/controls.md#radio), [toggle](desktop/controls.md#toggle));
- selected option of intergal buttons ([tabbar](desktop/controls.md#tabbar), [tabview](desktop/tabview.md), [segmented](desktop/controls.md#segmented)
or selected option of [select](desktop/controls.md#select), [richselect](desktop/controls.md#richselect) 
and [combo](desktop/controls.md#combo)).

