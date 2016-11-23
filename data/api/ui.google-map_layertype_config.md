layerType
=============

@short:
	sets the type of a map layer

@type: string
@example:
webix.ui({
    //provide your own Google API key
    key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
    view:"google-map",
    id:"map",
    zoom:6,
    center:[ 48.724, 8.215 ],
    layerType:"heatmap"    
});

@template:	api_config
@descr:

There are "marker" (default) and "heatmap" types are available.

@related:
desktop/googlemap.md

@relatedsample:
34_googlemap/05_heatmap.html
