Maps Integration
========

{{todo
check link to heremap when sample is in master
}}

{{note JS files for these components aren't included in the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components). }}

Webix library allows to embed geographical maps into the app with the help of its own components. Four maps are supported: 

- **Google Map**
- **Here Map**
- **OpenStreet Map**
- **Yandex Map**

Ui-related maps inherit from [view](desktop/view.md).

###Initialization {#init}

1 . First of all, you need to **add a special file** to the head section of your document. The script helps connect to third party applications without linking to them directly:

The extensions are taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components). Note that in documentation samples they are linked in another way, but you should follow the patterns below:

- For **Google Map** 

<img src="desktop/googlemap.png"/>

~~~html
<script type="text/javascript" src="./googlemap.js"></script>
~~~

{{sample 32_thirdparty/09_google_map.html}}

- For **Here Map**

<img src="desktop/heremap.png"/>

~~~html
<script type="text/javascript" src="./heremap.js"></script>
~~~

{{sample 32_thirdparty/10_here_map.html}}

- For **OpenStreet Map**

<img src="desktop/openmap.png"/>

~~~html
<script type="text/javascript" src="./openmap.js"></script>
~~~



{{sample 32_thirdparty/12_open_map.html }}

- For **Yandex Map**

<img src="desktop/yandexmap.png"/>

~~~html
<script type="text/javascript" src="./yandexmap.js"></script>
~~~

{{sample 32_thirdparty/11_yandex_map.html}}

2 . Secondly, choose where on page the map will be initialized. You can render it into any **HTML element** defined as the map's **container**:

~~~js
// <div id="mydiv"></div>
webix.ui({
	container:"mydiv",
    //map config
});
~~~ 

Additionally, you can put the map into Webix [Window](desktop/window.md): 

~~~js
webix.ui({ 
	view:"window", id:"mapwin",
	body:{ ... }, //map config
	head:{ ... }, //place for toolbar 
	top:50, left:50, 
    width:600, height:500 // dimensions and positioning of the window
}).show();
~~~      

        
3 . Thirdly, **create a map** and assign properties to it according to your needs. All map constructors identical differing only in the map **view name**. 

{{snippet
Map Initialization
}}
~~~js
{ 
	view:"yandex-map", // or "here-map", "google-map", "open-map" 
	id:"map",
	zoom:6,
	center:[ 48.724, 8.215 ]
}
~~~

###Map Properties

Map's properties define the initial position of the map: 

- **id** - *string* - defines the component unique ID;
- **zoom** - *number* - defines how close you'd like to be to the Earth surface;
- **center** - *array* - sets the center of the map. It's an array of two elements ( latitude and longitude) with comma delimiter.

{{sample 32_thirdparty/09_google_map.html }}

###Working with Maps

To make online maps interactive you should refer to the API reference each of the services provides. To access the map object you need to use the **getMap()** method: 

~~~js
var map = $$("map").getMap();
~~~

For instance, the [GoogleMap API](https://developers.google.com/maps/documentation/javascript/) for javascript-based applications offers a rich collection of map options, 
controls, overlays, services, layers, etc. that you can use while working with a **google-map** integrated into our library. 

For instance, to show the necessary map piece on request, you can use the following function with the desired **lat**, **lng** and **zoom**:

~~~js
function show_position(lat, lng, zoom) {
	var myLatlng = new google.maps.LatLng(lat, lng);
	$$("map").getMap().setOptions({
		zoom: zoom,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
}
~~~

- **google.maps.map** class features lots of methods, one of them being **setOptions()** that allows for defining the area on the map;
- **google.maps.LatLng** class is a point on the map defined  by latitude and longitude coordinates;
- **mapTypeId** is a property of *google.maps.mapOptions* object, that allows setting a map type (HYBRID, ROADMAP, SATELLITE, TERRAIN).
 
###Related Articles

- [Setting Dimensions for the Components](desktop/dimensions.md)
- [Redefinition of the Components](desktop/redefinition.md)

@complexity:3

@spellcheck: ROADMAP, google, LatLng, lng, appID, nokia