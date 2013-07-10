toRgb
=============
@short:
	 converts a hexadecimal color code or RGB code string to the RGB array

@params:
- rgb	string	a hexadecimal color code or RGB code string

@returns:
-rgb	array	the array with RED GREEN BLUE values	

@example:
webix.color.toRgb("rgb(255,0,255)");// -> [255, 0, 255]

webix.color.toRgb("FF00FF");// -> [255, 0, 255]

@template:	api_method
@descr:

@relatedapi:
	api/color_hsvtorgb.md

