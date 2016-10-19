Portlet
==========

##API Reference

- [Methods, properties and events](api/refs/ui.portlet.md)
- [Samples](http://docs.webix.com/samples/60_pro/09_portlet/index.html)

##Overview

Portlet is a layout component that allows placing other widgets inside of it. You can easily drag this or that portlet anywhere you want on the page.
Thus, it's possible to change the app's structure in a simple way, without writing any extra code.<br><br>
<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/portlet.png"/>

Initialization
---------------

As any other component, Portlet can be initialized in a container or as a full-screen view.

To initialize a portlet in a div container, you should create a container first:

~~~html
<div id="divA" style="width:600px;height:400px;"></div>
~~~

Then, in order to place the component into the container, specify the container property inside of the view constructor, as it's shown in the example below.

Portlet consists of a body (taking either a view or a text template) without the head section. 
A header can also be added. You'll find the details below.

~~~js
webix.ui({
	container:"divA",
	type:"space",
	view:"portlet", body:{
		template:"Drag and drop portlets"
	}
});
~~~

{{sample
60_pro/09_portlet/02_portlet_move.html
}}


Moving portlets
--------------

You can move portlets by the handler. While dragging a portlet, possible positions for dropping are defined by highlighting.
A portlet can be placed as a column or as a row.

<img src="desktop/portlet_moving.png">

{{sample 60_pro/09_portlet/02_portlet_move.html}}

There are also two events that will help you to handle portlets' moving - *onBeforePortletMove* and *onAfterPortletMove*.

They fire before/after a portlet's moving correspondingly and take the following parameters:

- source - (object)	the original parent layout
- parent - (object) a new parent layout
- active - (object) also *this*, a portlet to move
- target - (object)	a target view (highlighted, will be placed beside the *active* one within the *parent* layout)
- mode - (string) drag direction relative to the *target*

Both these events are attached not to separate portlets, but globally:

~~~js
webix.attachEvent("onBeforePortletMove", function(source,parent,active,target,mode){ 
    // some code here
});
~~~

{{editor http://webix.com/snippet/ff39c568	onBeforePortletMove event}}

~~~js
webix.attachEvent("onAfterPortletMove", function(source,parent,active,target,mode){ 
    // some code here
});
~~~

{{editor http://webix.com/snippet/0a06dd39	onAfterPortletMove event}}


Dragging by the header
------------------------

In order to drag a portlet you can use not only the handler, but also the portlet header. 
Just set some string value for the *header* property in the portlet definition:

~~~js
webix.ui({
    type:"space",
    view:"portlet", header:"Drag me", body:{
        template:"Drag and drop portlets"
    }
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
	type:"space",
	view:"portlet", mode:"replace", body:{
		template:"Drag and drop portlets"
	}
});
~~~

<img src="desktop/portlet_replacing.png">

{{sample 60_pro/09_portlet/01_portlet_replace.html}}


###One direction moving

There are two modes that allow portlets move either only in the horizontal direction or in the vertical one. They are called "cols" and "rows", respectively.
In the "cols" mode portlets are moved only along the x-axis. In the "rows" mode portlets can only be placed along the y-axis.

~~~js
webix.ui({
	type:"space",
	rows:[
		{ template:"Only X-snap here", type:"header"},
		{ type:"wide", cols:[
			{ view:"portlet", mode:"cols", body:{
				template:"A col 1"
			}},
			{ view:"portlet", mode:"cols", body:{
				template:"B col 2",
			}},
			{ view:"portlet", mode:"cols", body:{
				template:"C col 3"
			}},
		]
		}
	]
});

~~~

<img src="desktop/portlet_one_direction.png">

{{sample 60_pro/09_portlet/05_one_direction.html}}

##Adding other components

It's very easy to add other component into a portlet. All you need to do is to specify the view name, data source and any other necessary properties in the portlet's body:

~~~js
webix.ui({
	type:"space",
	rows:[
		{ template:"Only X-snap here", type:"header"},
		{ type:"wide", cols:[
			{ view:"portlet", mode:"cols", body:{
				view:"tree", data:smalltreedata
			}},
			{ view:"portlet", mode:"cols", body:{
				view:"list", data:small_film_values_set, select:true, autoheight:true
			}},
			{ view:"portlet", mode:"cols", body:{
				view:"datatable", data:small_film_set, autoConfig:true, autoheight:true
			}},
		]
		}
	]
});
~~~

<img src="desktop/portlet_adding_components.png">

{{sample 60_pro/09_portlet/04_drag_component.html}}

@edition:pro

@spellcheck: portlet, portlet's, portlets