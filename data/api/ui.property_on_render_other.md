on_render
=============


@short: set of functions, for custom property types
	

@type: hash

@example:

property.on_render["mycheckbox"] = function(value, config){
   var start = "<input type='checkbox' class='webix_property_check' ";
   return  start+(value?"checked":"")+">";
}

@template:	api_config
@descr:


