Node templates
============================
To customize data presented in the nodes' titles you can use templates. Data template for the tree is set by property api/link/ui.tree_template_config.md.

With templates you can present almost any content in the tree: images, links, numbers, strings, dates etc.

By default, tree uses the following template for its items: 

{{snippet
Default tree template
}}
~~~js
webix.ui({
    view:"tree",
    template:"{common.icon()} {common.folder()}<span>#value#<span>"
});
~~~

It means that each item features: 

- an **expand/collapse node** icon;
- a **folder/file** icon that will automatically change depending on whether a node has children or not;
- data **value** from the datasource. 

More about Webix pattern of data interpolation you can find in the [Data templates](desktop/html_templates.md) article.

##Predefined Templates

Webix tree and treetable offers a set of predefined helpers that aid in item rendering and contain tree-specific elements like 
item icons, expand/collapse icons and checkboxes. 

- **{common.icon()}** -	'+'/'-' icons for collapsed/expanded nodes
- **{common.folder()}** - an icon of the folder or file. The folder can be closed or open depending on a node state;
- **{common.checkbox()}** - a checkbox; 
- **{common.treetable()}** - ([treetable](desktop/treetable.md) only) - a combination of common.icon() and common.folder() in one line.

All of them are the methods of a **common** object that is accessable by all of the tree items and defined within tree/treetable [Type](#changingpredefinedtemplates) mixin. 

###String definition

If you set a template by a string, you can include the tree-specific helpers via string: 

{{snippet
Specifying the template parameter as a string
}}
~~~js
webix.ui({
    view:"tree",
    template:"{common.icon()} {common.checkbox()} {common.folder()} <span>#value#</span>",
});
~~~

{{editor http://webix.com/snippet/269bd339  2-state Checkboxes}}

The tree above will render items featuring an expans-collapse icon, checkbox and file/folder icon.

###Function definition

If you set a template via a function, you can include the tree-specific helpers via functions, and they are functions in essense:

{{snippet
Specifying the template parameter as a function
}}
~~~js
webix.ui({
    view:"tree",
    template:function(obj, common){
    	return common.icon(obj, common) + common.checkbox(obj, common)
        	+common.folder(obj, common)+"<span>"+obj.value+"</span>",
    }
});
~~~

The input parameters of the helpers function are:

- **item object** with the following properties:
  - **item properties** from the dataset;
  - **helper properties** that are added to tree items during data loading and exist only on client-side to maintain tree integrity: 
  		- **$level** - (*number*) the level of nesting (one-based numbering);
  		- **$parent** - (*string*) the ID of thr item's parent;
  		- **$count** - (*number*) the number of childs;
  		- **open** - (*boolean*) defines whether the node is collapsed or expanded (only for parent nodes).
- **common** object that provides 4 functions:
  - **icon(obj, common)** - draws the '+'/'-' icons for collapsed/expanded states of nodes
  - **folder(obj, common)** - draws an icon of the folder
  - **checkbox(obj, common)** - draws a check box
  - **treetable(obj, common)** ([treetable](desktop/treetable.md) only) - combines *common.icon()* and *common.folder()* in one line.

**Benefits of function definition**

Template function add more freedom in item template definition as numerous conditions can be taken into an account. 

Let's assume, you want to show items that have the nesting level greater than 2 in italic font. In thic case you can specify the data template as in:

<img src="datatree/template_function_definition.png"/>

~~~js
webix.ui({
  view:"tree",
  template: function(obj, common){
	if (obj.$level>2) {
       return common.icon(obj,common)+common.folder(obj,common)+"<i>"+obj.value+"</i>";
	} else {
	   return common.icon(obj,common)+common.folder(obj,common)+obj.value;
    }
  }
});
~~~

{{note
You can also define additional common elements within the [component type](desktop/type.md#definingcommonelements). 
}}

##Predefined Templates: Use Cases

####{common.icon()}

<img src='datatree/templates_01.png'/>

~~~js
webix.ui({
    view:"tree",
    template:"{common.icon()} #value#"
})
~~~

####{common.folder()}

<img src='datatree/templates_02.png'/>
		
~~~js
webix.ui({
	view:"tree",
    template:"{common.folder()} #value#"
});
~~~


####{common.checkbox()}<br><br>

<img src='datatree/templates_03.png'/>

~~~js
webix.ui({
    view:"tree",
    template:"{common.checkbox()} #value#"
});
~~~
		

####{common.icon()} {common.checkbox()}

<img src='datatree/templates_04.png'/>	

~~~js
webix.ui({
    view:"tree",
    template:"{common.icon()}{common.checkbox()} #value#"
});
~~~
		

####{common.icon()}{common.folder()} or {common.treetable()}

<img src='datatree/templates_05.png'/>	

~~~js
webix.ui({
    view:"tree",
    template:"{common.icon()}{common.folder()} #value#"
});

The same for [treetable](desktop/treetable.md) can be rendered via:

webix.ui({
  view:"treetable", 
  columns:[
    { id:"value", 
      template:"{common.treetable()} #value#"
    }, 
    {...}
  ]
});
~~~

	
####{common.icon()}{common.folder()}{common.checkbox()}

<img src='datatree/templates_06.png'/>	

~~~js
webix.ui({
    view:"tree",
    template:"{common.icon()}{common.folder()}{common.checkbox()} #value#"
});
~~~


##Changing Predefined Templates

The above mentioned template methods are parts of the tree type, a set of methods used for rendering tree items. 

Tree type can be extended or altered:  

~~~js
webix.ui({
	view:"tree",
	type:{
		folder:function(obj){
			if(obj.$level == 1)
				return "<span class='webix_icon fa-folder-open'></span>";
			if (obj.$level == 2)
				return "<span class='webix_icon fa-video-camera'></span>";
		}
	}
});

webix.ui({
	view:"tree",
	type:{
		my_folder:function(obj){
			//code
		}
	}
});
~~~

{{editor http://webix.com/snippet/630448f9  Custom Type}}

If you need to apply this type to several trees, you can define the type object separately and then refer to it by its **name**: 

~~~js
webix.type(webix.ui.tree, {
   name:"awesome",
   folder:function(obj){
       //code
    }
});

var tree2 = webix.ui({
   view:"tree",
   type:"awesome",       
});
~~~

{{editor http://webix.com/snippet/630448f9  Custom Type}}

More about type implementation for data components can be found in the [Type implementation](desktop/type.md) article. 