value
=============


@short: sets the initial value for a control
	

@type: id
@example:
	rows:[
			{ view:"text", name:"country", label:"Contry", value:"Belarus" },
			{ 
				view:"combo", value:1, options:[ 
					{ id:1, value:"Banana"   },
					{ id:2, value:"Papai"   }, 
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

- **single-value** - those containing a string of a number;
- **multiple-value** - those containing an array of values;

In case of multiple controls **value** property defines the one initially chosen. 

**Value of the control may be**:

- text value in the input [text](desktop/controls.md#text) and [textarea](desktop/controls.md#textarea) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/controls.md#checkbox), [radio](desktop/controls.md#radio), [toggle](desktop/controls.md#toggle));
- selected option of integral buttons ([tabbar](desktop/controls.md#tabbar), [tabview](desktop/tabview.md), [segmented](desktop/controls.md#segmented);
- selected option of [select](desktop/controls.md#select), [richselect](desktop/controls.md#richselect) and [combo](desktop/controls.md#combo));
- string with selected options of a [multiselect](desktop/controls.md#multiselect) control.
