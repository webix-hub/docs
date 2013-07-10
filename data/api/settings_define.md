define
=============


@short:
	redefines a single configuration property (or a hash of properties)

@params:
- property		string,hash		the property name or a hash of properties that need redefining
* value		any		the new property value




@example:
//redefines the datafeed url
$$('mylist').define("url", "new_data.xml");

//changes the label of the button
$$('button1').define("label", "New value");
$$('button1').refresh();

//change multiple properties at once
$$('text2').define({
	value:"123",
	label:"New label"
});

@template:	api_method
@defined:	Settings	

@relatedapi: 
	api/settings_config_other.md
    api/ui.button_refresh.md
@related: 
	desktop/resizing.md
@relatedsample:
	15_datatable/11_sizing/02_resize_node.html
    06_dataview/02_templates/05_named.html
@descr:

You can use the api/settings_config_other.md property to get the desired configuration option:

~~~js
var width = $$("myList").config.width;
~~~
<br>
<br>
api/settings_config_other.md is especially useful when a property is presented by an object:

~~~js
var fieldWidth = $$('myGrid').config.fields['field_1'].width;
~~~
<br>
<i>Note, in this case after **$$("component_id").config** you should write the complete dependency property inheritance chain</i>.