getHead
=============

@short:
	gets the ui view of the window header

@returns:
- view	object	the window header object

@example:
win = webix.ui({
  view:"window",
  head:"My text",
  body:"My content", 
}).show();

win.getHead().setHTML("New text");

@template:	api_method

@related: 
	desktop/window.md
    desktop/popup.md
@relatedapi:
	api/ui.window_head_config.md
@defined:	ui.window	
@descr:

The method returns the object of a Webix component that currently builds window head, so you can use its API to modify the window head. 

If [head](api/ui.window_head_config.md) is defined via a string, then [Webix template](api/refs/ui.template.md) is used.  
To change template text dynamically, [setHTML](api/ui.template_sethtml.md) method is applied. 






