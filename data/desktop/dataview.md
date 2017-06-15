DataView
=============

##API Reference

- [Methods, Properties and Events](api/refs/ui.dataview.md)
- [Samples](http://docs.webix.com/samples/06_dataview/index.html)

##Overview

DataView displays objects with data according to a predefined template. It inherits from [view](desktop/view.md). 

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/dataview.png"/>


##Initialization

Specify the component's ID if you are going to work with the DataView later. Optionally, you can place DataView into an HTML container.

~~~js
webix.ui({
	view:"dataview",
	container:"dataA",
	template:"<div class='webix_strong'>#title#</div> Year: #year#, rank: #rank#",
	data:...,
	datatype:"...",
	xCount:3, //the number of items in a row
	yCount:4 //the number of items in a column
});
~~~

{{sample 06_dataview/01_initialization/01_init.html }}

**Data** property defines data source for the view. Data can be loaded in one of [supported data types](desktop/data_types.md). 

##Working with DataView

- [Data Loading](desktop/data_loading.md)
- [Defining Data Templates](desktop/html_templates.md)
- [Selection](desktop/selection.md)
- [Adding/Deleting Items](desktop/add_delete.md)
- [Editing Data](desktop/edit.md)
- [Paging](desktop/paging.md) 
- [Adding Active Elements to DataView Items](desktop/active_content.md)
- desktop/export_png.md
- desktop/data_components_export.md

{{note
Note that there's a built-in possibility to edit data with DataView. You should create a prototype *dataview-edit* object beforehand.
}}



##Related Articles

- desktop/data_object.md
- [Setting Dimensions for the Components](desktop/dimensions.md)
- [Dynamic Resizing and Adjustment](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [DataView CSS Image Map](desktop/dataview_css.md)



@seolinktop: [web ui framework](https://webix.com)
@seolink: [dataview ui](https://webix.com/widget/dataview/)

@metadescr:  DataView displays objects with data according to a predefined template. It inherits from view desktop view . Initialization Specify the component s ID if you are going to