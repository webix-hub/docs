body
=============

@short: the contents of the context popup window
	

@type: object
@example:

webix.ui({
	view:"context",
	body:{  },
	..//context config	
});

@template:	api_config
@related:	
	desktop/context.md
@relatedsample:
	03_menu/05_context_content.html
    03_menu/07_context_ui.html
@descr:

Context **body** property may contain HTML code as well as Webix components. 

1 . Context with HTML object:

~~~js
webix.ui({
				view:"context",
				body:{ 
                	content:"details" //points to the ID of the div container with content
                },
				master:"areaA"
			});
~~~
2 . Context with Webix component:


~~~js
webix.ui({
	view:"context",
	body:{
       view: "toolbar", cols:[
		 {view:"button", value:"Button1", width: 100},
		 {view:"button", value:"Button2", width: 100},
					]
	}
});
~~~

