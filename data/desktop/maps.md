Maps Integration
========

The library allows integration geographical maps into the apps with the help of dedicated components. Three maps are supported: 

- **Google Map**
- **Nokia Map**
- **Yandex Map**

Ui-related maps inherit from [view](desktop/view.md).

###Initialization

1 . First of all, you need to **add a special file** to the head section of your document. The script helps connect to thirdparty applications without linking to them directly:

- For **Google Map** 

<img src="desktop/googlemap.png"/>

~~~html
<script src="../../sources/thirdparty/googlemap.js" type="text/javascript"></script> 
~~~

- For **Nokia Map**

<img src="desktop/nokiamap.png"/>

~~~html
<script src="../../sources/thirdparty/nokiamap.js" type="text/javascript"></script> 
	<--!besides, Nokia map requires direct connection to their site-->
<script src="http://api.maps.nokia.com/2.2.3/jsl.js?with=all" type="text/javascript" charset="utf-8"></script> 
~~~

To create a Nokia map, you should have a [Nokia Account](https://account.nokia.com) registered. Once you register, they send you **"appID"** and **"authenticationToken"** keys that you ought to enter:

~~~js
webix.ready(function(){
nokia.Settings.set( "appId", "..."); //instead of dots enter your keys!
nokia.Settings.set( "authenticationToken", "...");

webix.ui({
 // nokia map config
 	})
 });
~~~
- For **Yandex Map**

<img src="desktop/yandexmap.png"/>

~~~html
<script src="../../sources/thirdparty/yandexmap.js" type="text/javascript"></script> 
~~~

2 . Secondly,  choose a **library component** you want to nest a map into. Ui-related [Window](desktop/window.md) would be an excellent choice here. 

~~~js
webix.ui({ 
	view:"window", id:"mapwin",
	body:{ ... }, //place for the map
	head:{....}, //place for toolbar 
	top:50, left:50, width:600, height:500 // dimensions and positioning of the window
		}).show();
~~~       
        
3 . Thirdly, **create a map** inside the window body and assign properties to it according to your needs. All map constructors are the same differing only in the map name. 

{{snippet
Map Initialization
}}
~~~js
{ 
	view:"yandex-map", // "nokia-map","google-map"
	id:"map",
	zoom:6,
	center:[ 48.724, 8.215 ]
}
    
~~~

###Map Properties

Map's properties define the initial position of the map: 

- **zoom**: defines how close you'd like to be to the Earth surface;
- **center**: sets the center of the map. It's an array of two elements ( latilute and longtitude ) specified via comma;

{{sample 32_thirdparty/09_google_map.html }}

###Working with Maps

To include maps in the app and make them interactive you should refer to the API reference each of the services provide. 

For instance, the [GoogleMap API](https://developers.google.com/maps/documentation/javascript/) for javascript-based applications offers rich colection of map options, 
controls, overlays, services, layers, etc. that you can freely use while working with a **google-map** intergrated into our library. 

For instance, to show the necessary map piece on request, you can use the following function where you pass desired **lat**, **lng** and **zoom** values:

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
- **google.maps.LatLng** class is a point on the map defined with latitude and longtitude coordinates;
- **mapTypeId** is a  property of the google.maps.mapOptions object, that allows setting a map type (HYBRID, ROADMAP, SATELLITE, TERRAIN).
 
###Related Articles

- [Setting Dimensions for the Components](desktop/dimensions.md)
- [Redefinition of the Components](desktop/redefinition.md)

@complexity:3