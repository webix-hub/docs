send
=============

@short:
	sends files from uploader body to server

@params:
- id	number, string, function	file ID or callback function


@example:
$$("upl1").send(function(response){
	if(response)
		webix.message(response.status);
});
//response contains serverside response


@relatedsample:
	21_upload/03_manual_send.html
@related: 
	desktop/configuring_uploader.md
	

@template:	api_method
@defined:	ui.uploader	
@descr:

The method allows sending all the pre-added files at a time as well one file specified by ID::

~~~js
$$("upl1").send();
$$("upl1").send(id);
~~~

Additionally, extra data can be defined in the uploader configuration:

~~~js
webix.ui({ 
    view:"uploader",
    formData:{
        param1:value1,
        param2:value2
    },
    ...
});
~~~









