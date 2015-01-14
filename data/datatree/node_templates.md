Nodes templates
============================
To customize data presented in the nodes' titles you can use templates. Data template for the tree is set by property api/link/ui.tree_template_config.md .

String templates
----------------------

With templates you can present almost any content in the tree: images, links, numbers, strings, dates etc.

{{snippet
Setting template for tree items
}}
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"<strong>#value#</strong>"
});
~~~

<table class="list">
	<caption class="caption">
		<strong>Table 1 </strong>
		Templates for different types of content
	</caption>
	<thead>
	<tr>
		<th>
			Content
		</th>
		<th>
			Example of template
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>strings</td>
		<td>
~~~html
template:"<strong>#value#</strong>"
~~~
		</td>
	</tr>
	<tr>
		<td>images</td>
		<td> 
~~~html
template:"<img src='.imgs/#value#.jpg'/>"
~~~
		</td>
	</tr>
	<tr>
		<td>links</td>
		<td>
~~~html
template:"<a href='http://google.com?q=#value#'>#value#</a>"
~~~
		</td>
	</tr>
	</tbody>
</table>

Complex templates
------------------------------------

###Function definition


You can set the template as a function.

The function accepts 2 parameters and should return the result string.<br>
The function input parameters are:

- **item object** with the following properties:
  - **item properties** from the dataset;
  - **$level** - (*number*) the level of nesting (one-based numbering)
  - **parent** - (*string*) the id of thr item's parent
  - **$count** - (*number*) the number of childs
  - **open** - (*boolean*) defines whether the node is collapsed or expanded (just for parent nodes)
- **common** object that provides 4 functions:
  - **icon(obj, common)** - draws the '+'/'-' icons for collapsed/expanded states of nodes
  - **older(obj, common)** - draws an icon of the folder
  - **checkbox(obj, common)** - draws a check box
  - **treetable(obj, common)** ([treetable](desktop/treetable.md) only) - combines *common.icon()* and *common.folder()* in one line.



Let's assume, you want to show items that have the nesting level greater than 2 in italic font. In thic case you can specify the data template as in:

{{snippet
Specifying the template parameter as a function
}}
~~~js
tree = new webix.ui({
  view:"tree",
  ...
  template: function(obj, common){
	if (obj.$level>2) {
       return common.icon(obj,common)+common.folder(obj,common)+"<i>"+obj.value+"</i>";
	} else {
	   return common.icon(obj,common)+common.folder(obj,common)+obj.value;
    }
  }
});
~~~

<img src="datatree/template_function_definition.png"/>


Predefined templates
------------------------------------
Tree provides a set of ready-to-use template solutions, which are:

- **{common.icon()}** -	'+'/'-' icons for collapsed/expanded nodes
- **{common.folder()}** -   an icon of the folder 
- **{common.checkbox()}** - a check box
- **{common.treetable()}** - ([treetable](desktop/treetable.md) only) - a combination of common.icon() and common.folder() in one line.

{{note
You can also define additional common elements within the [component type](desktop/type.md#definingcommonelements). 
}}

###Using predefined templates

####{common.icon()}<br><br>

~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()} #value#"
})
~~~
		
<img src='datatree/templates_01.png'/>


####{common.folder()}<br><br>
		
~~~js
tree = new webix.ui({
	view:"tree",
    ...
    template:"{common.folder()} #value#"
})
~~~

<img src='datatree/templates_02.png'/>


####{common.checkbox()}<br><br>

~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.checkbox()} #value#"
})
~~~
		
<img src='datatree/templates_03.png'/>

####{common.icon()}<br>{common.checkbox()}<br><br>
		
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()}{common.checkbox()} #value#"
})
~~~
		
<img src='datatree/templates_04.png'/>

####{common.icon()}<br>{common.folder()}<br><br>
		
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()}{common.folder()} #value#"
})

//or, for treetable it's possible
treetable = new webix.ui({
  view:"treetable", 
  columns:[
    { id:"value", 
      template:"{common.treetable()} #value#"
    }, 
    {...}
  ]
});
~~~

<img src='datatree/templates_05.png'/>
	
####{common.icon()}<br>{common.folder()}<br>{common.checkbox()}<br><br>
		
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()}{common.folder()}{common.checkbox()} #value#"
})
~~~

<img src='datatree/templates_06.png'/>
	