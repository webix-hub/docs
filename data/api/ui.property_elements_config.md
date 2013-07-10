elements
=============


@short: an array of property items
	

@type: object
@example:
view:"property",  
elements:[
	{ label:"Layout" },
	{ label:"Width", type:"text", id:"width"},
	{ label:"Data type", type:"toggle", options:["json","xml"], id:"type"},
	{ label:"Color front", 	type:"popup", 	 popup:"myColorF", id:"colorF" },
]

@template:	api_config
@descr:

Each property element features

- **label**  - text label displayed on the left. If there's no other properties, such elements becomes header;
- **type** - editor type initiated on clicking the element value;
- **id** - ID of the element. Used by [setValues()](api/ui.property_setvalues.md) and [getValues()](api/ui.property_getvalues.md) methods to place values into dedicated cells;
- **editor controls** (depend on the **type** property). Check [editor types](api/refs/editors.md) for details. 


Possible type values coincide with [editor types](desktop/editing.md) and are as follows:

- **color**  - for colors, [colorboard](api/refs/ui.colorboard.md) appears on editing;
- **text** - for text values);
- **select** - for selection among several text values;
- **checkbox** - for two-state values;
- **toggle** (*a two-state button*) - for two-state values;
- **popup** - a [popup window](api/refs/ui.popup.md);

{{note
When type is not defined, the element turns into header of the property sheet section. 
}}




@related:
	desktop/property_sheet.md
@relatedapi:
	api/refs/editors.md
    api/ui.property_registertype.md
@relatedsample:
	07_property/01_init.html
