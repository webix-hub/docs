removeHotKey
=============



@short: removes the hot key handler
	

@params:
- key         string          string with the key name
* handler     function            the hot key handler
* obj         object             if provided, the handler will fire only when focus is in the target view

	

@example:

//removes ALL
webix.UIManager.removeHotKey("up");

//removes One
webix.UIManager.removeHotKey("up", my_function);

//removes One for specific view
webix.UIManager.removeHotKey("up", null, $$("button"));

@template:	api_method
@descr:


