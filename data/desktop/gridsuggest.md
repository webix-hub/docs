Grid Suggest
========================

The extension is based on Webix [suggest list](desktop/suggest.md) that is used a a **default dropdown menu** for 
such select controls as [combo](desktop/controls.md#combo) and [richselect](desktop/controls.md#richselect).

Gridsuggest extenstion makes it possible to use Webix [datatable](datatable/index.md) as a dropdown menu for these controls while by default they use Webix [list](desktop/list.md). 

<img src="desktop/gridsuggest.png"/>

{{sample 32_thirdparty/13_gridselect.html}}

By default combo and richselect are inited with the following constructor:

~~~js
{
	view:"combo", //or richselect
	value:1,
	options:[..]//option data
}
~~~

With gridsuggest extenstion you get the possibility to define view used for a dropdown menu as well as set its configuration, both for combo and richselect.

~~~js
{ view:"richselect", value:1, options:{
	view:"gridsuggest",
	data:options 
}}
~~~ 

Possible properties here are as follows: 

- **view** (string) - name of the view acting as a dropdown menu (here - gridsuggest);
- **data** (array) - data for the options to choose from;
- **textValue** (string) - data value shown in the input (acts as a string template) and, in case of combo, data value used for filtering. By default, the first data value after the ID filed is taken;
- **template** (function) - allows for setting a complex template for the input field;
- **width** (number) - width of a dropdown popup;
- **body** (object) - set of configuration options for a suggest datatable. 

~~~js
{ view:"richselect", options:{
	view:"gridsuggest",
	template:function(item){
		return item.name + " (" + item.color + ")";
	},
	//textColor:#name#
	data:options
}},
~~~

Such code will show a datatable with borders while the columns will be generated for all data values from the dataset except for the ID field. 

Datatable can be further configured inside **body** object property and can take the following parameters: 

- **autoConfig** (boolean) - if *true*, enables default configuration for datatable (described above);
- **columns** (array) - used instead of autoConfig. allows for setting an array of columns for the datatable.
- **header** (boolean) - if *false*, hides datatable header. *True* by default;
- **borderless** (booelan) - if *true*, removes borders around the datatable. *False* by default;
- **data** (array) - data for the options to choose from. If you use **body** property for gridsuggest configuration, data should be defined inside it. 

{{snippet
Auto config, no headers, no borders
}}
~~~js
{ view:"combo", options:{
	view:"gridsuggest",
	body:{
		autoConfig:true,
		header:false, 
		borderless:true,
		data: options
	}
}}
~~~

{{snippet
Preset Columns
}}
~~~js
{ view:"combo", options:{
	view:"gridsuggest",
	body:{
		columns:[
			{ id:"name" }, { id:"color" }
		],
		data:options
	}
}}
~~~

###Related Articles

- [Webix Data Loading Pattern](desktop/data_loading.md)
- [Templates for Webix Data Components](desktop/html_templates.md)