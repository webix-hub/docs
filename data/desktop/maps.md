Maps Integration
========

{{note JS files for these components aren't included in the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components). }}

Webix library allows to embed geographical maps into the app with the help of its own components. The following maps are supported: 

- **Here Map**
- **OpenStreet Map**
- **Yandex Map**
- **desktop/googlemap.md** (since version 4.0 is included into the main library package)

UI-related maps inherit from [view](desktop/view.md).


##Initialization {#init}

###Step 1. Add the connecting file

First of all, you need to **add a special file** to the head section of your document. The script helps connect to third party applications without linking to them directly:

The extensions are taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components). Note that in documentation samples they are linked in another way, but you should follow the patterns below:


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


###Step 2. Specify the map container 

Secondly, choose where on page the map will be initialized. You can render it into any **HTML element** defined as the map's **container**:

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

        
###Step 3. Create a map 

Thirdly, **create a map** and assign properties to it according to your needs. All map constructors identical differing only in the map **view name**. 

{{snippet
Map Initialization
}}
~~~js
{ 
	view:"yandex-map", // or "here-map", "open-map" 
	id:"map",
	zoom:6,
	center:[ 48.724, 8.215 ]
}
~~~

##Map Properties

Map's properties define the initial position of the map: 

- **id** - *string* - defines the component unique ID;
- **zoom** - *number* - defines how close you'd like to be to the Earth surface;
- **center** - *array* - sets the center of the map. It's an array of two elements ( latitude and longitude) with comma delimiter.

{{sample 32_thirdparty/11_yandex_map.html}}

##Working with Maps

To make online maps interactive you should refer to the API reference each of the services provides. To access the map object you need to use the **getMap()** method: 

~~~js
var map = $$("map").getMap();
~~~

For instance, the [Yandex Map API](https://tech.yandex.com/maps/doc/jsapi/2.1/quick-start/tasks/quick-start-docpage/?from=jsapi) for javascript-based applications offers 
a rich collection of map options, controls, overlays, services, layers, etc. that you can use while working with a **yandex-map** integrated into our library. 

For instance:

- to show the necessary map piece on request, you can use the **setCenter()** method with the desired **lat**, **lng** and **zoom**:

~~~js
$$("map").getMap().setCenter([lat, lang], zoom);
~~~

- to show a marker on a map, you should take two steps:
	- create an instance of the **Placemark** class that implements markers
    - add the marker to the **geoObjects** collection (the global collection of map objects):

~~~js
var myPlacemark = new ymaps.Placemark([lat, lang]);
$$("map").getMap().geoObjects.add(myPlacemark);
~~~


 
##Related Articles

- [Setting Dimensions for the Components](desktop/dimensions.md)
- [Redefinition of the Components](desktop/redefinition.md)

@complexity:3

@spellcheck: ROADMAP, google, LatLng, lng, appID, nokia