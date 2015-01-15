API Reference
===============

Methods
-----------

###getUploader

gets the uploader object

~~~js
var uploader = fmanager.getUploader();
~~~   


###getMenu

gets the popup menu object

~~~js
var menu = fmanager.getMenu();
~~~    
   
   
###getPath    

gets an array of folders' ids in a path 
  
~~~js
var pathIds = fmanager.getPath();

// or

var pathIds = fmanager.getPath(id);
~~~    
   
params:

- id - {string} the id of the selected folder (optional)
 
 
###getPathNames

gets an array of folders' names in a path

~~~js
var pathNames = fmanager.getPathNames();

// or 

var pathNames = fmanager.getPathNames(id);
~~~		

params:

- id - {string} the id of the selected folder (optional)
 
 
###setPath        
    
selects a certain folder and sets path values for it 

~~~js
fmanager.setPath(id);
~~~
		
params:

- id - {string} a folder id




<h3 id="getsearchdata">getSearchData</h3>

gets an array of items (files, folders) that contains text in their names

~~~js
var result = fmanager.getSearchData(id,text);
~~~

params:

- id - {mixed}  the id of the folder where the text is searched
- text - {string} searched text 


    
<h3 id="showresults">showSearchResults</h3>

searches text and displays results on the screen

~~~js
fmanager.showSearchResults(text);
~~~

params:

- text - {string} searched text 

    
<h3 id="hideresults">hideSearchResults</h3>

hides search results

~~~js
fmanager.hideSearchResults();
~~~
    
###goBack 

goes back in the navigation history

~~~js
fmanager.goBack(step);
~~~
	
params:

- step - {number} the number of steps back (1 by default) 

###goForward

goes forward in the navigation history

~~~js
fmanager.goForward(step);
~~~

params:

- step - {number} the number of steps forward (1 by default)  

    
 
###levelUp 

selects the parent folder

~~~js
fmanager.levelUp(id);
~~~

- id - {string} the id of the selected file/folder
    
    
###markCopy  


preselected files/folders for copy operation

~~~js
fmanager.markCopy(id);
~~~

- id - {string,array} ids of files for copying
    

###markCut

preselected files/folders for move operation

~~~js
fmanager.markCut(id);
~~~

- id - {string,array} ids of files for moving
    

<h3 id="paste">pasteFile</h3>

pastes files/folders that were selected for copying or moving

~~~js
fmanager.pasteFile(id)
~~~
	
params:

- id - {mixed} the id of the folder where copyed or cut files will be pasted
    

<h3 id="download">download</h3>

downloads the selected file

~~~js
fmanager.download(id);
~~~
	
- id - {string} the id of the downloaded file


<h3 id="copy">copyFile</h3>

copies a selected file/folder 

~~~js
fmanager.copyFile(source,target);
~~~

params:

- source - {string, array} the copied items ids
- target - {string} the id of the folder where the items are copied to
    
<h3 id="move">moveFile</h3>

moves a selected file/folder

~~~js
fmanager.moveFile(source,target);
~~~

params:

- source - {string} the moved file's id (or an array of ids in case of multiple files)
- target - {string} the id of the folder where the file(s) is moved to
    

<h3 id="delete">deleteFile</h3>

deletes items by their ids

~~~js
fmanager.deleteFile(ids);
~~~

params:

- ids - {string, array} the ids of items that will be deleted    

<h3 id="create">createFolder</h3> 

creates a new folder

~~~js
fmanager.createFolder(targetId);
~~~

params:

- targetId - an id of parent folder where a new folder will be created (templateCreate is applied automatically)

###editFile

opens editor for a certain item in the active view (Tree or Files view)

~~~js
fmanager.editFile(id);
~~~

params:

- id - id of the file/folder for editing
    
    
<h3 id="rename">renameFile</h3>

renames a folder/file:

~~~js
fmanager.renameFile(id,name,property);
~~~

params:

- id - {string} the id of the folder/file that should be renamed
- name - {string} a new filename
- property - {string} "value" by default, the property of a file/folder object that contains filename
    
    
###getActiveView

returns a reffrence to the active view (Tree or Files view)

~~~js
var view = fmanager.getActiveView();
~~~
 
###getActive

returns ids of active items 

~~~js
var ids = fmanager.getActive();
~~~
  
<h3 id="upload">upload</h3>

opens a file upload dialog

~~~js
fmanager.uploadFile(target);
~~~

- target - the id of the folder where a file will be uploaded

Properties
----------------

###handlers

specifies server-side scripts that will be called by request to the server

~~~js
webix.ui({
	view:"filemanager",
    handlers:{
    	"upload"    : "data/saving.php",
       	"download"  : "data/saving.php",
         ...
    }
});
~~~

###icons

defines an array of icons for File Manager

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    icons: {
		folder: "folder",
		doc: "file-word-o",
		...
	}
});
~~~


###mode

defines the id of the selected view

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    mode: "table"
    ...
});
~~~

###modes

specifies the array of modes in the File view

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    modes: ["files","table"]
    ...
});
~~~

###readonly

sets readonly mode for File Manager

~~~js
webix.ready(function(){
	webix.ui({
		view:"filemanager",
        readonly: true,
        url:"../common/data.php"
	});
});
~~~

###structure

configures the structure of File Manager

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    structure:{...} 
    ...
});
~~~

###templateCreate  

defines a template for the newly created folder

~~~js
templateCreate: function(){
    return {value: "newFolder", type: "folder", date: new Date()};
}
~~~

###templateDate 

defines a template applied for the format of folder/file's date of modification

~~~js
templateDate: function(obj){
    var date = obj.date;
    if(typeof(date) != "object"){
        date = new Date(parseInt(obj.date,10)*1000);
    }
    return webix.i18n.fullDateFormatStr(date);
}
~~~

###templateIcon 

defines a template for icons that can be customized (used in "files" and "table" views)

~~~js
templateIcon: function(obj,common){
    return "<span class='webix_icon webix_fmanager_icon fa-"
        +(common.icons[obj.type]||common.icons["default"])+"'></span>";
},
~~~


###templateName 

defines a template applied for the folder/file's name

~~~js
templateName: webix.template("#value#"),
~~~


###templateSize

defines a template applied for the file size

~~~js
templateSize: function(obj){
    var value = obj.size;
    var labels = webix.i18n.filemanager.sizeLabels;
    var pow = 0;
    while(value/1024 >1){
        value = value/1024;
        pow++;
    }
    var isInt = (parseInt(value,10) == value);
 
    var format = webix.Number.numToStr({
        decimalDelimiter:webix.i18n.decimalDelimiter,
        groupDelimiter:webix.i18n.groupDelimiter,
        decimalSize : isInt?0:webix.i18n.groupSize
    });
 
    return format(value)+""+labels[pow];
}
~~~


###uploadProgress

defines the object with configuration of progress bar that appears during the upload

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    uploadProgress: {
		type:"top",
        delay:3000,
        hide:true
	}
});
~~~




