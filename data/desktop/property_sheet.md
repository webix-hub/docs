Property Sheet
============

##Overview

Property sheet is a list of properties. Ui-related property sheet inherits from [view](desktop/view.md). 

 	
<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/property_sheet.png"/>

##Initialization

~~~js
{ view:"property",  id:"sets", width:300,
	elements:[
	   { label:"Layout", type:"label"},
	   { label:"Data url", type:"text", id:"url"},
	   { label:"Data type", type:"select", options:["json","xml","csv"], id:"type"},
	   { label:"Use JSONP", type:"checkbox", id:"jsonp"}
	]
};
    
~~~

{{sample 07_property/01_init.html }}

{{note
The elements with **label** gets header CSS. If there's no type the element is non-styled and non-editable. 
}}

##Working with Property Sheet

####Property Sheet Values

The elements of a property sheet can be treated together, you can get and set their values just like you do it with [form](desktop/form.md) and 
[HTMLform](desktop/htmlform.md). 

- [setValues();](api/ui.property_setvalues.md)
- [getValues();](api/ui.property_getvalues.md)
- [HTMLform and Form Treatment](desktop/form_tasks.md)

~~~js
$$("sets").setValues({
	width:250,
	height:480,
	url:"http://Webix.com/data",
	type:"json"
});

var values = $$("sets").getValues();
~~~

####Editing Data in Property Sheet Elements

Each element features a built-in editor specified by **type** property. Possible values coincide with [editor types](desktop/editing.md) and include: 

- **color**  - an editor for colors, [colorboard](api/refs/ui.colorboard.md) appears on editing; 
	- {{sample 07_property/03_colorpicker.html}}
- **text** - a standard editor for text values;
- **password** - a text editor for passwords;
- **select** - for selection among several text values with the help of an HTML 'select' control;
- **combo** - for selection among several values with the help of Webix [combo](desktop/controls.md#combo) control. Input is editable;
- **richselect** - for selection among several values with the help of Webix [richselect](desktop/controls.md#richselect) control. Input is non-editable;
- **checkbox** - for two-state values. 

Select editors features **options** in their configuration that can be defined in the following ways:

~~~js
elements:[
	{ type:"select", options: ["json","xml","csv"]}, 
	{ type:"select", options: [ 
    	{id:1, value:"json"},
        {id:2, value:"xml"},
        {id:3, value:"csv"}
    ]}
]
~~~

####Customizing Editor Collection

Besides, other editors types can be registered for the elements with the help of the **registerType()** method.  During registering the new element type, you should specify its **appearance** and **behavior**. 

{{snippet
'Toggle' editor for two-state values
}}
~~~js
$$("sets").registerType("toggle",{
	template:function(value, config){
		return "<input type='button' class='webix_toggle_button_custom' value='"+
          value+"' style='margin:0px; width:95%; height:20px; font-size:12px; '>";
	},
	click:{
		webix_toggle_button_custom:function(e, id){
			var data = this.getItem(id);
			if (data.options[0] == data.value)
				data.value = data.options[1];
			else
				data.value = data.options[0];

			this.editStop();
			this.refresh(id);
			this.callEvent("onCheck",[id, data.value]);
		}
	},
	editor:"inline-text"
});
~~~

And then use it: 

~~~js
webix.ui({
	view:"property", id:"sets", elements:[
    	{ label:"Data type", type:"toggle", options:["json","xml"], id:"type"}
    ]
});
~~~

{{sample 07_property/02_custom_checkbox.html}}

####Using Custom Popup Editors

Popup editors are based on Webix [popup window](api/refs/ui.popup.md) and can be registered with either default or custom logic:

{{snippet
Default Popup
}}
~~~js
//including the editor into the property sheet
webix.ui({ 
	view:"property", id:"sets", elements:[
    	{ label:"Color front", 	type:"popup", popup:"myColorF", id:"colorF" }, 
        ...
    ]
});

//defining its appearance
webix.ui({  
	id:"myColorF",
	view:"popup",
	body:{ view:"textarea", width:300, height:100 }
});

//registering the new type
prop.registerType("popup",{ 
	editor:"popup"
});
~~~


{{snippet
Custom Popup
}}
~~~js
// standard popup editors is extended with new functions
webix.editors["popup-ra"] = webix.extend({
	focus:function(){ },
	getValue:function(node){ 
		return this.getInputNode(node).data.edit; 
	},
	setValue:function(node, value){ 
		this.getPopup(node).show(node);

		this.getInputNode(node).data.edit = value;
		this.getInputNode(node).refresh();
	}
}, webix.editors["popup"]);

//new type is registered
prop.registerType("popup-ra",{
	editor:"popup-ra"
});
~~~

{{sample 07_property/02_custom_checkbox.html}}


##API Reference

[Methods, properties and events](api__refs__ui.property.html)

###Related Articles
- desktop/data_object.md
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [Property Sheet CSS Image Map](desktop/property_css.md)