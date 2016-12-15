GoogleMap
=============

##API Reference

- [Methods, properties and events](api/refs/ui.google-map.md)
- [Samples](http://docs.webix.com/samples/34_googlemap/index.html)


Overview
----------

GoogleMap widget allows working with geographical data with the help of Webix and Google Map API. This widget is based on desktop/view.md and 
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

The following properties define configuration of the GoogleMap widget: 

- **id** - (string) defines the unique ID of the widget;
- **zoom** - (number) defines the resolution of map objects displaying;
- **center** - (array) sets the center of the map. It's an array of two elements (latitude and longitude) with comma delimiter.
- **mapType** - (string) sets the Google map type.

There are four Google map types: "ROADMAP","SATELLITE","HYBRID","TERRAIN". Uppercase is a must.

{{sample 34_googlemap/05_heatmap.html}}

- **layerType** - (string) the type of map layer

There are two types of layer you can use for the GoogleMap widget:

- "marker" - allows setting markers for particular points

{{sample 34_googlemap/02_markers.html}}

- "heatmap" - presents values by means of colors

{{sample 34_googlemap/05_heatmap.html}}


Loading Data into GoogleMap
------------------------

GoogleMap widget is datastore-based, so you can work with it as with any other data widget.

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

All data objects will be displayed as markers or heatmap, depending on the specified type of layer.


**Obligatory properties**

There are two required properties that should be specified in the point's data object:

- lat - the latitude coordinate
- lng - the longitude coordinate

All other available properties can be found in the [Google API Reference](https://developers.google.com/maps/documentation/javascript/reference).


Getting the GoogleMap object
----------------------------

To get the map object, you can make use of the api/ui.google-map_getmap.md method. 
It will return a promise which will be resolved when a map is rendered.

~~~js
$$("map").getMap().then(function(mapObj){
    // some code
});
~~~

Rendering data on a map
---------------------

The **drawData()** method draws data on a map. 

~~~js
$$("map").drawData();
~~~

Working with Markers
----------------------

###Getting marker object

To get the marker object, use the **getItem()** method: 

~~~js
$$("map").getItem(id).$marker;
~~~


###Controlling marker visibility

You can set the *hidden* property for a marker (data object), to hide and show it, when needed.

~~~js
{ id:1, lat:48.782,  lng:9.177,  hidden:true}
~~~

###Showing a marker

To show a marker, use the **showItem()** method. It takes the marker's id as a parameter:

~~~js
$$("map").showItem(1).$marker;
~~~

###Catching a click on a marker

To catch a click on a marker, use the **onItemClick** event:

~~~js
$$("map").attachEvent("onItemClick", function(id, marker){
	// your code
});
~~~

The handler function takes two parameters:

- id - (number) the marker id
- marker - (object)	- the marker object

###Detecting drag-n-drop actions

There are two DnD-related events. They are available for markers that have enabled *draggable* property in their configuration:

~~~js
{ id:1, lat:48.782,  lng:9.177,  draggable:true}
~~~

1) **onAfterDrop** event fires after drag-n-drop of a marker is finished. The handler function takes two parameters:

- id - (number) the marker id
- item - (object) the data object

~~~js
$$("map").attachEvent("onAfterDrop", function(id, item){
	// your code
});
~~~

2) **onDrag** event fires when drag-n-drop of a marker has started. 

~~~js
$$("map").attachEvent("onDrag", function(id, item){
	// your code
});
~~~ 

The handler function takes two parameters:

- id - (number) the marker id
- item - (object) the data object


{{sample 34_googlemap/04_markers_draggable.html}}

Working with Heatmap
---------------------

###Getting heatmap object

Heatmap is constantly updated. You can get the actual heatmap object by using the api/ui.google-map_onheatmaprender_event.md event.
It will fire when a heatmap will be rendered.

~~~js
$$("map").attachEvent("onHeatMapRender", function(heatmapObj){
	// your code
});
~~~

The handler function takes the heatmap object as a parameter.


###Specifying heatmap configuration

You can configure the heatmap displaying with the help of the api/ui.google-map_heatmapconfig_config.md property.
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

All other available properties can be found in the [Google API Reference](https://developers.google.com/maps/documentation/javascript/reference).




