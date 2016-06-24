Configuring Uploader
=============

##Single upload

The **uploader button** initiates a window for browsing files on your machine and choosing the necessary one. By default, uploader supports uploading of multiple file at once 
and you can push this button and add as many file as you like to the uploader. 

If **multiple** property is set to *false*, it enables replacing of the previously added files with new ones.

~~~js
webix.ui({ 
	view:"uploader",
	multiple:false,
    ...
});
~~~

{{sample 21_upload/08_single_upload.html}}

##Manual send

By default, files are added to the uploader and get processed with the dedicated script at once. To prevent this, cancel the **autosend**:

~~~js
webix.ui({ 
	rows: [
		{ view:"uploader",
		  autosend:false,
    	  ...
        },
   	    { view:"button", 
          click: "$$('uploader_1').send()";
        }
    ]
});
~~~

{{sample 21_upload/03_manual_send.html}}

Files are send later when [send()](api/ui.uploader_send.md) function is called for this uploader. It triggers upload script execution. 

The benefit of manual sending are as follows: 

- you can **vizualize** the **response of uploading script** on client side;
- you can enable **consecutive saving** of **uploader** and **form** data if a form contains extra field exept for uploader. 

##Defining additional data to send

Uploader control allows defining **extra data** to send to server together with the file data.

###In the autosend mode

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

###During manual sending

The above mentioned code can be used for manual sending as well, but alternativaly you can provide extra as the second parameter 
of the [send](api/ui.uploader_send.md) method:

~~~js
//either when a single file is sent to server
$$("uploader").send(id, { param1:"value1", param2:"value2"});
~~~

The id parameter is file ID in the [uploader files array](desktop/file_upload.md#manipulationswithfiles).

~~~js
//or with callback function as first parameter
$$("uploader").send(function(res){
        /*callback function*/
    }, 
    { param1:"value1", 
      param2:"value2"
    }
);
~~~

##Uploading particular file types

Uploader can be customized to accept only particular file types during the uploading.
Types of files allowed for uploading are specified in the **accept** property:

~~~js
webix.ui({
	maxWidth:800,
	cols:[{
		view:"form", rows: [
			{ 
				view: "uploader", value: 'Upload Images', 
                name:"files", accept:"image/png, image/gif, image/jpeg",
                link:"mylist",  upload:"php/upload.php" 
			}
			...			
        ]
	}]
});
~~~

In the above example Uploader accepts only files of image type (.png, .gif and .jpg formats).
The full list of common media types is given [here](http://en.wikipedia.org/wiki/Internet_media_type#List_of_common_media_types).

{{sample
21_upload/10_accept.html
}}

##Related Articles

- desktop/uploader_serverside.md
- desktop/uploader_integration.md