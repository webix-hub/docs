setValue
=============



@short:
	sets a new value for the component

@params:
- value		string 	a new value for the button

@example:
webix.ui({
    container:"box",
    view:"form", 
    elements:[
        { view:"button", id:"b1", value:"Edit", type:"form" },
        { view:"button", id:"b2", value:"Back", type:"form" }
    ]
});
...
$$('b1').setValue("Save");
$$('b2').setValue("Cancel");

@template:	api_method
@relatedapi:
	api/ui.button_getvalue.md
@related:
	desktop/controls_guide.md
@defined:	DataValue
@descr:

Value of the control may be:

- text value in the input [text](desktop/controls.md#text) and [textarea](desktop/controls.md#textarea) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/controls.md#checkbox), [radio](desktop/controls.md#radio), [toggle](desktop/controls.md#toggle));
- selected option of integral buttons ([tabbar](desktop/controls.md#tabbar), [tabview](desktop/tabview.md), [segmented](desktop/controls.md#segmented);
- selected option of [select](desktop/controls.md#select), [richselect](desktop/controls.md#richselect) and [combo](desktop/controls.md#combo));
- string with selected options of a [multiselect](desktop/controls.md#multiselect) control.


