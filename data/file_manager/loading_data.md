Loading and Saving Data
=======================

Data can be loaded in different formats including json (the default one) and xml. 
The data item should include at least 5 properties:

- id - {string} - unique item id 
- value - {string} the name of a file or a folder
- type - {string} the type of a file
- date - {number} time of file/folder modification in Unix format
- size - {number} file size in bytes


The example for json data item:
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

Requests to server side
-------------

When some action is executed (upload, download..), File Manager sends POSP Ajax request to a correspoing server-side script specified in the "handlers" property 
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
- target - {optional} the id of the parent folder (for example, in the case of "copy" action) or the new name of the file ("rename" action)
- upload - {optional} the file to upload (for "upload" action)

For example, if we copy a file with the id "myfile1" into the folder with the id "folder2", the request contains the following parameters:
**{action: "copy", source: "myfile1", target: "folder2"}**.


File Manager is a purely client-side widget, therefore, you can implement any logic on backend. 
You can find several demos that implement PHP data in the File Manager package.

