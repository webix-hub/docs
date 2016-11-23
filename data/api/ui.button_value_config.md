value
=============


@short: sets the initial value for a control
	

@type: string, number
@example:
rows:[
	{ view:"text", name:"country", label:"Country", value:"Belarus" },
	{ 
		view:"combo", value:1, options:[ 
			{ id:1, value:"Banana" },
			{ id:2, value:"Papaya" }, 
			{ id:3, value:"Apple" }
		]
	},
	{ view:"button", type:"form", value:"Submit data"}
]

@relatedsample:
	13_form/01_controls/09_combo.html
@related:
	desktop/controls_guide.md#definingvaluesduringinit
@relatedapi: 
	api/datavalue_getvalue.md
    api/datavalue_setvalue.md

@template:	api_config
@descr:


All controls fall into: 

- **single-value** - those containing a string or a number;
- **multiple-value** - those containing an array of values;

In case of multiple controls the **value** property defines the initially selected one. 

**Value** of the control may be:

- text value in the input [text](desktop/text.md) and [textarea](desktop/textarea.md) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/checkbox.md), [radio](desktop/radio.md), [toggle](desktop/toggle.md));
- selected option of integral buttons ([tabbar](desktop/tabbar.md), [tabview](desktop/tabview.md), [segmented](desktop/segmented.md);
- selected option of [select](desktop/select.md), [richselect](desktop/richselect.md), and [combo](desktop/combo.md);
- string with selected options of a [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) control.
