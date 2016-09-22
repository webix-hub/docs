subConfig
=============

@short: defines settings for extra text fields
	

@type: object
@example:

webix.ui({
	rows:[
		{ view:"multitext", label:"Main", subConfig:{
    		label:"Extra"
        }}
    ]    
});


@template:	api_config
@descr:

Extra fields inherit configuration from the main one, unless otherwise is stated by the *subConfig* object.



