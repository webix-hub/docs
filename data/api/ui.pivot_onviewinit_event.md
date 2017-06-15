onViewInit
=============

@short:
	fires before inner view initialization

@params:

- id			string,number		inner view id
- config		object 				an object with a view configuration


@example:
// initialize filters in a different layout
webix.ui({
    id: "pivot",
    view: "pivot",
    on:{
   	 onViewInit: function(name, config){
   		 if(name == "filters" && $$("pivotFilters"))
   			  webix.ui(config.elements, $$("pivotFilters"));
   		 config.elements = false;
   	 }
    },
    ...
});


@template:	api_event
@descr:
The event is also called for Pivot Table on "filters" view initialization and for views of pivot's configuration popup.

@relatedsample:
61_pivot/06_filters/01_outer_filters.html

@related:
pivot/customization.md#innerview
pivot/filters.md#changingparentofpivotfilters

@seolinktop: [javascript ui library](https://webix.com)
@seolink: [javascript pivot](https://webix.com/pivot/)