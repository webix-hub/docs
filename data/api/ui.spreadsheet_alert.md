alert
=============


@todo:
	check 


@short:
	creates an alert box

@params:
- text		string  	the box text 
- callback	function 	the callback function

@returns:
- box    HTMLElement  the alert box  

@example:
$$("ssheet").alert("There is no undo, are you sure?", function(result){
	$$("ssheet").alert({
		title:"Custom title",
		ok:"Custom text",
		text:"Result: "+result
   	})
});



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
- **text** - (*string*) the text of the window body
- **ok** - (*string*) the text of the 'Ok' button
- **type** - (*'alert-warning' or 'alert-error'*) the alert type: warning or error
- **callback** - (function) contains a code that will be called when the user clicks on the button. As a parameter takes the *true/false* value - the alert result status


~~~js
$$("ssheet").alert({
	title: "Close",
	text: "You can't close this window!",
	type:"alert-error"
})
~~~

###Hiding an alert box

You can close an alert box using the modalbox API:

~~~js
// showing an alert box
var box = $$("ssheet").alert({...});
// hiding an alert box
$$("ssheet").modalbox.hide(box);
~~~