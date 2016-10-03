addHotKey
=============



@short: adds the hot key handler
	

@params:
- key         string          string with the key name
- handler     function            the hot key handler
* obj         object             if provided, the handler will fire only when focus is in the target view

	

@example:

//global key handler
webix.UIManager.addHotKey("up", my_function);

//activates the handler only when focus is inside of myview
webix.UIManager.addHotKey("ctrl-up", my_function, myview);

@template:	api_method
@descr:

@related:
desktop/uimanager.md#attachingcustomhotkeys
