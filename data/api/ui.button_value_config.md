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

**Value for the control may be:** 

- text string in the [text](desktop/controls.md#text) or [textarea](desktop/controls.md#textarea) control;
- initial number of [slider](desktop/controls.md#slider) and [counter](desktop/controls.md#counter);
- state of two-state controls ([checkbox](desktop/controls.md#checkbox), [radio](desktop/controls.md#radio) and [toggle](desktop/controls.md#toggle))
- selected option of integral buttons ([tabbar](desktop/controls.md#tabbar) and [segmented](desktop/controls.md#segmented))
- text on the [button](desktop/controls.md#button);
- selected date or color item ([datepicker](desktop/controls.md#datepicker), [colorpicker](desktop/controls.md#colorpicker)).
