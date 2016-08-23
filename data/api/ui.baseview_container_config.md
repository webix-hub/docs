container
=============


@short:
	an HTML container (or its id) where the component should be initialized

@type: string,HTMLElement
@example:
<div id="box" style="width:320px; height:600px;"></div>
~~~
~~~js
webix.ui ({ 
	container:"box",
	view:"list", 
	...	 
});

@template:	api_config
@defined:	ui.baseview	
@relatedsample:
	05_list/01_list.html
@related: 
	tutorials/start_coding.md
    desktop/view.md
@descr:


