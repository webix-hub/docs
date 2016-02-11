Treetable
===============

##API Reference

- [Methods, properties and events](api__refs__ui.treetable.html)
- [Samples](http://docs.webix.com/samples/15_datatable/index.html)


##Overview

Ui-related treetable inherits from [view](desktop/view.md). Being a hybrid between [DataTable](datatable/index.md) and [tree](datatree/index.md) it 
shares a number of their properties and methods. 


<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/treetable.png"/>


##Initialization

{{note
Note that you need to set **{common.treetable()}** template for a column that should display the tree. Otherwise, you'll get standard datatable. 
}}

~~~js
webix.ui({
	view:"treetable",
	columns:[
		{ id:"id",	header:"", width:50},
		{ id:"value", header:"Film title", template:"{common.treetable()} #value#"},
		{ id:"chapter",	header:"Mode",	width:200}
	],
    data: "..." //dataset, variable or path
})
~~~
{{editor http://webix.com/snippet/64c98c22	Basic initialization}}

Tree table is populated with hierarchical data coming in <acronym title="Extensible Markup Language">XML</acronym> and <acronym title="JavaScript Object 
Notation">JSON</acronym> [data formats](desktop/data_types.md). IDs of the coulmns must coincide with data keys from the initial dataset

##Working with Treetable

Common tasks here include the following and coincide with those of the [datatable](datatable/index.md) and [tree](datatree/index.md): 

1 . [Data Loading](desktop/data_loading.md) including [Dynamic Loading](datatree/dynamic_loading.md) of large datasets in portions by scrolling and branches opening;

{{editor http://webix.com/snippet/dd8fdb38	Static and dynamic loading}}

2 . [Filtering](datatable/filtering.md) - built-in and custom filtering in various [filter modes](api/ui.datatable_filtermode_config.md);

{{editor http://webix.com/snippet/f20a7fa1	Filtering in TreeTable}}

3 . [Selection](datatable/selection.md) by cells, row and columns in multiselect and blockselect modes;

{{editor http://webix.com/snippet/325677f0	Selecting items in TreeTable}}

4 . [Item Editing](desktop/edit.md) by click or dblclick or any custom action;

{{editor http://webix.com/snippet/0dea9702	Editing data in TreeTable}}

5 . [Using Math in Treetable](datatable/formulas.md) - built-in logic for storing data as mathematic formulas as well as editing these formulas directly in treetable.

{{editor http://webix.com/snippet/1e1dcfa0	Using formulas}}

6 . [Data Grouping](desktop/grouping.md) - built-in logic for preseting hierarchical data in a tree-like manner;

{{editor http://webix.com/snippet/6905925c	Aggregating data while grouping}}

7 . [Data Export to Excel and PNG](datatable/export.md)

{{editor http://webix.com/snippet/5553a90c	Export to Excel}}

8 . [Copy-Paste Operations](datatable/copying.md)

{{editor http://webix.com/snippet/a389f7e8	Different copy-paste modes}}


##Related Articles
- desktop/data_object.md
- [Adding Active Elements to Nodes](desktop/active_content.md)
- [Tree](datatree/index.md)
- datatree/node_templates.md
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [Treetable CSS Image Map](desktop/treetable_css.md)