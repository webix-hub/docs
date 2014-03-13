updateFromResponse
=============


@short: server data update mode
	

@type:  boolean
@example:

webix.ui({
   view:"list",
   save:{
   	 url: "my.php",
     updateFromResponse:true
   }
})


@template:	api_config
@descr:


In this mode, dataprocessor will expect to receive a json object as response for update and insert command. 
All data from such json object will be applied to the inserted|updated item.   

In other words, server side can update the saved item on client side. 