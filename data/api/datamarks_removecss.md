removeCss
=============

@short: removes CSS class from a component item
	

@params:
- id	string,number	ID of the necessary item
- CSS class		string		CSS class name
* silent	boolean 	if true, the component is not redrawn

@example:
//this points to a component object
//this.my_marked is an id of a previously marked data item 
this.removeCss(this.my_marked, "my_custom_mark");

@relatedapi:
	api/datamarks_addcss.md
@related:
	desktop/dnd_drag_marker.md
@relatedsample:
	17_datatree/22_dnd/06_custom_marker.html
@template:	api_method


@descr:

The method is true for removing CSS only from those items which CSS was previously added by **addCSS()**.

