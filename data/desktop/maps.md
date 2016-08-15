Maps Integration
========

{{note JS files for these components aren't included in the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components). }}

Webix library allows to embed geographical maps into the app with the help of its own components. Four maps are supported: 

- **Google Map**
- **Nokia Map**
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

- For **Nokia Map**

<img src="desktop/nokiamap.png"/>

~~~html
<script type="text/javascript" src="./nokiamap.js"></script>
<script src="http://js.api.here.com/se/2.5.3/jsl.js" type="text/javascript" 
	charset="utf-8"></script>
~~~

Additionally, you should have a [Nokia Account](https://account.nokia.com) registered. 
Once you register, they send you **"appID"** and **"authenticationToken"** keys that you need to specify:

~~~js
webix.ready(function(){
	nokia.Settings.set( "appId", "..."); //instead of dots enter your keys!
	nokia.Settings.set( "authenticationToken", "...");

	webix.ui({
		//then init map
	});
});
~~~

{{sample 32_thirdparty/10_nokia_map.html}}

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
    ..//map config
});
~~~ 

Additionally, you can put the map into Webix [Window](desktop/window.md): 

~~~js
webix.ui({ 
	view:"window", id:"mapwin",
	body:{ ... }, //map config
	head:{....}, //place for toolbar 
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
	view:"yandex-map", // or "nokia-map", "google-map", "open-map" 
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

To make online maps interactive you should refer to the API reference each of the services provides. 

For instance, the [GoogleMap API](https://developers.google.com/maps/documentation/javascript/) for javascript-based applications offers a rich collection of map options, 
controls, overlays, services, layers, etc. that you can use while working with a **google-map** integrated into our library. 

For instance, to show the necessary map piece on request, you can use the following function with the desired **lat**, **lng** and **zoom**:

~~~js
function show_position(lat, lng, zoom) {
	var myLatlng = new google.maps.LatLng(lat, lng);
	$$('map').map.setOptions({
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