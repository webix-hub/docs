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
{{sample 15_datatable/30_treetable/01_init.html }}

Tree table is populated with hierarchical data coming in <acronym title="Extensible Markup Language">XML</acronym> and <acronym title="JavaScript Object 
Notation">JSON</acronym> [data formats](desktop/data_types.md). IDs of the coulmns must coincide with data keys from the initial dataset

##Working with Treetable

Common tasks here include the following and coincide with those of the [datatable](datatable/index.md) and [tree](datatree/index.md): 

1 . [Data Loading](desktop/data_loading.md) including [Dynamic Loading](datatree/dynamic_loading.md) of large datasets inportions;

{{sample 15_datatable/30_treetable/02_dyn_loading.html}}

2 . [Filtering](datatable/filtering.md) - built-in and custom filtering in various [filter modes](api/ui.datatable_filtermode_config.md);

{{sample 15_datatable/30_treetable/04_filter.html }}

3 . [Selection](datatable/selection.md) by cells, row and columns in multiselect and blockselect modes;

{{sample 15_datatable/30_treetable/06_selection.html }}

4 . [Item Editing](desktop/edit.md) by click or dblclick or any custom action;

{{sample 15_datatable/30_treetable/08_edit.html }}

5 . [Using Math in Treetable](datatable/formulas.md) - built-in logic for storing data as mathematic formulas as well as editing these formulas directly in treetable.

{{sample 15_datatable/08_math/01_basic.html}}

6 . [Data Grouping](desktop/grouping.md) - built-in logic for preseting hierarchical data in a tree-like manner;

{{sample 15_datatable/32_grouping/03_aggregation.html}}

7 . [Data Export to Excel and PNG](datatable/export.md)

{{sample 15_datatable/10_export/01_excel.html }}

8 . [Copy-Paste Operations](datatable/copying.md)

{{sample 15_datatable/30_treetable/13_copypaste.html }}


##Related Articles
- desktop/data_object.md
- [Adding Active Elements to Nodes](desktop/active_content.md)
- [Tree](datatree/index.md)
- datatree/node_templates.md
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [Treetable CSS Image Map](desktop/treetable_css.md)