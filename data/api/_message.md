message
=============


@short: shows a message box
	

@params:
- text	string	the text to show

@example:
webix.message("Some message");

@template:	api_method
@descr:

Supports many skins and configurations, check [jsMessage](https://github.com/dhtmlx/message) for more details.

###Hiding a message

Message boxes can hidden using API:

~~~js
var message = webix.message("Hi!");
webix.message.hide(message);
~~~