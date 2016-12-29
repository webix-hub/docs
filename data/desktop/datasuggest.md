DataView Suggest
========================

DataView suggest, or DataSuggest, is used to add extra functionality to Webix select controls, namely [richselect](desktop/richselect.md), [multiselect](desktop/multiselect.md), 
[combo](desktop/combo.md), [multicombo](desktop/multicombo.md) and similar [editors](desktop/editing.md#editortypes). It is based on Webix [suggest list](desktop/suggest.md).

DataSuggest extension makes it possible to use Webix [DataView](desktop/dataview.md) in a dropdown menu which is great for inserting pictures
while by default Webix [list](desktop/list.md) is used. 

##Using DataSuggest for Form Controls

The extension can be used to **redefine dropdown menu** of select controls.  

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

When extended with DataSuggest, the constructor allows setting Webix [DataView](desktop/dataview.md) for a dropdown menu and defining its **configuration** right among the component's **options**.

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
- **body** (object) - defines complex config for DataView. 

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

**Body** allows for setting the following parameters for a dropdown DataView: 

- **template** (string, function) - defines template for DataView items. By default, the first data value after the ID field is shown;;
- **type** (obj) - sets dimensions for DataView cells as an object *{width:150, height:100}*;
- **data** (array) - data for the options to choose from. If you use **body** property for DataSuggest configuration, data should be defined inside it. 
- **xCount** (number) - the number of items on the X scale;
- **yCount** (number) - the number of items on the Y scale;
- **autoheight** (boolean) - if *true*, set auto height for the DataView. *False* by default. 

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

##Using DataSuggest as Editor

DataSuggest can be used as a component editor as part of **combo** or **richselect** [editors](desktop/editing.md#editortypes). 

<img src="desktop/datasuggest_editor.png"/>

For these needs, a popup should be previously initialized, either with default or with customized settings:
{{snippet
Default  - that's enough
}}
~~~js
var popup = webix.ui({
	view:"datasuggest"
});
~~~

With the custom configuration all the above-mentioned settings can be used:

{{snippet
Customized
}}
~~~js
var popup = webix.ui({
	view:"datasuggest",
	body:{
		type:{
			height:100,
			width:160
		},
		template:"<b>#value#</b><br>#year#"
   }
});
~~~

Then, this popup should be attached to the column in question with the help of its **popup** property:

~~~js
{ id:"title",  editor:"richselect", collection:options, popup:popup }
~~~

{{sample 32_thirdparty/14_dataselect_editor.html}}

##Related Articles

- [Webix Data Loading Pattern](desktop/data_loading.md)
- [Templates for Webix Data Components](desktop/html_templates.md)
- [Data Editing](desktop/edit.md)

@edition:pro