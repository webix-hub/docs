message
=============


@short: shows a message box
	

@params:
- content	string,object	the text to show or an object with the configuration of the message

@example:
webix.message("Some message");

webix.message({
	type:"error", 
    text:"Form Data is Invalid"
});

@template:	api_method
@descr:

The possible properties of the content object are enumerated in the [Modal Message Boxes](desktop/message_boxes.md#modalmessageboxes) section.


###Hiding a message

Message boxes can be hidden using API:

~~~js
var message = webix.message("Hi!");
webix.message.hide(message);
~~~