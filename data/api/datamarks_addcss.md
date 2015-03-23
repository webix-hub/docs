addCss
=============


@short: applied CSS class to a component item


@params:	
- id	string,number	ID of the neccessary item
- css		string 		CSS class name
* silent	boolean		if true the component is not redrawn

@example:
//this points to a component object
//context.target is a data item id in drag-n-drop context
this.addCss(context.target, "my_custom_mark");


@relatedapi:
	api/datamarks_removecss.md
@related:
	desktop/dnd_drag_marker.md
@relatedsample:
	17_datatree/22_dnd/06_custom_marker.html
@template:	api_method
@descr:


