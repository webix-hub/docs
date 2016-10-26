Uploading Files
============

Files are uploaded with the help of dedicated UI component called **uploader.** 

<img src="desktop/uploader.png"/>

{{sample 21_upload/01_init_list.html}}

Webix uploader inherits from [view](desktop/view.md) and looks like a standard Webix [button](desktop/button.md) you need to click to start uploading. 

The button can as well be made [invisible](desktop/apionly_uploader.md) and file uploading dialog can be started on any page event (except for IE8).

##Uploader Initialization

Uploader is a control that looks like a standard [button](desktop/button.md) yet triggers an upload window on its clicking. 

Uploader is normally initialized together with the UI component to display values of pre-uploaded and uploaded files. Such component (it may be [list](desktop/list.md) or [template](desktop/template.md), etc.) is called 
**uploader body** and is initialized separately. To link it to the uploader, specify its **ID** as value of uploader **link** property.  

~~~js
webix.ui({
	view:"form", 
    rows:[
    	{
			view:"uploader",
			id: "uploader_1",
			value:"Upload file",
    		link:"mylist",
        	upload:"php/upload.php",
            datatype:"json"
   		}, 
   		{
			view:"list",  
            id:"mylist", 
            type:"uploader",
			autoheight:true, 
            borderless:true	
		}
  	]
});
~~~

**Uploader Properties:**

- uploader **ID** should be specified in case you are going to work with it later;
- **value** (string) - text value of the uploader button;
- **link** (string) - the ID of a component to display values of chosen files;
- **upload** (string) - path to a script file that will handle uploading;
- **multiple** (boolean) - *true* by default. Set to *false*, it enables removing the previously added file and replacing it with a new one so that you can upload only one file at a time;
- **autosend** (boolean) - *true* by default. Set to *false*, it cancels on-the-go file processing. The files are added to the uploader body only. They can be sent to server by calling the 
[send()](api/ui.uploader_send.md) method later on;
- **datatype** (string) - [type](desktop/data_types.md) of serverside response. Optional, *json* by default.

Read more about **[uploader configuration](desktop/configuring_uploader.md)** and **[server script](desktop/uploader_serverside.md)**. 

##Uploader Display Modes

The library offers Webix [list](desktop/list.md) as default component to show properties of uploaded files. You can as well init any Webix component for these needs provided that you specify an appropriate **template** for it.

###List Uploader

<img src="desktop/uploader.png"/>

Set to **type:"uploader"**, list shows the following file info: 

- **file name**;
- its **extension;** 
- file **size**;
- **Cancel** icon;
- **"Upload Ready"** icon (isn't shown initially for *autosend:false* mode. )

You can as well create a **custom type** for list items. It's described in an [Uploader Progress Bar](desktop/progress_bar.md) article.

###Template Uploader

<img src="desktop/template_uploader.png">

To make [template](desktop/template.md) displays file properties, you should define a [function template](desktop/html_templates.md#templatetypes) to form a display string.

In the snippet below, template shows file properties in a string comprised of file names joined together with a comma. 

~~~js
view:"template",
template:function(data){
	var names = [];
	if (data.each)
		data.each(function(obj){  names.push(obj.name);  });
		return names.join(", ");
}
~~~

{{sample 21_upload/02_init_template.html}}

Template uploader is really good for attaching files to some message. 

##Manipulations with Files

The properties of the uploaded files are stored in the uploader **files** Data Collection that contains an object of file objects.

To get to all files currently added to the uploader body, apply the following code: 

~~~js
//"upl1" - uploader ID
$$("upl1").files.data.pull;
~~~

The line returns an object with uploaded data items (files). Each file item contains information about its size, type, status, etc.

 Each file object includes:

- **id** - file ID generated automatically with the **webix.uid()** method per each uploading session;
- **name** - file title and extension;
- **type** - file extension only;
- **sizetext** - size of the file (as string like 522Kb);
- **size** - size of the file in bytes (as number);
- **status** - upload status that changes during uploading:
	- *"client"* - file is added to the uploader body on client-side, the uploading hasn't been started yet or was aborted by user;
    - *"transfer"* - file uploading is in progress;
    - *"server"* - file has benn successfully uploaded;
    - *"error"* - an error occured during uploading.
- **item(*id*).context** - the object uploader is connected with.  

{{note
Item ID's are random numbers. They can be retrieved with **getFirstId()**, **getLastId()** and **getNextId()** methods. 
}}

###Getting to Each File Object

File object can be retrieved by the **getItem** method with an ID of the necessary item as parameter:

~~~js
var file_id = $$("upl1").files.getFirstId(); //getting the ID
var fileobj = $$("upl1").files.getItem(file_id).file; //getting file object
filename = $$("upl1").files.getItem(file_id).name; //getting properties
//or
filename = fileobj.name;
~~~

Webix offers rich API to manipulate with **files collection** and each **file object**. For instane, you can:

~~~js
$$("upl1").files.parse(); //parse json data into files collection

$$("upl1").files.getFirstId(); //get ID of the first and last elements from the collection
$$("upl1").files.getLastId(); 

$$("upl1").files.getNextId(id);//get ID of the next file according to the specified one

$$(this.config.uploader).files.remove(id); //remove the specified file
~~~

Note that when you **parse JSON string** to the **files** object, no files are actually added to the uploader!

~~~js
$$("uploader_1").files.parse([	
	{ name:"cover.jpg", sizetext:"54kb", status:"server" },
    { name:"page01.jpg", sizetext:"122kb", status:"server" },
    { name:"page02.jpg", sizetext:"142kb", status:"server" }
]);
~~~

{{sample 21_upload/04_prefill_with_data.html}}


{{note
You can get to file names simpler, with the dedicated **getValues()** method applied to the form that contains this uploader. The method returns **name** properties of each file joined into a comma-separated string. 
}}

~~~js
webix.ui({
	view:"form", rows: [
		{ view: "uploader", name:"records", ...},
        { view:"button", click: function() {
			var text = this.getParentView().getValues();
			text = JSON.stringify(text, "\n");
			webix.message("<pre>"+text+"</pre>");
			}
        }
});
~~~

{{sample 21_upload/02_init_template.html}}

###Treating File Items in a Cycle

Cancelling uploading of several files at once:

~~~js
function cancel(){
	var id= $$("upl1").files.getFirstId();
	while(id){
    	$$("upl1").stopUpload(id);
        id = $$("upl1").files.getNextId(id);
	}
~~~

Defining function to execute on file uploading:

~~~js
$$("uploader").files.data.each(function(obj){
	if (obj.status == "server")
		 //statement
});
~~~

Array of files can be treated by file order as well: 

~~~js
var order = $$("uploader").files.data.order;
for (var i=0; i<order.length; i++){
	if ($$("uploader").files.getItem(order[i]).status = "server")
    	//statement
}
~~~

##Uploader Events

Here are main events that allow for customized uploader behavior. Full event system is to be found in the [API reference](api/refs/ui.uploader.md).  

- **api/ui.uploader_onbeforefileadd_event.md** - triggers on adding a file to uploader menu;
- **api/ui.uploader_onfileupload_event.md** - triggers when upload process is started;
- **api/ui.uploader_onuploadcomplete_event.md** - triggers when file upload is successfully completed.

{{snippet
Confirming Uploading
}}
~~~js
$$("upl1").attachEvent("onUploadComplete", function(){
	webix.message("done");
});
~~~

###Related Articles

- desktop/configuring_uploader.md
- desktop/uploader_serverside.md
- [Creating a Progress Bar for Uploaded Files](desktop/progress_bar.md)
- [Uploader and Form Integration](desktop/uploader_integration.md)
- [Binding Uploader to Any Page Element](desktop/apionly_uploader.md)
- [Api Reference - Uploader Methods, Properties and Events](api/refs/ui.uploader.md)
- [Uploader CSS Image Map](desktop/uploader_css.md)

@index:
 - desktop/configuring_uploader.md
 - desktop/uploader_serverside.md
 - desktop/progress_bar.md
 - desktop/apionly_uploader.md
