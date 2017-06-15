heatmapConfig
=============

@short:
	defines the heatmap configuration, contains various Google API properties 

@type: object
@example:
webix.ui({
    //provide your own Google API key
    key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
    view:"google-map",
    id:"map",
    zoom:13,
    center:[ 37.774546, -122.433523 ],
    layerType:"heatmap",
    heatmapConfig:{         
        opacity:"0.4"       
    },                      
    url:"data/heatmap.json"
});

@template:	api_config
@descr:

@related:
desktop/googlemap.md#workingwithheatmap


@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [JavaScript Map](https://webix.com/widget/maps/)