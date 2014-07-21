Uploader and Form Integration 
=============

The purpose of any form is to collect data from users. This library provides UI [Form](desktop/form.md) and [Htmlform](desktop/htmlform.md) components with lots of 
[controls](desktop/controls.md) while the [uploader](desktop/file_upload.md) component helps get user files (text documents, pictures, etc.)

<br>

<img src="desktop/form_uploader.png">

<br>

{{sample 21_upload/07_form.html}}

Uploader controls as well as the component to display pre-uploaded files is included into the form like any of its other controls: 

~~~js
{view:"form", elements:[
	{ view:"text", label:"Title", labelPosition:"top", name:"title" },
	{ view:"button", label:"Save", type:"form", click:save_form },
	{
		view:"uploader", upload:"php/upload.php",
		id:"files", name:"files",
		value:"Add documents", 
		link:"doclist",  
		autosend:false //!important
	},
	{
    	view:"list", scroll:false, id:"doclist", type:"uploader" 
	}]
}
~~~

{{note
Beware to **switch off autosending** to send files together with other form data. 
}}

##Form Saving

While saving the form, follow the scheme: 

- send files to server;
- (optionally ) get  response of uploading script and use its data. [Described here](desktop/uploader_serverside.md);
- save the form data via Ajax POST request;
- (optionally) get response from a form-saving script and use its data. 

**Files** are processed with a script defined as **upload** value of the uploader ([read more](desktop/uploader_serverside.md)) while form **data** is processed with the help of another one.
You write both scripts on your favourite language to match your needs.

The Ajax request to send the form is defined as a callback to uploader **send()** method, so yo first get data from uploading script responce and can use it while saving form data.

{{snippet
Scheme of Form Saving
}}
~~~js
function save_form(){
	$$("files").send(function(){ //sending files
    	//...callback
        
		webix.ajax().post(
			"php/saveform.php", //saving form
			$$("myform").getValues(), 
			function(text){  //responce
				webix.message(text);
			}
		);
	});
}
~~~

To learn more about how to send Ajax requests in Webix, read the [Ajax Operations](helpers/ajax_operations.md) article.



