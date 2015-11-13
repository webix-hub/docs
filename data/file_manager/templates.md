Data Visualization in File Manager
==================

Data items visualization in File Manager is rather flexible, so you can easily customize it by means of redefining the corresponding templates.

Thus, it's possible to specify the necessary date format, set desired icons or change an item's name presentation.

The following templates are available:

- <a href="#name">templateName</a> - the template applied for the folder/file's name
- <a href="#size">templateSize</a> - the template applied for the file size
- <a href="#date">templateDate</a> - the template applied for the format of folder/file's date of modification
- <a href="#create">templateCreate</a> - the template for a newly created folder
- <a href="#templateicon">templateIcon</a> - the template for icons used in "Files" and "Table" view modes. The icons are customizable
- <a href="#templatetype">templateType</a> - the template for the type of a file
- <a href="#icons">icons</a> - an array of icons. The icons are taken from the [Font Awesome](http://fortawesome.github.io/Font-Awesome/) collection 

<img src="file_manager/templates.png"/>

<h3 id="name">templateName</h3>

Specifies how the folder/file's name will be displayed in File Manager.

~~~js
templateName: function(fileObj,common){
 	return fileObj.value
}
~~~

<h3 id="size">templateSize</h3>

Specifies the file size.

~~~js
templateSize: function(obj,common){
	var value = obj.size;
    var isInt = (parseInt(value,10) == value);
    
    // get size label
    var labels = webix.i18n.filemanager.sizeLabels; // ["B","KB",...]
    var sizeIndex = 0;
    while(value/1024 >1){
    	value = value/1024;
    	sizeIndex++;
    }
    var label = labels[sizeIndex];
    
     // locale format
    var getFormatedValue = webix.Number.numToStr({
    	decimalDelimiter:webix.i18n.decimalDelimiter,
    	groupDelimiter:webix.i18n.groupDelimiter,
    	decimalSize : isInt?0:webix.i18n.groupSize
    });
    
    return getFormatedValue(value)+""+label;
},
~~~

<h3 id="date">templateDate</h3>

Specifies the format of folder/file's date of modification. 

~~~js
templateDate: function(obj){
	var date = obj.date; // 'date' property is Unix time
	if(typeof(date) != "object"){
		date = new Date(parseInt(obj.date,10)*1000);
	}
	return webix.i18n.fullDateFormatStr(date);
},
~~~

<h3 id="create">templateCreate</h3>

Specifies properties for a newly created folder.

~~~js
templateCreate: function(){
	return {value: "newFolder", type: "folder", date: new Date()};
},
~~~


<h3 id="templatetype">templateType</h3> 

Specifies the type of a file.

~~~js
templateType: function(obj){
   var types = webix.i18n.filemanager.types;
   return types&&types[obj.type]?types[obj.type]:obj.type;
}
~~~


<h3 id="templateicon">templateIcon</h3>

A customizable template for icons in "Files" and "Table" view modes.

~~~js
templateIcon: function(obj,common){
	return "<span class='webix_icon webix_fmanager_icon fa-"
    	+(common.icons[obj.type]||common.icons["file"])+"'></span>";
},
~~~

<br>

{{sample
64_file_manager/03_customization/06_icons_template.html
}}

<h3 id="icons">Icons</h3>

The "icons" collection allows specifying [FontAwesome](http://fortawesome.github.io/Font-Awesome/) icons for the **templateIcon**.
You can specify icons that correspond to the loaded file types. 
If the collection does not contain an icon for the loaded type, FileManager will set the "default" icon type. 

By default, the following icons are set:

~~~js
icons: {
			folder: "folder",
			doc: "file-word-o",
			excel: "file-excel-o",
			pdf: "file-pdf-o",
			pp: "file-powerpoint-o",
			text: "file-text-o",
			video: "file-video-o",
			image: "file-image-o",
			code: "file-code-o",
			audio: "file-audio-o",
			archive: "file-archive-o",
			file: "file-o"
		}
~~~

