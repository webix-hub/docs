Styling
=========================
You can use CSS in conjunction with Tree nodes to archieve the desired look-and-feel.

In this article you will know how: 

- to fine-tune the style of [a whole tree](#awholetree) or [specific nodes](#specificnodes).
- to [add tree lines](#addinglines).
- [apply templates](#templates).


Styling a whole tree
------------------------
To apply some style to a whole tree you can use the api/link/ui.tree_css_config.md parameter. 

<img src="datatree/styling_whole_tree.png"/>
~~~html
<style>
    .my_style  {
        font-style: italic;
        color:blue;
    }
</style>
 
<script>
	webix.ui({
   		view:"tree",
    	css:"my_style",
    	...
	})
</script>
~~~


Styling specific nodes
--------------------------
Generally, to style a specific item you can use the **css** attribute inside the data source.

<img src="datatree/styling_specific_items.png"/>

~~~js
<style>
    .my_style{
        background-color:#FFAAAA;
    }
</style>
 
<script>
grid = new webix.ui({
        view:"tree",
        data: [
        	{id:"root", value:"Films data", open:true, data:[
        		{ id:"1", open:true, value:"The Shawshank Redemption", data:[
        			{ id:"1.1", value:"Part 1" },
        			{ id:"1.2", value:"Part 2", $css:"my_style" },
        			{ id:"1.3", value:"Part 3" }
        		]},
        		{ id:"2", value:"The Godfather", open:true, data:[
        			{ id:"2.1", value:"Part 1" },
        			{ id:"2.2", value:"Part 2", $css:"my_style" }
        		]}
        	]}
        ],

...
}); 
</script>
~~~


Adding lines
------------------
To add lines to tree nodes, set the api/link/ui.tree_type_config.md parameter to the '*lineTree*' value.

<img src="datatree/styling_tree_lines.png"/>

{{snippet
	Adding lines to tree nodes
}}
~~~js
tree = new webix.ui({
	view:"tree",
    ...
	type:"lineTree"
});
~~~

{{sample
	17_datatree/03_styles/01_treelines.html
}}

*Note, you still have a possibility to define your custom style for lines and apply it through the api/link/ui.tree_css_config.md parameter (see details in the [first part](#awholetree)).*


Templates
-------------------------------------
One of ways to fine-tune the style of the tree is define some template for it.

<img src="datatree/styling_templates.png"/>

{{snippet
	Using templates for styling
}}
~~~js
tree = new webix.ui({
	view:"tree",
    ...
	template:"{common.icon()}{common.folder()}<div style='color:blue;'>#value#</div>"
});
~~~


Read more about using templates in chapter datatree/node_templates.md.

Custom Folder and Files Icons
---------------------------------

The look-and-feel of tree icons is set via **CSS classes** applied to **definite parts** of it and you can change it in the same way by:

- **redefining existing webix CSS classes**. It changes icons for all tree nodes;
- **setting specific icons** to **select tree nodes**. For these needs, icons are stored in the dataset and applied via
	- custom CSS classes;
    - node templates.

Study [Tree CSS image map](desktop/datatree_css.md) to learn how classes are distributed. There you'll find that folder and file feature the followinf CSS: 

- **webix_tree_folder** - applied to folders in a close state;
- **webix_tree_folder_open** - applied to folders in the open state;
- **webix_tree_file** - applied to files (elements with no children).

The simplest way to change folder and file icons for all tree nodes is to **redefine default** ones setting new **background image** and **position**: 

~~~js
//customizing all folders and files in a tree
.webix_tree_folder{
				background-image: url(icons/folder.png);
				background-position: 0px 4px;
			}
.webix_tree_file{
				background-image: url(icons/file.png);
				background-position: 0px 4px;
			}
~~~

<img src="desktop/custom_tree_folders.png"/>

{{sample 17_datatree/03_styles/07_custom_folders.html}}

To set icons to **select tree nodes**, you should store their titles in the data source: 

- Stored as **icons** in the dataset, such pictograms are applied  as CSS class:

~~~js
var data_with_icon = [
	{ id:"root", value:"Films data", icon:"home", open:true, data:[
		{ id:"1", icon:"puzzle", value:"Part 1" }]
	}
];
....
//root icon CSS
.webix_tree_home{
				background-image: url(icons/home.png)
			}
~~~

- Stored as **images**, such pictogramms are applied within [node templates](datatree/node_templates.md): 

~~~js
var data_with_icon = [
	{ id:"root", value:"Films data", image:"home", open:true, data:[
		{ id:"1.1", image:"puzzle", value:"Part 1" }]
	}
];

... 
webix.ui({
	view:"tree",
	template:"{common.icon()} <img src='icons/#image#.png' 
    			style='float:left; margin:3px 4px 0px 1px;'> #value#"
});
~~~

**Template** includes: 
- default (or redefined) folders folder and file icons (*common.icon(), common.folder()*);
- image with its own styling (< img src="" style="" >);
- value to display  - #value#.

Image styling defines custom folder position: 

~~~js
//left alignment
<img src='icons/#image#.png' style='float:left;'>
                
//right alignment
<img src='icons/#image#.png' style='float:right;'>           
~~~

<img src="desktop/tree_custom_images.png"/>

{{sample 17_datatree/03_styles/05_custom_icons.html}}

**Complex templates** can be also used here, e.g. to define a custom icon only to files (nodes without children):

~~~js
webix.ui({
  view:"tree",
  template:function(obj, com){
	var icon = obj.$count ? com.folder(obj, com) : 
    ("<img src='icons/"+obj.image+".png' style='float:left; margin:3px 4px 0px 1px;'>");
	return com.icon(obj, com) + icon + obj.value;}
});
~~~
