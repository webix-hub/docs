uniteBy
=============


@short:sets the template according which items will be grouped in units.
	

@type: function
@example:
webix.ui({
	  view:"unitlist", 
      ...
      uniteBy:function(obj){
             return obj.name.substr(0,1);
      }
})

@template:	api_config
@descr:
As a parameter the property function takes the item object.

