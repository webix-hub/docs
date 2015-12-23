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
$$('color').setValue("#2626FF")

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

- text value in the input [text](desktop/text.md) and [textarea](desktop/textarea.md) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/checkbox.md), [radio](desktop/radio.md), [toggle](desktop/toggle.md));
- selected option of integral buttons ([tabbar](desktop/tabbar.md), [tabview](desktop/tabview.md), [segmented](desktop/segmented.md);
- selected option of [select](desktop/select.md), [richselect](desktop/richselect.md), and [combo](desktop/combo.md);
- string with selected options of a [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) control.
