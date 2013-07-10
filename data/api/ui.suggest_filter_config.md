filter
=============


@short: custom filtering function
	

@type: function
@example:

webix.ui({
    view:"suggest",
    filter:function(obj, value){
         return item.value == value; //strict match
    }
})

@template:	api_config
@descr:


will be called when suggest need to be filtered, by users text  
by default suggest uses case insensitive partial match filtering 



