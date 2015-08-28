Segmented Button
===============

##API Reference

- [Methods, properties and events](api/refs/ui.segmented.mdl) 
- [Shared functionality](desktop/controls_guide.md)

##Overview

Segmented is an integral button with as many segments as you like. Can be used for switching between [multiview](desktop/multiview.md) cells.

<img src="desktop/segmented.png"/>

##Initialization 

~~~js
{view:"segmented", multiview:true, value:1, options:[
	{ id:"1", value:"Section A" }, // the initially selected segment
	{ id:"2", value:"Section B" }, 
	{ id:"3", value:"Section C" }]
}

//short form for options array
{ view:"segmented", options:["Section A", "Section B", "Section C"]}
~~~

{{editor http://webix.com/snippet/53f80412	Holistic Panel with Multiple Buttons ('segmented')}}

####Main properties

- **multiview** (boolean) - connects the control to the multiview cells, enables switching between these cells;
- **options** (array, object) - defines the buttons (segments) within the control. [Details](desktop/controls_guide.md#defininginitialvalues);
- **value** (string, number) 
	- within **options** array it sets titles for button segments;
 	- within Segmented constructor it defines the initially selected item for the control;
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **selected** (string) - defines the tab that will be visible initially.

##Working with Segmented Button

[Adding and Deleting Segments (Options) on the Go](desktop/tabs_options.md)

