getInputNode
=============



@short:
	gets the HTML element related to the component

@returns:
- node	element	the component HTML element
	

@example:
webix.ui({
	container:"box",
	view:"form", 
    elements:[
		{ view:"text",   id:"f1", label:"Email"},
		{ view:"text",   id:"f2", label:"Password", type:'password' },
		{ view:"button", id:"b1", value:"Login",  type:"form" }
    ]
});

$$("b1").getInputNode();//-> <input type="button" style="height:27px; width:149px" value="Login">

@template:	api_method

@related:
	desktop/view.md

@defined:	ui.button	
@descr:

Dimension you get equal to library defauls defined for a standard button. They can be as well set in JS object:

~~~js
{ view:"button", id:"b1", value:"Login",  type:"form", width: 300, height: 50 }
~~~


