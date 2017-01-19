Loading and Saving Data in File Manager
=======================

Data can be [loaded](desktop/data_loading.md) in different formats, including JSON (the default one) and XML. 
The data item should include at least 5 properties:

- id - {string} the unique id of the item 
- value - {string} the name of a file or a folder
- type - {string} the type of a file
- date - {number} time of the file/folder modification in Unix format
- size - {number} file size in bytes


An example of json data item is given below:

~~~js
{
	id: 	"base1", 
    value: 	"Product1.jpg", 
    type:	"image",  
    date: 	1420717913, 
    size: 	4500
},
~~~


You can use a data source in json, xml or other format supported by [Webix TreeStore](datatree/loading_data.md). 
Data can be generated via any server-side script. In the data source you can use information from a real file system or records from a database. 

Requests to the server side
-------------

When some action is executed (upload, download, etc.) with files, File Manager sends a POST Ajax request to the corresponding server-side script specified in the "handlers" property of FileManager configuration:

~~~js
webix.ready(function(){
	var fManager = new webix.ui({
		view:"filemanager",
		handlers:{
			"upload" 	: "data/saving.php",
			"download"	: "data/saving.php",
			"copy"		: "data/saving.php",
			"move"		: "data/saving.php",
			"remove"	: "data/saving.php",
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

~~~js
{
	action: "copy", 
    source: "myfile1", 
    target: "folder2"
}
~~~

File Manager is a purely client-side widget, therefore you can implement any logic at the backend. 
You can find several demos that implement PHP data in the File Manager package.

{{sample
64_file_manager/01_basic/04_operations.html
}}

Requests and responses for different operations
--------------

Requests and responses for various handlers (server scripts processing particular operations) may differ.

###"copy", "move" operations

**Request parameters** are:

- action - the name of the action ("copy" or "move")
- source - the list of file/folder ids
- target - the id of the target folder

~~~js
action:"copy"
source:"reports/sales01.doc,reports/sales02.doc"
target:"sales"
~~~

The **response** is an array. Each element of this array is an object that includes the following properties:

- id - the new id
- value - the new name

~~~js
[
	{"id":"sales\/sales01.doc","value":"sales01.doc"},
    {"id":"sales\/sales02.doc","value":"sales02.doc"}
]
~~~

###"remove" operation

**Request parameters** are:

- action - the name of the action ("remove")
- source - the list of the files/folders' ids

~~~js
action:"copy"
source:"reports/sales01.doc,reports/sales02.doc"
~~~

The **response** is any valid JSON, e.g.:

~~~js
["ok","ok"]
~~~

###"create" operation

**Request parameters** are:

- action - the name of the action ("create")
- source - the name of a new folder
- target - the id of the target folder

~~~js
action:	"create"
value:	"newFolder"
source: "newFolder"
target: "documents/2016"
~~~

The **response** is a JSON object that includes the following properties:

- id - the new folder id
- value - the new folder name

~~~js
{
	"id":"documents\/2016\/newFolder",
    "value":"newFolder"
}
~~~

###"rename" operation

**Request parameters** are:

- action - the name of the action ("rename")
- source - the id of file/folder to rename
- target - the new file/folder name

~~~js
action: "rename"
source: "documents/2016/newFolder"
target: "may"
~~~

The **response** is a JSON object that includes the following properties:

- id - the new file/folder id
- value - the new file/folder name

~~~js
{
	"id":"documents\/2016\/may",
    "value":"may"
}
~~~


Dynamic loading
-----------------

Dynamic loading presupposes the loading of long server-side datasets in smaller portions.
Initially, the data fills the File Manager to some extent and later on it's fetched on demand.

There are two methods of loading data into File Manager dynamically:

1) **"branch" mode**


The initially loaded data can contain a minimum number of folders, e.g. only first-level folders. 
Folders that should be filled on demand must contain the **webix_branch** attribute. 
If such a folder contains at least one child folder of its own, you should additionally provide **webix_child_branch** attribute for this folder.

To enable dynamic loading, you need to define the "branch" attribute of the "handlers" property 
in the FileManager configuration and provide the url of the server-side script that will fetch the data when some branch is expanded:

~~~js
webix.ui({
	view:"filemanager",
	id:"files",
	handlers:{
    	"branch": "../common/data_branch.php",
    	...
     }
});

$$("files").load("../common/data.php");
~~~

Let's consider the following example of json data generated by "data.php" that loads the initial tree structure:

- FileManager contains two folders on the first level. The content of both folders should be loaded dynamically;
- The first folder contains only files;
- The second one includes files and subfolders.

~~~js
{
	id: "Files":,
	...
	data:[
	   {
	      id: "documents",
          value: "documents",
          type: "folder",
          size: 0,
          date: 1440421612,
          webix_branch: 1 		             
	   },
	   {
	      id: "images",
          value: "images",
          type: "folder",
          size: 0,
          date: 1440421625,
          webix_branch: 1,
		  webix_child_branch: 1 			  
	   }
	]
}
~~~

When the content of the folder should be dynamically loaded (e.g. on expanding the branch), FileManager executes a script set by the "branch" parameter. 
The request contains several parameters:

- action - the name of the dynamic loading mode
- source - the id of the folder that requests for data

For example, if we open the folder with the "documents" id to view its content, the following parameters should be sent:

~~~js
{
	action: "branch",
	source: "documents"
}
~~~

A server-side response should contain two properties:

- parent- (string) id of the folder where we load new data
- data - (array) the loaded data

An example of response for the "documents" folder from the above request is:

~~~js
{ parent: "documents", data: [ ...array of child items... ] }
~~~

  
{{sample 64_file_manager/04_loading/01_dynamic_loading.html}}

2) **"files" mode**

The whole tree structure (folders) is loaded initially. The files of a particular folder will be dynamically loaded only when a folder will be opened for viewing. 
You should add the **webix_files** attribute for the folders that have files which should be loaded on demand.

To enable dynamic loading, you need to define the "files" attribute of the "handlers" property 
in the FileManager configuration and provide the url of a server-side script that will load data when some folder will be opened:

~~~js
webix.ui({
	view:"filemanager",
	id:"files",
	handlers:{
    	"files": "../common/data_dyn.php",
    	...
     }
});

$$("files").load("../common/data.php");
~~~

Let's consider the following example of json data generated by "data.php" that loads the initial tree structure:

- FileManager contains one folder on the first level;
- This folder includes two subfolders and files;
- The subfolders contain files;
- The files of the folder and subfolders should be loaded dynamically.

~~~js
{
    id: "Files":,
    ...
    data:[
       {
          id: "documents",
          value: "documents",
          type: "folder",
          size: 0,
          date: 1440421612,
          webix_files: 1,
		  data:[
			{
			  id: "documents/projects",
			  value: "projects",
			  type: "folder",
			  size: 0,
			  date: 1440421625,
			  webix_files: 1           
			  
			},
			{
			  id: "documents/images",
			  value: "images",
			  type: "folder",
			  size: 0,
			  date: 1440421625,
			  webix_files: 1           
			}
		  ]		  
       }
    ]
}
~~~

When files should be dynamically loaded, FileManager sends a request to the script set in the "files" parameter. 
The request contains several parameters:

- action - the name of the dynamic loading mode
- source - the id of the folder that requests for the data

For example, if we open the folder with the "documents" id to view its content, the request contains the parameters below:

~~~js
{
	action: "files",
	source: "documents"
}
~~~

A JSON response should contain two properties:

- parent - (string) id of the folder where we load new data
- data - (array) the loaded data

An example of response for the "documents" folder from the above request is:

~~~js
{ parent: "documents", data: [ ...array of child items... ] }
~~~


{{sample 64_file_manager/04_loading/02_files_dyn_loading.html}}

Server-side searching for content
---------------------

You can implement server-side searching for a file or a folder in FileManager. As data is loaded by portions, searching is mostly performed in the dynamic loading mode.

To process a search request, FileManager sends a POST Ajax request to the server-side script specified in the "search" attribute of the "handlers" property 
of FileManager configuration:

~~~js
webix.ui({
	view:"filemanager",
	id:"files",
	handlers:{
    	"search": "../common/data_branch.php",
    	...
     }
});

...
~~~

The request contains several parameters:

- action - the name of the action
- source - the id of the folder where data has been searched
- text - the text that the content should include 

For example, if you are searching files/folders that include "report" in their names, the request parameters will be the following:

~~~js
{
	action: "search",
	source: "documents",
	text: 	"report"
}
~~~

An example of response can be as follows:

~~~js
[
   { id: "documents/reports", type: "folder",...},
   { id: "documents/reports/report2015.doc", ...},
   ...
]
~~~

@spellcheck: myfile