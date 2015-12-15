
{{memo a control for uploading multiple files}}

The component allows tracking the whole progress of individual file upload. Fully customizable. Check [uploader](desktop/uploader.md) documentation for more detailed description.

### Constructor

~~~js
var uploader = webix.ui({
    view:"uploader",
    id: "uploader_1",
  	width:200,
    value:"Upload file",
    link:"mylist",
    upload:"//docs.webix.com/samples/21_upload/php/upload.php"
});
~~~

### Where to start

- [Overview of the Uploader Widget](desktop/uploader.md)
- [Samples](http://docs.webix.com/samples/21_upload/index.html)
