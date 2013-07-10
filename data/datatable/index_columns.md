Creating Index Columns
=======================================
In this chapter you will learn how to create index columns in DataTable. 

There are 2 types of index columns:

- [Static](#staticindexcolumns) (rows indices aren't changed whether you move, delete rows etc.)
- [Dynamic](#dynamicindexcolumns) (rows indices can vary depending on the current position of rows)  


Static index columns
-----------------------------
To create a static index column in your datatable, use the following technique:

<img src="desktop/static_index_columns.png"/>

{{snippet
	Specifying static index column in DataTable
}}
~~~js
dtable = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"index",   header:"",           sort:"int"},
		{ id:"title",	header:"Film title", sort:"string"},
        { id:"year",	header:"Year",       sort:"int"}
	],
	scheme:{
		$init:function(obj){ obj.index = this.count(); }
	},
    ...
});	
~~~
{{sample
	15_datatable/09_columns/05_index_column.html
}}

<br>

Let's consider what we do in the code above:

1. In the api/ui.datatable_columns_config.md parameter we assign an individual column to serve as the index entry.
2. Then, we specify the api/link/ui.datatable_scheme_config.md property with the **$init** key inside. 
The **$init** key runs when data is being loaded to the component initially and when data is being reloaded for new elements. The key is called for each data item, 
that's why we can use it as an iterator to assign indices to rows.<br> Read more about the key in the related article  - <a href="desktop/data_scheme.md#initkey">'Defining Data Scheme. $init key'</a>.


Dynamic index columns
-----------------------------
To create a dynamic index column in your datatable, use the following technique:

<img src="desktop/dynamic_index_columns.png"/>

{{snippet
	Specifying dynamic index column in DataTable
}}
~~~js
dtable = new webix.ui({
	view:"datatable",
    id:"mytable",
	columns:[
		{ id:"index",   header:"",           sort:"int"},
		{ id:"title",	header:"Film title", sort:"string"},
        { id:"year",	header:"Year",       sort:"int"}
	],
	on:{
		"data->onStoreUpdated":function(){
			this.data.each(function(obj, i){
				obj.index = i+1;
			})
		}
	},
    ...
});	
~~~
{{sample
	15_datatable/09_columns/05_index_column.html
}}

<br>

Let's consider what we do in the code above:

1. In the api/ui.datatable_columns_config.md parameter we assign an individual column to serve as the index entry.
2. With the api/link/ui.datatable_on_config.md parameter we attach a handler to the api/datastore_onstoreload_event.md event.<br>
*"data->onStoreUpdated"*  is equal to *$$('mytable').data.attachEvent('onStoreUpdated', function(){...})*
3. The api/datastore_onstoreload_event.md event fires after data is changed in the data store.
4. The api/datastore_each.md method allows us to iterate through the collection of data items.
