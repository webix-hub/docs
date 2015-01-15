Loading and Saving Data
=======================

Data can be [loaded](desktop/data_loading.md) in different formats, including json (the default one) and xml. 
The data item should include at least 5 properties:

- id - {string} the unique id of the item 
- value - {string} the name of a file or a folder
- type - {string} the type of a file
- date - {number} time of the file/folder modification in Unix format
- size - {number} file size in bytes


An example of json data item is given below:

~~~js
{
	id: "base1", 
    value: "Product1.jpg", 
    type:"image",  
    date: 1420717913, 
    size: 4500
},
~~~


You can use a data source in json, xml or other format supported by [Webix TreeStore](datatree/loading_data.md). 
Data can be generated via any server-side script. In the data source you can use information from a real file system or records from a database. 

Requests to the server side
-------------

When some action is executed (upload, download, etc.) with files, File Manager sends a POST Ajax request to the corresponding server-side script specified in the "handlers" property 
of FileManager configuration:

~~~js
webix.ready(function(){
	var fManager = new webix.ui({
		view:"filemanager",
		handlers:{
			"upload" 	: "data/saving.php",
			"download"	: "data/saving.php",
			"copy"		: "data/saving.php",
			"move"		: "data/saving.php",
			"delete"	: "data/saving.php",
			"rename"	: "data/saving.php",
			"create"	: "data/saving.php"
		}
	});
    fManager.load("data/get.php");
});
~~~

The request contains several parameters: 

- action - the name of the executed action
- source - the id of the file or the folder that the action has been executed with
- target - (optional) the id of the parent folder (for example, in the case of "copy" action) or the new name of the file ("rename" action)
- upload - (optional) a file that will be uploaded (for the "upload" action)

For example, if we copy a file with the id "myfile1" into the folder with the id "folder2", the request contains the following parameters:

**{action: "copy", source: "myfile1", target: "folder2"}**.


File Manager is a purely client-side widget, therefore you can implement any logic at the backend. 
You can find several demos that implement PHP data in the File Manager package.

{{sample
64_file_manager/01_basic/04_operations.html
}}


{{sample
64_file_manager/01_basic/03_uploading.html
}}
