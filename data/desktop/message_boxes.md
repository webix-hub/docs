Creating Message Boxes
===============

Webix UI library helps the app communicate with users with the help of messages that can warn about error, log events, display variable values, etc.  

##Info Message Box

Basic message is created with the help of **webix.message()** function that has message text as parameter (short form). 

~~~js
webix.message("All is correct");
~~~

Such message is displayed in the top right corner of the window and doesn't prevent the work of the parent app while modal message boxes (described later) do.

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Message boxes
	</caption>
	<thead>
	<tr>
		<th>
			Message
		</th>
		<th>
			Image
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Default </td>
		<td><img src="desktop/default_message.png"/></td>
	</tr>
	<tr>
		<td>Error (type:'error')</td>
		<td><img src="desktop/error_message.png"/></td>
	</tr>
	</tbody>
</table>

{{sample 13_form/04_validation/02_complex_rule.html }}

**Message Types**

As seen above, message boxes can be of two types:

- **default** (white background);
- **error** (red background).

The latter has **type** argument in addition to message **text** and features an **extended form** of initialization: 

~~~js
webix.message({type:"error", text:"Form Data is Invalid"});
~~~

**Expire Interval**

By default webix message disappears either on mouse clicking somewhere outside it, or in 4000 milliseconds after appearing.

To change the expire interval or cancel it - use the **expire** parameter:

~~~js
webix.message({
	type:"error", 
    text:"Form Data is Invalid",
    expire:10000
    //expire:-1   for cancelling expire period
})
~~~

If you cancel expire period, such message will disappear only on mouse click.

Message boxes can as well be hidden **programmatically**:

~~~js
var message = webix.message("Hi!");
webix.message.hide(message);
~~~

##Modal Message Boxes

**Message boxes** resemble ui-related modal [Window](desktop/window.md) yet they are initialized in a completely another way. They prevent the workflow on the parent app until 
you perform actions required by them ( button clicking, as a rule). Message boxes close on a button click and callback function, if any, is executed.

Message boxes contain some text and an "OK" button. There exist three types of modal message boxes:

- [webix.alert()](#alert) - alert box with a button
- [webix.confirm()](#confirm) - confirmation box with two button to agree or cancel. 
- [webix.modalbox()](#modal) - a modal message box with as many buttons as you like. 

The boxes share some common properties, namely:

- **title** - text of the header;
- **ok** - text of the "ok" button;
- **cancel** - text of the "cancel button" (only for a confirmation box);
- **text** - text of the window body; 
- **callback** - function that is executed on button click. Callback function may include another message box which contents depends on your choice in the previous step.
- **type** - type of the button (warning or error).

The callback function takes **result** of user communication with a message box as parameter. It can be:

- **boolean true** - each time you press its **"OK"**, *true* is passed to the box callback. It's the only possible value for aler box as it feature an "OK" button only;
- **boolean false** - each time you press **"Cancel"**, *false* is passed to the callback. Works for confirm box;
- **Button index** - true for a modal box. Stored the index of a clicked button (zero-based numbering).

Result is used in callback function that defines further actions according to its value (*true* or *false*). 

At the same time, callback can be set not depending on the result, as a fucntion to be executed on button click.

##Initialization

###webix.alert {#alert}

<img src="desktop/alert_box.png"/>

The text of its only button is defined as value of **ok** parameter. Passing result into callback is optional. 

{{snippet
Short form
}}
~~~js
//the shortest form
webix.alert("Text");

//short form with callback
webix.alert("Test alert", function(result){....});
~~~

{{snippet
Long Form
}}
~~~js
webix.alert({
	title:"Custom title",
	ok:"Custom text",
    type:"alert-warning",
	text:"Warning",
	callback:function(){...}
});
~~~

{{sample 10_window/03_alert.html }}

###webix.confirm {#confirm}

<img src="desktop/confirm_box.png"/>

Confirm message boxes contain two buttons - "ok" and "cancel", which text is defined in the same-name properties. 

~~~js
webix.confirm({
	title:"Custom title",
	ok:"Yes", 
    cancel:"No",
    type:"confirm-error",
	text:"Test confirm",
    callback:function(result){ //setting callback
    	webix.alert({
        	title:"Your Choice",
            text:"Result" +result //using callback
        });
   }
});
~~~

{{sample 10_window/04_confirm.html }}

##Modal Box {#modal}

<img src="desktop/modalbox.png"/>

Webix modalbox resembles alert and confirm in its modality, yet features several peculiarities: 

- its **text** can include any **HTML** content;
- it may contain as many button as you wish defined in **buttons** array that contains text values for each one;
- the **callback** takes the **index** of the chosen button as parameter;
- it can be **sized** with width and height parameters.

~~~js
webix.modalbox({
	title:"Custom title",
	buttons:["Yes", "No", "Maybe"],
	text:"Any html content here",
    width: "500px",
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
    }
});
~~~

{{sample 10_window/10_modal_box.html}}

##Modal Windows and Keyboard Interaction

Keyboard functionality for modax boxes is controlled by **webix.message.keyboard** property that is initially true. 

By default modal boxes block keyboard events of the page. Users can use only the following keys that set modal box value and close it: 

- **"space"** and **"enter"** for setting **true** value as modal box result;
- **"escape"** for setting **false** value as modal box result.

To disable above mentioned keys and enable standard keyboard events you should set **keyboard** property to false:

~~~js
webix.message.keyboard = false; 
webix.modalbox({...})
~~~

From now on, user gets a possibility to use full keyboard, for instance, for typing values into inputs inside modal boxes. 


@complexity:2