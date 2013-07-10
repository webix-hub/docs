Configuring Uploader
=============
###Multiple Upload

The **uploader button** initiates a window for browsing files on your machine and choosing the necessary one. By default, uploader supports uploading of multiple file at once 
and you can push this button and add as many file as you like to the uploader. 

If **multiple** property is set to *false*, it enables replacing of the previously added files with new ones.

~~~js
webix.ui({ 
	view:"uploader",
	multiple:false,
    ...
})
~~~

{{sample 21_upload/08_single_upload.html}}

###Autosending

By default, files are added to the uploader and get processed with the dedicated script at once. To prevent this, cancel the **autosend**:

~~~js
webix.ui({ 
	rows: [
	{
		view:"uploader",
		autosend:false,
    	...
    },
   	{ 	view:"button, click: "$$("uploader_1").send();"
    }]
})
~~~

{{sample 21_upload/03_manual_send.html}}

Files are send later when **send()** function is called for this uploader. It triggers upload script execution. 

The benefit of manual sending are as follows: 

- you can **vizualize** the **response of uploading script** on client side;
- you can enable **consecutive saving** of **uploader** and **form** data if a form contains extra field exept for uploader.  

###Related Articles

- desktop/uploader_serverside.md
- desktop/uploader_integration.md