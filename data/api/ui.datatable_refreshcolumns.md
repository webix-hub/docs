refreshColumns
=============

@short:
      refreshes the structure of DataTable

@example:
dtable.refreshColumns();


@template:	api_method
@descr:

You can use this method to refresh structure of DataTable after modifying some properties of "columns" collection. 

~~~js
dtable.config.columns[2].id = "newPrice";
dtable.config.columns[2].width = 500;
dtable.refreshColumns();
~~~


@relatedapi:
	api/link/ui.datatable_refresh.md
    api/ui.datatable_refreshheadercontent.md
@related:
	datatable/sizing.md




