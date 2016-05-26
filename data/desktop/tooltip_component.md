Tooltip
=============

##API Reference

- [Methods, properties and events](api/refs/ui.tooltip.md)
- [Samples](http://webix.com/snippet/a026f89d)

##Overview

Tooltip presents a static text that is rendered in the absolutely positioned container. It appears on hovering the mouse pointer over an item and may contain a hint or some additional information.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/tooltip_front.png" />

Initialization
----------------

To initialize Tooltip, you need to define all the necessary parameters in the webix.ui() constructor. 

~~~js
webix.ui({
  view:"tooltip", 
  template:"My #value#",
  height:100
}).show({id:1, value:"template"}, {x:0, y:0});  
~~~

Configuration properties
-----------------

The only obligatory property you need to define is the api/link/ui.tooltip_template_config.md one.

All other parameters are optional and can be used to configure the appearance and position of tooltip.
You can find the full list in the [API Reference](api/refs/ui.tooltip_props.md).

Displaying the tooltip
----------------------

In order to show a tooltip, you need to use the api/link/ui.tooltip_show.md method after initialization.

The method takes a hash of two objects as a parameter:

- data - (object) the data passed into the tooltip. It contains the following properties:
	- id - (string/number) the data item id
    - value - (string) the data item value
    
- position - (object) the position of the tooltip 
	- x - (number) - x coordinate
    - y - (number) - y coordinate
    
Setting tooltip position
-------------------

While specifiying the x and y coordinates to position the tooltip, pay attention that there are default parameters dx and dy which have the following values:

- dx:20
- dy:0

Thus, the resulting x position of the tooltip will be calculated as dx+x. For example, if you set the x parameter to 10, the tooltip will be moved to 30px.
As for the y coordinate, its value is also calculated as dy+y, but the resulting value won't differ from the y parameter value.