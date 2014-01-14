Dataview Suggest
========================

Dataview suggest extension is used to add extra functionality to Webix select controls, namely [richselect](desktop/controls.md#richselect) and [combo](desktop/controls.md#combo). It is based on Webix [suggest list](desktop/suggest.md).

The extension **redefines dropdown menu** of these controls. By default, they feature Webix [list](desktop/list.md) as a dropdown menu while data suggest extension allows for using Webix [dataview](deskrop/dataview.md) instead, which is great for inserting pictures. 

<img src="desktop/datasuggest.png"/>

{{sample 32_thirdparty/14_dataselect.html }}

Default combo and richselect constructor looks as follows:

~~~js
{
	view:"combo", //or "richselect"
    value:1,
    options:[...] //options data
}
~~~

When extended with datasuggest, the constructor allows setting Webix [dataview](desktop/dataview.md) for a dropdown menu and defining its **configuration** right among the component's **options**.

~~~js
{ view:"richselect", value:1, options:{
	view:"datasuggest", 
	data:options 
}},
~~~

Possible configuration parameters: 

- **data** (array) - defines data for the options to choose from;
- **template** (function) - sets a complex template for control input, for instance, the one with a picture. By default, the first data value after the ID field is shown;
- **textValue** (string) - sets data value to display in the input (acts as a string template) and, in case of combo, data value subject to filtering;
- **body** (object) - defines complex config for dataview. 

{{snippet
Predefined Input Template
}}
~~~js
{ view:"richselect", options:{
	view:"datasuggest", 
	template:"#value# (#color#)",
	data:options
}}
~~~

**Body** allows for setting the following parameters for a dropdown dataview: 

- **template** (string, function) - defines template for dataview items. By default, the first data value after the ID field is shown;;
- **type** (obj) - sets dimensions for dataview cells as an object *{width:150, height:100}*;
- **data** (array) - data for the options to choose from. If you use **body** property for datasuggest configuration, data should be defined inside it. 
- **xCount** (number) - the number of items on the X scale;
- **yCount** (number) - the number of items on the Y scale;
- **autoheight** (boolean) - if *true*, set auto height for the dataview. *False* by default. 

{{snippet
Item template, predefined item dimensions
}}
~~~js
{ view:"richselect", options:{
	view:"datasuggest",
	body:{
		template:function(obj){
			return obj.value + "</br><img src='data/image00"+obj.id+".jpg'>";
		},
		type:{
			width:270, height:180
		},
	data:options
	}
}}
~~~

###Related Articles

- [Webix Data Loading Pattern](desktop/data_loading.md)
- [Templates for Webix Data Components](desktop/html_templates.md)





