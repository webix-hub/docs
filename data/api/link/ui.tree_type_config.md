@link: api/renderstack_type_config.md

@example:

list = webix.ui({
	view:"tree",
	...
	type:{
		template:"{common.icon()} {common.folder()}<span>#value#</span>",
	}
})

@descr:

###Attributes of the type as object:

- **css** - (*string*) the name of a css class that will be applied to component's items (the default name of the applied class is 'default').
- **template** - (*function, string*) an html template that will define item presentation in the component.

###Built-in named types: 

- **lineTree** - adds vertical lines to the tree presentation.

~~~js
webix.ui({
	view:"tree",
    type:"lineTree"
});
~~~

{{sample 17_datatree/03_styles/01_treelines.html }}

###Built-in type methods

The following methods are used in the tree template: 

- **space**
- **icon**
- **checkbox**
- **folder**

~~~js
webix.ui({
   view:"tree",	
   template:"{common.icon()} {common.checkbox()} {common.folder()}"+
		"<span>#value#</span>", 
});	
~~~

{{sample 17_datatree/02_checkbox/01_basic.html}} 

More information on this topic can be found in the dedicated 
[documentation article](datatree/node_templates.md#predefinedtemplates). 






@seolinktop: [javascript website framework](https://webix.com)
@seolink: [tree ui](https://webix.com/widget/tree/)