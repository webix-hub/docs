GoogleMap
=============

##API Reference

- [Methods, properties and events](api/refs/ui.googlemap.md)
- [Samples](http://docs.webix.com/samples/34_googlemap/index.html)


Overview
----------

GoogleMap allows working with geographical data with the help of Webix and Google Map API. This widget is based on desktop/view.md and 
inherits API from api/refs/datastore.md.

<img src="desktop/googlemap_widget.png">

Initialization
-----------------

You can initialize a basic GoogleMap widget using the code below:

~~~js
webix.ui({
	//provide your own Google API key
	key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
   	view:"google-map",
    id:"map",
	zoom:6,
	center:[ 48.724, 8.215 ]
});
~~~

{{note Pay attention that before working with Webix GoogleMap you need to
[get a personal Google API key](https://developers.google.com/maps/documentation/javascript/get-api-key).}}

{{sample 34_googlemap/01_basic.html}}

**Main Properties**

The following properties define the initial position of the map:

- **id** - (string) defines the unique ID of the widget;
- **zoom** - (number) defines the resolution of map objects displaying;
- **center** - (array) sets the center of the map. It's an array of two elements (latitude and longitude) with comma delimiter.
- **layerType** - (string) the type of map layer

Working with GoogleMap
------------------------

To make use of all the possibilities of the map, you should look up the [Google API Reference](https://developers.google.com/maps/documentation/javascript/reference).

Webix GoogleMap is a datastore-based widget, so you can work with it as with any other data widget.

###Loading data

Each map point is a separate data object. You can store a set of map points in a dataset and use all [common ways of data loading](desktop/data_loading.md) to load
data into a map.

For example, you can set data inline with the help of the *data* parameter:

~~~js
webix.ui({
	//provide your own Google API key
	key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
   	view:"google-map",
    id:"map",
	zoom:6,
	center:[ 48.724, 8.215 ],
	data:[
    	{ id:1, lat:48.782,  lng:9.177,   label:"A", draggable:true },
        { id:2, lat:47.366,  lng:8.55,    label:"B", draggable:true },
        { id:3, lat: 48.137, lng: 11.575, label:"C", draggable:true }
	]
});
~~~

**Obligatory properties**

There are two required properties that should be specified in the point's data object:

- lat - the latitude coordinate
- lng - the lingitude coordinate


**Setting the layer type**

There are two types of layer you can use for the GoogleMap widget:

- "marker" - allows setting markers for particular points

{{sample 34_googlemap/02_markers.html}}

- "heatMap" - presents values by means of colors

{{sample 34_googlemap/05_heatmap.html}}

To apply one of the layer types, use the *layerType* config:

~~~js
webix.ui({
	//provide your own Google API key
	key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
   	view:"google-map",
    id:"map",
	zoom:6,
	center:[ 48.724, 8.215 ];
    layerType:"marker"  /*!*/
});
~~~

The *marker* type is set by default.


**Controlling marker visibility**

You can set the *hidden* property for a marker (data object), to hide and show it, when needed.

~~~js
{ id:1, lat:48.782,  lng:9.177,  hidden:true}
~~~

Other properties are optional. You can find all the available properties in the [Google API Reference](https://developers.google.com/maps/documentation/javascript/reference).

**Specifying heatmap configuration**

You can configure the heatmap displaying with the help of the *heatmapConfig* property.
It is an object that can contain various Google API properties for heatmap, e.g. opacity 

~~~js
webix.ui({
	//provide your own Google API key
	key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
    	view:"google-map",
    	id:"map",
	zoom:13,
	center:[ 37.774546, -122.433523 ],
	layerType:"heatmap",
	heatmapConfig:{			/*!*/
		opacity:"0.4"		/*!*/
	},						/*!*/
	url:"data/heatmap.json"
});
~~~

###Getting GoogleMap objects

You can get the objects of a map, a marker and of a heatmap to work with them further.

- to get the map object, use the following notation: **$$("map").map**
- to get the marker object, use the *getItem()* method: **$$("map").getItem(id).$marker**
- to refer to the heatmap object, use: **$$("map").heatmap**

Webix API for GoogleMap
----------------------

###Events

- **onItemClick**

fires when a marker is clicked. 

~~~js
$$("map").attachEvent("onItemClick", function(id, marker){
	// your code
});
~~~

The handler function takes two parameters:

- id - (number) the marker id
- marker - (object)	- the marker object

There are two DnD-related events. They are available for markers that have enabled *draggable* property in their configuration:

~~~js
{ id:1, lat:48.782,  lng:9.177,  draggable:true}
~~~

- **onAfterDrop**

fires after drag-n-drop of a marker is finished. The handler function takes two parameters:

- id - (number) the marker id
- item - (object) the data object

~~~js
$$("map").attachEvent("onAfterDrop", function(id, item){
	// your code
});
~~~


- **onDrag**

fires when drag-n-drop of a marker has started. 

~~~js
$$("map").attachEvent("onDrag", function(id, item){
	// your code
});
~~~ 

The handler function takes two parameters:

- id - (number) the marker id
- item - (object) the data object

###Methods

- **showItem** - shows a marker by id

~~~js
$$("map").showItem(1).$marker;
~~~

- **drawData** - draws data after each operation with marker. 

~~~js
$$("map").drawData();
~~~
