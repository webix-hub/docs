getValue
=============



@short:
	returns the current value of the control


@returns:
- value	string	the current value of the control

@example:
webix.ui({
    container:"box",
    view:"form", 
    elements:[
        { view:"button", id:"b1", value:"Edit", type:"form" },
        { view:"button", id:"b2", value:"Back", type:"form" }
    ]
});

$$('b1').getValue(); //returns "b1"


@template:	api_method
@relatedapi:
	api/ui.button_setvalue.md
    api/link/ui.form_getvalues.md
@related: 
	desktop/controls_guide.md
@defined:	ui.button	
@descr:

Value of the control may be:

- text value in the input [text](desktop/controls.md#text) and [textarea](desktop/controls.md#textarea) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/controls.md#checkbox), [radio](desktop/controls.md#radio), [toggle](desktop/controls.md#toggle));
- ID of selected option of integral buttons ([tabbar](desktop/controls.md#tabbar), [tabview](desktop/tabview.md), [segmented](desktop/controls.md#segmented)
or selected option of [select](desktop/controls.md#select), [richselect](desktop/controls.md#richselect) 
and [combo](desktop/controls.md#combo)).


