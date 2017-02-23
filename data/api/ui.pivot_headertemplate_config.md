headerTemplate
=============

@short:
	sets the function that fires for each columns' header and returns header text


@type: function
@example:
webix.ui({
    view:"pivot", 
    headerTemplate: function(config){
		// return string with header template
	}
});


@template:	api_config
@descr:

The function fires for the bottommost header in case there are several header lines.

It must return a string with the header text.

The *config* parameter is an object with the following properties:

- *text* - (string) the text to display
- *operation* - (string) the name of the operation to display
- *name* - (string) the column's inner name


