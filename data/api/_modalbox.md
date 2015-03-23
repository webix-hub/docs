modalbox
========

@short:
	creates a modal box

@params:
- text	string  the box text 
- callback	function 	the callback function

@returns:
- box    HTMLElement  the modal box  

@example:
	webix.modalbox({
		title:"Custom title",
		buttons:["Yes", "No", "Maybe"],
		width:"500px",
		text:"Any html content here"
	});



@related: 
	desktop/message_boxes.md
@relatedapi: 
	api/_alert.md
    api/_confirm.md
@relatedsample:
	10_window/10_modal_box.html
@template:	api_method
@descr:

The method can be used in 2 ways:

- **Basic or short form** (contains just the box text - implicit usage of the parameter 'text'. The other parameters take default values).
- **Extended form** (contains several available parameters. Non-specified parameters take default values).

Please note, created boxes:

- Don't prevent the workflow on the application parent window

###Extended initialization

In the extended form, the method takes as a parameter an object with box parameters. The parameters are:

- **title** - (*string*) the text of the header
- **text** - (*string*) the box text
- **buttons** - (*array*) array of button labels
- **callback** - (function) contains a code that will be called when the user clicks on the button. As a parameter takes the *button index* value as the alert result status.

~~~js
webix.modalbox({
	title:"Custom title",
	buttons:["Yes", "No", "Maybe"],
	callback: function(result){
        switch(result){
        case 0: 
            //statement
            break;
        case 1:
            //statement
            break;
        ...
        }	
});
~~~


