fileDialog
=============

@short:
	opens a file browsing dialog on a client machine
	

@params:
* content	obj	file upload context


@example:
$$("uploadAPI").fileDialog();
//or
$$("uploadAPI").fileDialog({ rowid : id.row });


@related:
	desktop/apionly_uploader.md
@relatedsample:
	21_upload/06_integration.html

@template:	api_method
@descr:

File upload **context** is an optional object with any properties that you would like to see within an uploaded item data. 

For instance, context can be used in an api/ui.uploader_onfileupload_event.md event: 

~~~js
webix.ui({
	view:"uploader",
	id:"uploadAPI",
	on:{
		onFileUpload:function(item){
    		var id = item.context.rowid;
    		var row = $$("people").getItem(id);
 
    		row.photo = item.sname;
    		$$("people").updateItem(id, row);
		}
	}
});
~~~

