ui
=============


@short: the object constructor. Creates a new instance of the specified view
	

@params:
- config	object		the view configuration
* parent 	object, string	 object or id of parent component;
* replacement 	object, string, number 		object, id or index of the component being replaced

BTW, if you don't specify the ID for the component, it will be generated automatically. You can always get the component ID  by using:

~~~js
var id = component.config.id;
~~~

@returns:
- view		object		a view object

@example:
var dtable = webix.ui({ view:"datatable", ... });

@template:	api_method
@related:
	desktop/dynamic_layout.md
@relatedsample:
	01_layout/13_reconfiguration.html
@relatedapi:
	api/ui.baselayout_addview.md
    api/ui.baselayout_removeview.md
@descr:

If you want to init a Webix component, only the first parameter is needed. 

If you want to rebiult the existing layout or replace some component in it, make use of additional parameters. Read more 
in [Dynamic UI Modifications](desktop/dynamic_layout.md#rebuildingapplicationlayout) article. 
