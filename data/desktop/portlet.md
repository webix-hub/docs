Portlet
==========

##API Reference

- [Methods, properties and events](api__refs__ui.portlet.html)
- [Samples](http://docs.webix.com/samples/60_pro/09_portlet/index.html)

##Overview

Portlet is a layout component that allows placing other widgets inside of it. You can easily drag this or that cells around the page.
Thus, it's possible to change the app's structure in a simple way, without writing additional code for it.<br><br>
<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/portlet.png"/>

Initialization
---------------

~~~js
webix.ui({
	container:"divA",
	type:"space",
	view:"portlet", body:{
		template:"Drag and drop portlets"
	}}
});
~~~

{{sample
60_pro/09_portlet/02_portlet_move.html
}}


Moving cells
--------------

You can move portlet cells by the handler. While dragging a cell, possible positions for dropping will be indicated by blur.
A cell can be placed as a column or as a row.

<img src="desktop/portlet_moving.png">

{{sample 60_pro/09_portlet/02_portlet_move.html}}


Dragging by the header
------------------------

In order to drag a cell you can use not only the handler, but also the cell header. Just set some string value for the *header* property in the porlet definition:

~~~js
webix.ui({
	container:"divA",
	type:"space",
	view:"portlet", header:"Drag me", body:{
		template:"Drag and drop portlets"
	}}
});
~~~

<img src="desktop/portlet_header.png">

{{sample 60_pro/09_portlet/03_portlet_drag_header.html}}


Setting modes of moving
----------------------

###Replacing cells

Instead of simply moving a cell to a new position it's also possible to replace the target cell and the moved one.
This mode is enabled by specifying the *mode* property with the value "replace":

~~~js
webix.ui({
	container:"divA",
	type:"space",
	view:"portlet", mode:"replace", body:{
		template:"Drag and drop portlets"
	}}
});
~~~

<img src="desktop/portlet_replacing.png">

{{sample 60_pro/09_portlet/01_portlet_replace.html}}


###One direction moving

There are two modes that let make cells moving eiter horizontal or vertical. They are called "cols" and "rows", respectively.
In the "cols" mode cells are moved only along the x-axis. In the "rows" mode cells can only be placed along the y-axis.

~~~js
webix.ui({
	container:"divA",
	type:"space",
	view:"portlet", mode:"cols", body:{
		template:"Drag and drop portlets"
	}}
});
~~~

<img src="desktop/portlet_one_direction.png">

{{sample 60_pro/09_portlet/05_one_direction.html}}


@edition:pro