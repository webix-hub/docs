getValue
=============



@short:
	returns the current value of the control


@returns:
- value		string		the current value of the control

@example:
webix.ui({
    view:"form", 
    elements:[
        { view:"button", id:"b1", value:"Edit", type:"form" },
        { view:"button", id:"b2", value:"Back", type:"form" }
    ]
});

$$('b1').getValue(); //returns "Edit"


@template:	api_method
@relatedapi:
	api/ui.button_setvalue.md
    api/link/ui.form_getvalues.md
@related: 
	desktop/controls_guide.md
@defined:	ui.button	
@descr:

Value of the control may be:

- text value in the input [text](desktop/text.md) and [textarea](desktop/textarea.md) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/checkbox.md), [radio](desktop/radio.md), [toggle](desktop/toggle.md));
- selected option of integral buttons ([tabbar](desktop/tabbar.md), [tabview](desktop/tabview.md), [segmented](desktop/segmented.md);
- selected option of [select](desktop/select.md), [richselect](desktop/richselect.md), and [combo](desktop/combo.md);
- string with selected options of a [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) control.

