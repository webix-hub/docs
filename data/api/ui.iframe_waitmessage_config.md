waitMessage
=============


@short:
	defines whether the loading cover should be displayed while loading (actual in case of 'src' parameter)

@type: bool
@example:
webix.ui({
	view:"iframe", 
    src:"http://webix.com/", 
    waitMessage:true 
});

@template:	api_config
@defined:	ui.iframe	
@relatedapi:
	api/refs/overlaybox.md
@related:
	desktop/iframe.md
@relatedsample:
	98_docs/iframe.html
@descr:
With data-containing component you can define an **Overlay Box** with a custom wait message. 

- with prebuilt fucntionality (datatable only) {{sample 15_datatable/01_loading/05_load_message.html}}
- as extended functionality (dataview, list, etc.) {{sample 05_list/07_empty_list.html}}
 
 


