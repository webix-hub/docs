Binding Uploader to Any Page Element
=============

Webix uploader can exist not only in the form of a button that you press to start the upload process. It can be bound to any page element and any page event can be used to call the uploader. 

All you need is to follow the following steps: 

- set an uploader invisible, or **apiOnly**;
- use [uploader API](api/refs/ui.uploader.md) to handle the uploading process. 

###Initializing

<img src="desktop/uploader_apionly.png">

{{sample 21_upload/06_integration.html}}

Such uploader can be used with data management components ([datatable](datatable/index.md) in particular) and allows **uploading pictures on the fly**. 

{{snippet
Initialization
}}
~~~js
//app init
webix.ui({
	view:"datatable", .. 
});

//uploader init
webix.ui({
	view:"uploader", 
    id:"uploadAPI",
    apiOnly: true, 
    upload:"php/photo.php",
    ...
});
~~~

Uploader is initialized with the separate *webix.ui()* call. 

###Tuning Upload Process

Uploading is controlled through the view and uploader events. ([Event Handling](desktop/event_handling.md) is described separately): 

**View Events**

For the 'visible part' you should define the event that starts the uploading.  In the above-mentioned datatable, clicking any photo should 
enable **file browsing dialog** on your machine.

The file dialog is triggered by the same-name method that is applied to the uploader object and takes **upload context hash** as parameter. 
You will be able to use the context object later to reflect upload result on client. 

~~~js
webix.ui({
	view:"datatable", 
    ...,
    on:{
		onItemClick:function(id){
			if (id.column == "photo")
				$$("uploadAPI").fileDialog({ rowid : id.row });
		}
	}
});
~~~

**Uploader Events**

- **onBeforeFileAdd** - fires before file is added to the uploader and uploaded (if autosend is enabled). On this event file filtering should be 
done to prevent from uploading of files with undesired formats and sizes. 
- **onFileUpload** - fires after the file has been fully uploaded. On this event the component should be refreshed with a newly uploaded image;
- **onFileUploadError** - fires in case an error happens during uploading (status **error** comes with the server response);
- [etc.. ](api/refs/ui.uploader_events.md).

~~~js
webix.ui({
	view:"uploader", 
    //configuration
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
            var row = $$("people").getItem(id);

            row.photo = item.sname;
			$$("people").updateItem(id, row);
		}
	}
});
~~~

**Comments:**

- **item.type** returns file extension;
- **item.sname** returns file name under which it was saved on server;
- **item.context** is uploader context previously set by *fileDialog()* method. **item.context.rowid** returns the ID of the dedicated row in datatable.

Look for more item properties in the main [Uploader](desktop/file_upload.md) article.

##Defining a Custom DnD Area

If you want to drag-and-drop files with the apiOnly uploader (like you did it with the standard one), you should provide uploading logic for DnD events. 

For instance, you have an element with *"uploader_container"* ID and you want to use it as drop area for uploader. 

~~~html
<div id="uploader_container"></div>
~~~

All the [uploader API](api/refs/ui.uploader.md) can be use to control the uploading: 

{{snippet
Apionly uploader
}}
~~~js
webix.ui({
	id:"uploadAPI",
	view:"uploader",
	upload:"php/upload.php",
	on:{
    	onFileUpload:function(item){
        	webix.message("Done");
    	}
    },
	apiOnly:true
});
~~~

In addition, you should pay attention to native drag events:

~~~js
webix.event("uploader_container","dragover", function(e){
	e.preventDefault();
});

webix.event("uploader_container","drop",function(e){
	data=e.dataTransfer;
    if(data&&data.files.length)
		$$("uploadAPI").addFile(data.files[0]);
    return webix.html.preventEvent(e);
});
~~~

- The [addFile](api/ui.uploader_addfile.md) method is used to programmatically add file info hash to the uploader datastore. 
