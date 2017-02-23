getMap
=============

@short:
	returns a GoogleMap map object

@params:



@example:

~~~js
var mapObj = $$("map").getMap();
~~~

@template:	api_method
@descr:

The method can take the *waitMap* parameter. If passed, the method returns a promise which will be resolved when the map is rendered.

~~~js
$$("map").getMap().then(function(mapObj){
    // some code
});
~~~

