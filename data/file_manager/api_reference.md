API Reference
===============

Methods
-----------

- <a href="#copy">copyFile</a> - copies a selected file/folder
- <a href="#create">createFolder</a> - creates a new folder
- <a href="#delete">deleteFile</a> - deletes items by their ids
- <a href="#download">download</a> - downloads a selected file
- <a href="#edit">editFile</a> - opens editor for a certain item in the active view (Tree or Files view)
- <a href="#getactive">getActive</a> - gets ids of active items 
- <a href="#getactiveview">getActiveView</a> - gets the reference to the active view (Tree or Files view)
- <a href="#getcurrentfolder">getCurrentFolder</a> - gets the name of the folder selected in Tree
- <a href="#getmenu">getMenu</a> - gets the popup menu object
- <a href="#getpath">getPath</a> - gets an array of folders' ids in a path
- <a href="#getpathnames">getPathNames</a> - gets an array of folders' names in a path
- <a href="#getsearchdata">getSearchData</a> - gets an array of items (files, folders) that contains text in their names
- <a href="#getselectedfile">getSelectedFile</a> - gets a string or an array with selected file(nested folder) name(s)
- <a href="#getuploader">getUploader</a> - gets the uploader object
- <a href="#goback">goBack</a> - goes back in the navigation history
- <a href="#goforward">goForward</a> - goes forward in the navigation history
- <a href="#hideresults">hideSearchResults</a> - hides search results
- <a href="#levelup">levelUp</a> - selects the parent folder
- <a href="#markcopy">markCopy</a> - preselectes files/folders for copy operation
- <a href="#markcut">markCut</a> - preselectes files/folders for move operation
- <a href="#move">moveFile</a> - moves a selected file/folder
- <a href="#paste">pasteFile</a> - pastes files/folders that were selected for copying or moving
- <a href="#rename">renameFile</a> - renames a folder/file
- <a href="#setpath">setPath</a> - selects a certain folder and sets path values for it 
- <a href="#showresults">showSearchResults</a> - searches text in the active folder and displays results on the screen
- <a href="#upload">uploadFile</a> - opens a file upload dialog


<h3 id="copy">copyFile</h3>

copies a selected file/folder 

~~~js
fmanager.copyFile(source,target);
~~~

params:

- source - {string, array} the copied items ids
- target - {string} the id of the folder where the items are copied to


<h3 id="create">createFolder</h3> 

creates a new folder

~~~js
fmanager.createFolder(targetId);
~~~

params:

- targetId - an id of parent folder where a new folder will be created (templateCreate is applied automatically)


<h3 id="delete">deleteFile</h3>

deletes items by their ids

~~~js
fmanager.deleteFile(ids);
~~~

params:

- ids - {string, array} the ids of items that will be deleted    


<h3 id="download">download</h3>

downloads a selected file

~~~js
fmanager.download(id);
~~~
	
- id - {string} the id of the downloaded file


###<span id='edit'>editFile</span> 

opens editor for a certain item in the active view (Tree or Files view)

~~~js
fmanager.editFile(id);
~~~

params:

- id - id of the file/folder for editing

 
###<span id='getactive'>getActive</span> 

gets ids of active items 

~~~js
var ids = fmanager.getActive();
~~~

returns:

- {string} - the ids of active views


###<span id='getactiveview'>getActiveView</span> 

gets the reference to the active view (Tree or Files view)

~~~js
var view = fmanager.getActiveView();
~~~
 
returns:

- {object} - the object of the active view

###<span id='getcurrentfolder'>getCurrentFolder</span>

gets the name of the folder selected in Tree

~~~js
var folder = fmanager.getCurrentFolder();
~~~   

returns:

- {string} - the name of the selected folder


###<span id='getmenu'>getMenu</span> 

gets the popup menu object

~~~js
var menu = fmanager.getMenu();
~~~    
   
returns:

- {object} - the popup menu object

   
###<span id='getpath'>getPath</span> 

gets an array of folders' ids in a path 
  
~~~js
var pathIds = fmanager.getPath();

// or

var pathIds = fmanager.getPath(id);
~~~    
   
params:

- id - {string} the id of the selected folder (optional)
 
returns:

- {array} - an array of folders' ids


###<span id='getpathnames'>getPathNames</span> 

gets an array of folders' names in a path

~~~js
var pathNames = fmanager.getPathNames();

// or 

var pathNames = fmanager.getPathNames(id);
~~~		

params:

- id - {string} the id of the selected folder (optional)

returns:

- {array} - an array of folders' names
 
 
<h3 id="getsearchdata">getSearchData</h3> 

gets an array of items (files, folders) that contains text in their names

~~~js
var result = fmanager.getSearchData(id,text);
~~~

params:

- id - {mixed}  the id of the folder where the text is searched
- text - {string} searched text 


returns:

- {array} - an array of items
 

<h3 id="getselectedfile">getSelectedFile</h3> 

gets a string or an array with selected file(nested folder) name(s)

~~~js
var selected = fmanager.getSelectedFile(id,text);
~~~
 
returns:

- {string/array} - selected file(nested folder) name(s)

 
###<span id='getuploader'>getUploader</span> 

gets the uploader object

~~~js
var uploader = fmanager.getUploader();
~~~   

returns:

- {object} - the uploader object 


###<span id='goback'>goBack</span> 

goes back in the navigation history

~~~js
fmanager.goBack(step);
~~~
	
params:

- step - {number} the number of steps back (1 by default) 


###<span id='goforward'>goForward</span> 

goes forward in the navigation history

~~~js
fmanager.goForward(step);
~~~

params:

- step - {number} the number of steps forward (1 by default)  


<h3 id="hideresults">hideSearchResults</h3>

hides search results

~~~js
fmanager.hideSearchResults();
~~~
    
 
###<span id='levelup'>levelUp</span> 

selects the parent folder

~~~js
fmanager.levelUp(id);
~~~

- id - {string} the id of the selected file/folder


###<span id='markcopy'>markCopy</span> 


preselectes files/folders for copy operation

~~~js
fmanager.markCopy(id);
~~~

- id - {string,array} ids of files for copying
    

###<span id='markcut'>markCut</span> 

preselectes files/folders for move operation

~~~js
fmanager.markCut(id);
~~~

- id - {string,array} ids of files for moving
    

<h3 id="move">moveFile</h3>

moves a selected file/folder

~~~js
fmanager.moveFile(source,target);
~~~

params:

- source - {string} the moved file's id (or an array of ids in case of multiple files)
- target - {string} the id of the folder where the file(s) is moved to
    

<h3 id="paste">pasteFile</h3>  

pastes files/folders that were selected for copying or moving

~~~js
fmanager.pasteFile(id)
~~~
	
params:

- id - {mixed} the id of the folder where copyed or cut files will be pasted
    

<h3 id="rename">renameFile</h3> 

renames a folder/file

~~~js
fmanager.renameFile(id,name,property);
~~~

params:

- id - {string} the id of the folder/file that should be renamed
- name - {string} a new filename
- property - {string} "value" by default, the property of a file/folder object that contains filename
    
     
###<span id='setpath'>setPath</span>       
    
selects a certain folder and sets path values for it 

~~~js
fmanager.setPath(id);
~~~
		
params:

- id - {string} a folder id

   
<h3 id="showresults">showSearchResults</h3>

searches text and displays results on the screen

~~~js
fmanager.showSearchResults(text);
~~~

params:

- text - {string} searched text 

  
<h3 id="upload">uploadFile</h3>

opens a file upload dialog

~~~js
fmanager.uploadFile(target);
~~~

- target - the id of the folder where a file will be uploaded



Properties
----------------


- <a href="#handlers">handlers</a> - a collection of server scripts for action handling
- <a href="#icons">icons</a> - a collection of icons
- <a href="#mode">mode</a> - the initially selected mode ("table" by default)
- <a href="#modes">modes</a> - an array with modes names
- <a href="#readonly">readonly</a> - the readonly mode for File Manager
- <a href="#structure">structure</a> - the configuration of File Manager views
- <a href="#templatecreate">templateCreate</a> -  a template for a newly created folder
- <a href="#templatedate">templateDate</a> -  a template applied for the format of folder/file's date of modification
- <a href="#templateicon">templateIcon</a> -  a template for icons that can be customized (used in "files" and "table" views)
- <a href="#templatename">templateName</a> -  a template applied for the folder/file's name
- <a href="#templatesize">templateSize</a> -  a template applied for the file size
- <a href="#uploadprogress">uploadProgress</a> - an object with configuration of progress bar that appears during the upload


<h3 id="handlers">handlers</h3>

specifies the collection of server scripts for action handling

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

<h3 id="icons">icons</h3>
 
defines icons for File Manager

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


<h3 id="mode">mode</h3>

defines the id of the initially selected mode ("table" by default)

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    mode: "files"
    ...
});
~~~

<h3 id="modes">modes</h3>

specifies an array of modes in the File view

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    modes: ["files","table"]
    ...
});
~~~

<h3 id="readonly">readonly</h3>

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

<h3 id="structure">structure</h3>

sets the configuration of File Manager views

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    structure:{
       ...
    } 
    ...
});
~~~

{{sample
64_file_manager/03_customization/03_adding_mode.html
}}

<h3 id="templatecreate">templateCreate</h3>

defines a template for a newly created folder

~~~js
templateCreate: function(){
    return {value: "newFolder", type: "folder", date: new Date()};
}
~~~

<h3 id="templatedate">templateDate</h3>

defines a template applied for the format of folder/file's date of modification

~~~js
webix.ui({
	view:"filemanager",
    templateDate: function(obj){
        var date = obj.date;
        if(typeof(date) != "object"){
           date = new Date(parseInt(obj.date,10)*1000);
        }
        return webix.i18n.fullDateFormatStr(date);
    }
});
~~~

<h3 id="templateicon">templateIcon</h3>

defines a template for icons that can be customized (used in "files" and "table" views)

~~~js
templateIcon: function(obj,common){
    return "<span class='webix_icon webix_fmanager_icon fa-"
        +(common.icons[obj.type]||common.icons["file"])+"'></span>";
},
~~~


<h3 id="templatename">templateName</h3>

defines a template applied for the folder/file's name

~~~js
templateName: function(fileObj,common){
    return fileObj.value
}
~~~


<h3 id="templatesize">templateSize</h3>

defines a template applied for the file size

~~~js
templateSize: function(obj,common){
	var value = obj.size;
    var isInt = (parseInt(value,10) == value);
    
    // apply locale formating
    var getFormatedValue = webix.Number.numToStr({
    	decimalDelimiter:webix.i18n.decimalDelimiter,
    	groupDelimiter:webix.i18n.groupDelimiter,
    	decimalSize : isInt?0:webix.i18n.groupSize
    });
    value = getFormatedValue(value); 
    
    // get size label
    var labels = webix.i18n.filemanager.sizeLabels; // ["B","KB",...]
    var sizeIndex = 0;
    while(value/1024 >1){
    	value = value/1024;
    	sizeIndex++;
    }
    var label = labels[sizeIndex];
    
    return value+""+label;
},
~~~


<h3 id="uploadprogress">uploadProgress</h3>

defines an object with configuration of progress bar that appears during the upload

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




