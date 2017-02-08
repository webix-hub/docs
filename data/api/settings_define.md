define
=============


@short:
	redefines a single configuration property (or a hash of properties)

@params:
- property		string		the property name or a hash of properties that needs redefining
- value			string|number		the new property value




@example:
//redefines the datafeed url
$$('mylist').define("url", "new_data.xml");
$$('mylist').refresh();

//changes the label of the button
$$('button1').define("label", "New value");
$$('button1').refresh();

//change multiple properties at once
$$('text2').define({
	value:"123",
	label:"New label"
});
$$('text2').refresh();

@template:	api_method
@defined:	Settings	

@relatedapi: 
	api/settings_config_other.md
    api/ui.button_refresh.md
    api/renderstack_customize.md
@related: 
	desktop/resizing.md
@relatedsample:
	15_datatable/11_sizing/02_resize_node.html
    06_dataview/02_templates/05_named.html
@descr:

The component should be refreshed to make the changes come into force. 

###Redefining "config" object

You can use the api/settings_config_other.md property to get the desired configuration option:

~~~js
var width = $$("myList").config.width;
~~~

api/settings_config_other.md is especially useful when a property is presented by an object:

~~~js
var fieldWidth = $$('myGrid').config.fields['field_1'].width;
~~~

Note, in this case after **$$("component_id").config** you should write the complete dependency property inheritance chain.