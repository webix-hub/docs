getMap
=============

@short:
	returns a GoogleMap map object

@params:

@returns:

- map		object		a GoogleMap map object

@example:
var mapObj = $$("map").getMap();


@template:	api_method
@descr:

The method can take the *waitMap* parameter set to *true*. If passed, the method returns a promise which will be resolved when the map is rendered.

~~~js
$$("map").getMap(true).then(function(mapObj){
    // some code
});
~~~



@seolinktop: [ui component library](https://webix.com)
@seolink: [google maps javascript](https://webix.com/widget/maps/)