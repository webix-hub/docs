format
=============


@short:
	specifies the format function for displaying data in all columns

@type: function



@example:
webix.ui({
	view:"pivot", 
	format: function(value){
		return (value&& value!="0"?parseFloat(value).toFixed(1):value);
	}
});


@template:	api_config
@descr:
The default value: 

~~~js
format: function(value){
	return (value&& value!="0"?parseFloat(value).toFixed(3):value);
}
~~~

