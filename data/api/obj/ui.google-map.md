
{{memo a datastore-based widget for rendering geographical data with Google Maps}}

GoogleMap widget allows working with geographical data using Webix and Google Map API. 
This widget is based on View and inherits API from DataStore.

### Constructor

~~~js
var googlemap = webix.ui({
    //provide your own Google API key
    key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
    view:"google-map",
    id:"map",
    zoom:6,
    center:[ 48.724, 8.215 ]
});
~~~

### Where to start

- [Overview of the GoogleMap Widget](desktop/googlemap.md)
- [Samples](http://docs.webix.com/samples/34_googlemap/index.html)