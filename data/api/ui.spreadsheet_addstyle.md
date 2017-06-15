addStyle
=============


@short:
	creates a new style

@params:
- styleProps	object  	an object with the new style properties 
- baseStyle		object 	 	optional, an object of the base style



@example:
// adding a style
var styleProps = $$("ssheet").addStyle({
	"background":"#6E6EFF", 
    "color": "#FFFFFF"
});
// setting the created style for a cell
$$("ssheet").setStyle(3,2,styleProps);
// redrawing SpreadSheet
$$("ssheet").refresh();

@template:	api_method
@descr:
You can use a previously created style as a base and complete it with some new style properties to make a new style:

~~~js
// adding a style
var baseStyle = $$("ssheet").addStyle({
    "background":"#6E6EFF", 
    "color": "#FFFFFF"
});

// creating a new style on the base of the previous one
var newStyle = $$("ssheet").addStyle({
    "font-style": "italic"
}, baseStyle);
// applying the new style to a cell
$$("ssheet").setStyle(3,2, baseStyle);
// redrawing SpreadSheet
$$("ssheet").refresh();
~~~

Note that the style options that you can use for a new style are limited. See the list of available style options below:

"background", "border-bottom", "border-left", "border-right", "border-top", "color", "font-family", "font-size",
"font-style", "font-weight", "format", "text-align", "text-decoration", "vertical-align", "wrap".

Pay attention that for cell **borders** it's possible to specify just the *border-color* property, while the 
*border-width* and *border-style* properties have predefined values: *1px* and *solid*, correspondingly.

@relatedapi:
api/ui.spreadsheet_setstyle.md
api/ui.spreadsheet_getstyle.md

@seolinktop: [mvc library](https://webix.com)
@seolink: [web spreadsheet](https://webix.com/spreadsheet/)