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
  - **<i>id</i>** - (*string*) the item id
  - **<i>value</i>** - (*string*) the item value
  - **<i>$level</i>** - (*number*) the level of nesting (one-based numbering)
  - **<i>parent</i>** - (*string*) the id of thr item's parent
  - **<i>$count</i>** - (*number*) the number of childs
  - **<i>open</i>** - (*boolean*) defines whether the node is collapsed or expanded (just for parent nodes)
- **common** object that provides 3 functions:
  - **<i>icon(obj, common)</i>** - draws the '+'/'-' icons for collapsed/expanded states of nodes
  - **<i>folder(obj, common)</i>** - draws an icon of the folder
  - **<i>checkbox(obj, common)</i>** - draws a check box



Let's assume, you want to show items that have the nesting level greater than 2 in italic font. In thic case you can specify the data template as in:

{{snippet
Specifying the **template** parameter as a function
}}
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template: function(obj, common){
		if (obj.$level>2) {
        	return common.icon(obj,common)+common.folder(obj,common)+"<i>"+obj.value+"</i>";
		} else {
			return  common.icon(obj,common)+common.folder(obj,common)+obj.value;
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

<table class="list">
	<caption class="caption">
		<strong>Table 2 </strong>
		Using predefined templates
	</caption>
	<thead>
	<tr>
		<th>
			Predefined template
		</th>
		<th>
			Usage example
		</th>
		<th>
			Related tree
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
    	<td><i>{common.icon()}</i></td>
		<td>
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()} #value#"
})
~~~
		</td>
        <td><img src='datatree/templates_01.png'/></td>
	</tr>
	<tr>
    	<td><i>{common.folder()}</i></td>
		<td> 
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.folder()} #value#"
})
~~~
		</td>
        <td><img src='datatree/templates_02.png'/></td>
	</tr>
	<tr>
    	<td><i>{common.checkbox()}</i></td>
		<td>
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.checkbox()} #value#"
})
~~~
		</td>
        <td><img src='datatree/templates_03.png'/></td>
	</tr>
    <tr>
    	<td><i>{common.icon()}<br>{common.checkbox()}</i></td>
		<td>
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()}
    {common.checkbox()} #value#"
})
~~~
		</td>
        <td><img src='datatree/templates_04.png'/></td>
	</tr>
    <tr>
    	<td><i>{common.icon()}<br>{common.folder()}</i></td>
		<td>
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()}
    {common.folder()} #value#"
})
~~~
		</td>
        <td><img src='datatree/templates_05.png'/></td>
	</tr>
    <tr>
    	<td><i>{common.icon()}<br>{common.folder()}<br>{common.checkbox()}</i></td>
		<td>
~~~js
tree = new webix.ui({
    view:"tree",
    ...
    template:"{common.icon()}{common.folder()}
    {common.checkbox()} #value#"
})
~~~
		</td>
        <td><img src='datatree/templates_06.png'/></td>
	</tr>
	</tbody>
</table>