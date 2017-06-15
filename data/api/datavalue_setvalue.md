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
	api/datavalue_getvalue.md
@related:
	desktop/controls_guide.md
@defined:	DataValue
@descr:

Value of the control may be:

- text value in the input [text](desktop/text.md) and [textarea](desktop/textarea.md) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/checkbox.md), [radio](desktop/radio.md), [toggle](desktop/toggle.md));
- selected option of integral buttons ([tabbar](desktop/tabbar.md), [tabview](desktop/tabview.md), [segmented](desktop/segmented.md));
- selected option of [select](desktop/select.md), [richselect](desktop/richselect.md) and [combo](desktop/combo.md);
- string with selected options of a [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) control.

@metadescr: Learn how you can use the setValue method to set a new value for the Webix component.
@doctitle: The documentation page for the setValue method of the DataValue mixin.
