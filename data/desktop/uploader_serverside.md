Managing Server Part of Uploading
===============

##Server Script 

In essence, file uploading is done via Ajax. Each time **send()** function is executed, Ajax POST request is sent behind the scene. Its **url** is a script you specify as value of **upload** property.

~~~js
{view:"uploader", name:"uploader", upload:"upload.php", ...}
~~~

The custom script you write yourself on your favorite language, not just PHP. Regardless of the language, the script must contain:

- the desired **destination** for file uploading; 
- script **response** in form of a JS string - *{"status":"server"}* for success, *{"status":"error"}* for failure. 

Below **PHP solution** is explained: 

Uploader is based on an HTML input, type "file", so files passed to the script will be stored in **$_FILES** array under the Uploader **"name"** The properties of an uploaded file can be gotten right here:

~~~php
$file = $_FILES['uploader']; //getting a file object

$file['name']; //name of the uploaded file 
$file['tmp_name']; //name of the file in the temporary storage
~~~

The simplest way to set destination and move the files there is:

~~~php
$destination = realpath('./files'); //define folder
$filename = $destination."/".preg_replace("|[\\\/]|", "", $file["name"]); //set destination
move_uploaded_file($file["tmp_name"], $filename); //move files
~~~

##Tuning Server-side Response

You must also tune the **script response** to notify you about the result of file uploading, otherwise you won't be able to get notification about upload success or failure.

The script ought to **return JSON string** that is later processed by Uploader to change the properties of the corresponding **file object**. 

~~~php
if ( /* conditions */ ){	
	echo '{ "status": "server" }';
} else {
	echo '{ "status": "error" }';
}
~~~

Why it's done so? Each file object features **status** that changes during uploading: 

- **client** - when the file was just added to Uploader and uploading hasn't started yet. Or when uploading was aborted by user;
- **transfer** - during uploading until script response;
- **server** - uploading finished, set when script response is "{status:'server'}";
- **error** - an error has occurred during uploading, set when script response is {'status':'error'}. 

The response is available directly in the **send()** callback that takes it as parameter: 

~~~js
$$("upl1").send(function(response){
	if(response)
		webix.message(response.status);
        webix.message(response.sname);
});
~~~

In addition, script may return any **additional information**, e.g. file storage name encoded with MD5. 

~~~php
$sname = md5($file["name"]);
if ( /*...*/ ){	
	echo '{ "status": "server", "sname":"$sname"}';
}
...
~~~
{{sample 21_upload/03_manual_send.html}}

This additional info is added to the file object and can be later on derived just like other properties.

~~~js
$$("upl1").send(function(){
	var f = $$("upl1").files;
	var file_id = f.getFirstId();
	var status = f.getItem(file_id).status; //upload status
    var status = f.getItem(file_id).name; //file name
    var sname = f.getItem(file_id).sname; //storage name
	webix.message("Upload: "+status+" for "+name+" stored as "+sname );
});
~~~

####Multiple Files

In case of **multiple files** uploaded at a time, direct response won't suit as it contains info about one file.

Instead, start a cycle that will get to each file's value: 

~~~js
$$("upl1").send(function(){
	$$('upl1').files.data.each(function(obj){
		var status = obj.status;
		var name = obj.name;
		if(status=='server'){
			var sname = obj.sname; //came from upload script
			webix.message("Upload: "+status+" for "+ name+" stored as "+sname );
		}
		else{
			webix.message("Upload: "+status+" for "+ name);
		}
});
~~~

{{sample 21_upload/07_form.html}}

###Files Data Array

The same can be done applying directly to the uploader **datastore**, through **data** array:

~~~js
$$("upl1").send(function(){
	var text = f.data.pull[file_id].sname;
	webix.message("Test sname: "+ text);
});
~~~

Or, in a cycle in case of multiple files uploaded at a time:

~~~js
for(var i in f.data.pull){
	var text = f.data.pull[i].sname;
	webix.message("Test sname: "+ text);
}
~~~

Setting the Uploading Button Name
-----------------------

By default, the value of the button to upload files is "upload". If you want to set your own name for this button, you need to make use of the api/ui.uploader_inputname_config.md property.

~~~js
{ view:"uploader", inputName:"myFile" }
~~~

