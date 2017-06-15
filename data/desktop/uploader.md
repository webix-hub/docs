Uploader
==========================================

##API Reference

- [Methods, properties and events](api/refs/ui.uploader.md)
- [Samples](http://docs.webix.com/samples/21_upload/index.html)

##Overview
Uploader is a component that allows users to  upload files. It allows browsing directories on your machine to choose the necessary file(s) and send them to server.

Uploader can be used **standalone** as well as integrated into **form** or **UI component** (in an "invisible" mode for the latter). 

<img style="display:block; margin-left:auto;margin-right:auto;"   src="desktop/uploader_01.png"/>

##Initialization

~~~js
webix.ui({
	view:"uploader",
	id: "uploader_1",
	value:"Upload file",
    link:"mylist",
	upload:"php/upload.php"
})
~~~

{{sample 21_upload/01_init_list.html}}


##Working with Uploader
- desktop/file_upload.md
- desktop/configuring_uploader.md
- desktop/progress_bar.md
- desktop/uploader_integration.md
- desktop/apionly_uploader.md






@metadescr:  Uploader is a component that allows users to upload files. It allows browsing directories on your machine to choose the necessary file s and send them to server. Uploader