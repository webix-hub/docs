Invisible Uploader for Data Management Components
=============

Invisible uploader allows for triggering the upload process without pushing the dedicated control. Such uploader is also called **apionly.**

<img src="desktop/uploader_apionly.png">

{{sample 21_upload/06_integration.html}}

Such uploader is used with data management compnents ([datatable](datatable/index.md) in particular) and allows **editing pictures on client side**. 

{{snippet
Initialization
}}
~~~js
webix.ui({
		view:"datatable", .. // component config
});

webix.ui({
	view:"uploader", 
    apionly: true, 
    ...
});
~~~

Uploader and the component it's connected with are placed into different **webix.ui** constructors. 

Then the components communicate with each other on dedicated events [Event Handling](desktop/event_handling.md) is described separately: 

**For component:**

Clicking the photo enables **file browsing dialog** on your machine while the ID of the clicked row becomes **file ID** in the **upload context**.

~~~js
webix.ui({
	view:"datatable", 
    ..
    on:{
		onItemClick:function(id){
			if (id.column == "photo")
				$$("uploadAPI").fileDialog({ rowid : id.row });
		}
	}
});
~~~

**For uploader:**

- **onBeforeFileAdd** - fires before file is added to the uploader and uploaded (if autosend is enabled). On this event file filtering should be 
done to prevent from uploading of files with undesired formats and sizes. 
- **onFileUpload** - fires after the file has been fully uploaded. On this event the component should be refreshed with a newly uploaded image. 

~~~js
webix.ui({
	view:"uploader", 
    ...
    on:{
		onBeforeFileAdd:function(item){
			var type = item.type.toLowerCase(); //deriving file extension
			if (type != "jpg" && type != "png"){ //checking the format
				webix.message("Only PNG or JPG images!");
				return false;
			}
		},
		onFileUpload:function(item){
			var id = item.context.rowid; 
			$$("people").getItem(id).photo = item.name; //new photo is set
			$$("people").refresh(id); 

			this.files.remove(item.id); //removing the initial file from uploader storage
		}
	},
});
~~~

**Comments:**

- **item.type** returns file extension;
- **item.name** returns file title together with its extension;
- **item.context.rowid** returns the ID of the dedicated row in datatable (set by fileDialog).

Look for more item properties in the main [Uploader](desktop/file_upload.md) article.

