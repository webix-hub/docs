setContext
=============

@short:
allows settings master properties: view object and item id

@params:
- context	object		context object 

@example:
menu.setContext({obj: $$("list"), id: "itemId"})

@template:	api_method

@relatedapi:
	api/contexthelper_getcontext.md

@related:
	desktop/context.md
    desktop/contextmenu.md
    
@descr:   

Target context object includes:

- obj - (object) master view object for which context or contextmenu is defined
- id - (string/number) id of an item in the master view

    
The object can be retrieved by the api/contexthelper_getcontext.md method.