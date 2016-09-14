confirm
=============

@short:
	creates a confirm box

@params:
- text	string  the box text 
- callback	function 	the callback function

@returns:
- box    HTMLElement  the confirm box  

@example:
webix.confirm("Test confirm", function(result){
	webix.confirm({
		title:"Custom title",
		ok:"Yes", 
        cancel:"No",
		text:"Result: "+result,
	});
});


@related: 
	desktop/message_boxes.md
@relatedapi: 
	api/_alert.md
@relatedsample:
	10_window/04_confirm.html
@template:	api_method
@descr:

The method can be used in 2 ways:

- **Basic or short form** (contains just the box text - implicit usage of the parameter 'text'. The other parameters take default values).
- **Extended form** (contains several available parameters. Non-specified parameters take default values).

Please note, created boxes:

- Don't prevent the workflow on the application parent window.
- Exist in the only copy (when a new window appears - the previous one disappears).

###Extended initialization

In the extended form, the method takes as a parameter an object with box parameters. The parameters are:

- **title** - (*string*) the text of the header
- **text** - (*string*) the box text
- **ok** - (*string*) the text of the 'Ok' button
- **cancel** - (*string*) the text of the 'Cancel' button
- **type** - (*'confirm-warning' or 'confirm-error'*) the confirm type: warning or error
- **callback** - (function) contains a code that will be called when the user clicks on the button. As a parameter takes the *true/false* value - the alert result status


~~~js
webix.confirm({
	title: "Close",
	text: "You can't close this window!",
	type:"confirm-error"
})
~~~

###Hiding a confirm box

You can close a confirm box using the modalbox API:

~~~js
// showing a confirm box
var box = webix.confirm({...});
// hiding a confirm box
webix.modalbox.hide(box);
~~~
