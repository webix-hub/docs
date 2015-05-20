Portlet
==========

##API Reference

- [Methods, properties and events](api__refs__ui.portlet.html)
- [Samples](http://docs.webix.com/samples/60_pro/09_portlet/index.html)

##Overview

Portlet is a layout component that allows placing other widgets inside of it. You can easily drag this or that portlet anywhere you want on the page.
Thus, it's possible to change the app's structure in a simple way, without writing any extra code.<br><br>
<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/portlet.png"/>

Initialization
---------------
Portlet consists of a body (taking either a view or a text template) without the head section. 
A header can also be added. You'll find the details below.

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


Moving portlets
--------------

You can move portlets by the handler. While dragging a portlet, possible positions for dropping will be defined by blur.
A portlet can be placed as a column or as a row.

<img src="desktop/portlet_moving.png">

{{sample 60_pro/09_portlet/02_portlet_move.html}}


Dragging by the header
------------------------

In order to drag a portlet you can use not only the handler, but also the portlet header. 
Just set some string value for the *header* property in the porlet definition:

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


Modes of moving portlets
----------------------

###Replacing portlets

Instead of simply moving a portlet to a new position, it's also possible to replace the target portlet with the moved one.
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

There are two modes that allow portlets move either only in the horizontal direction or in the vertical one. They are called "cols" and "rows", respectively.
In the "cols" mode portlets are moved only along the x-axis. In the "rows" mode portlets can only be placed along the y-axis.

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