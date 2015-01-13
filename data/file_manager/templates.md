Data Visualization
==================

File Manager allows representing folders and different files inside it (excel, pdf, powerpoint, text, video, images, code files and archives).

Folders are located in the Tree view, while their content is displayed in the Files view.

There are default templates that define the appearance of File Manager elements:

- <a href="#name">templateName</a> - template applied for the folder/file's name
- <a href="#size">templateSize</a> - template applied for the file size
- <a href="#date">templateDate</a> - template applied for the format of folder/file's date of modification
- <a href="#create">templateCreate</a> - template for the newly created folder
- <a href="#templateicons">templateIcons</a> - template for icons that can be customized (used in "files" and "table" views)
- <a href="#icons">icons</a> - an array of icons. The icons are taken from the [Font Awesome](http://fortawesome.github.io/Font-Awesome/) collection 

<img src="file_manager/templates.png"/>

<h3 id="name">templateName</h3>

Specifies the folder/file's name.

~~~js
{
 	webix.template("#value#")
}
~~~

<h3 id="size">templateSize</h3>

Specifies the file size.

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
},
~~~

<h3 id="date">templateDate</h3>

Specifies the format of folder/file's date of modification.

~~~js
templateDate: function(obj){
	var date = obj.date;
	if(typeof(date) != "object"){
		date = new Date(parseInt(obj.date,10)*1000);
	}
	return webix.i18n.fullDateFormatStr(date);
},
~~~

<h3 id="create">templateCreate</h3>

Template applied to the newly created folder.

~~~js
templateCreate: function(){
	return {value: "newFolder", type: "folder", date: new Date()};
},
~~~

<h3 id="templateicon">templateIcon</h3>

Customizable template for icons in "files" and "table" views.

~~~js
templateIcon: function(obj,common){
	return "<span class='webix_icon webix_fmanager_icon fa-"
    	+(common.icons[obj.type]||common.icons["default"])+"'></span>";
},
~~~


<h3 id="icons">Icons</h3>

Specifies an array of icons for File Manager.

You can set icons for the following File Manager elements:
folders, files in Word, Excel, PDF, PowerPoint, text format, as well as for video, audio, image, code files and archives.

There's also a default icon which is set for the files without defined types or in case of specifying the type of icon that isn't included into Font Awesome collection.

The example of specifying icons is given below:

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
			default: "file-o"
		}
~~~