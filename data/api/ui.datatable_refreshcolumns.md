refreshColumns
=============

@short:
      refreshes the structure of DataTable
      
@params: 
* config	array	array with new configurations for the columns
* reset		boolean		if true, shows columns hidden by user before (false by default)

@example:
dtable.refreshColumns();


@template:	api_method
@descr:

When used without an argument, the method **redraws** currect grid structure. 

You can use this method to refresh structure of datatable after modifying some properties of **columns** collection. 

~~~js
dtable.config.columns[2].id = "newPrice";
dtable.config.columns[2].width = 500;
dtable.refreshColumns();
~~~

Or, with **new config** provided, set a completely different columns. 

~~~js
var config = [
	{id:"col1", header:"First Name", width:150}, 
    {id:"col2", header:"Last Name", width:150}
];

dtable.refreshColumns(config);
~~~


@relatedapi:
	api/link/ui.datatable_refresh.md
    api/ui.datatable_refreshheadercontent.md
@related:
	datatable/sizing.md






@seolinktop: [javascript website framework](https://webix.com)
@seolink: [javascript data grid](https://webix.com/widget/datatable/)