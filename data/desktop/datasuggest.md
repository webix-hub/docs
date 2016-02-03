Dataview Suggest
========================

Dataview suggest, or datasuggest, is used to add extra functionality to Webix select controls, namely [richselect](desktop/richselect.md), [multiselect](desktop/multiselect.md), 
[combo](desktop/combo.md), [multicombo](desktop/multicombo.md) and similar [editors](desktop/editing.md#editortypes). It is based on Webix [suggest list](desktop/suggest.md).

Datasuggest extension makes it possible to use Webix [dataview](desktop/dataview.md) in a dropdown menu which is great for inserting pictures
while by default Webix [list](desktop/list.md) is used. 

For the convenience of users of the Webix PRO version, Dataview Suggest is placed in the PRO Edition of the library. 
However, this component can also be used under the GPL license.

In this case, you need to choose one of the two ways to use Dataview Suggest:

- you can either add the direct link to the component from http://cdn.webix.com in the head section of your document after including 
*webix.js* and *webix.css* files:

~~~html
<link rel="stylesheet" href="../../codebase/webix.css" type="text/css" >
<script src="../../codebase/webix.js" type="text/javascript"></script>

<script src="http://cdn.webix.com/components/datasuggest/datasuggest.js"></script>
~~~

- or download the component from [https://github.com/webix-hub/components](https://github.com/webix-hub/components) and include the *datasuggest.js* file on the page:

~~~html
<script type="text/javascript" src="./datasuggest.js"></script>
~~~

If you use the PRO Edition of Webix, you don't need to include any additional files, as Dataview Suggest is included into the PRO version package.

##Using Datasuggest for Form Controls

The extension can be used to **redefine dropdown menu** of select controls.  

<img src="desktop/datasuggest.png"/>

{{editor http://webix.com/snippet/99ffd905	Data Suggest}}

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

##Using Datasuggest as Editor

Datasuggest can be used as a component editor as part of **combo** or **richselect** [editors](desktop/editing.md#editortypes). 

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

{{editor http://webix.com/snippet/2ade4813	Dataselect Editor}}

##Related Articles

- [Webix Data Loading Pattern](desktop/data_loading.md)
- [Templates for Webix Data Components](desktop/html_templates.md)
- [Data Editing](desktop/edit.md)

@edition:pro