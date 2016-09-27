mapType
=============

@short:
	sets the Google map type

@type: string
@example:
webix.ui({
    //provide your own Google API key
    key:"AIzaSyAi0oVNVO-e603aUY8SILdD4v9bVBkmiTg",
    view:"google-map",
    id:"map",
    zoom:6,
    center:[ 48.724, 8.215 ],
    mapType:"HYBRID"    
});

@template:	api_config
@descr:
There are four Google map types: "ROADMAP","SATELLITE","HYBRID","TERRAIN". Uppercase is a must.

