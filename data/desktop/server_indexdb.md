Working with IndexedDB in Webix
===============================

Webix offers a simple way for efficient work with [IndexedDB](https://developer.mozilla.org/en-US/docs/IndexedDB/Using_IndexedDB) in-browser storage. 

Complying with Webix concept of [serverside proxy objects](desktop/server_proxy.md) IndexedDB support is implemented via **indexdb** proxy object that contains necessary logic for 
working the chosen in-browser database and an objectstore in it. 

Webix **indexdb** proxy object is used for: 

- getting database data and loading in into Webix **data component** ([datatable](datatable/index.md), [dataview](desktop/dataview.md), [list](desktop/list.md), [chart](desktop/chart.md));
- saving changes you perform over component data into the corresponding database. Eatch time on page refresh up-to-data data will be loaded. 

The necessary **database** and **objectstore** names are defined within the component constructor with the help of [url](api/link/datacollection_url_config.md) and [save](api/link/datacollection_save_config.md) properties:

~~~js
{
	view:"datatable",
    id:"datatable",
    url:"indexdb->mydatabase/myobjectstore"
    save:"indexdb->mydatabase/myobjectstore"
}

//or, for loading data after component init
$$("datatable").load("indexdb->mydatabase/myobjectstore");
~~~

- **Url** property as well as [load](api/link/datacollection_load.md) method defines datasource. In case of IndexedDB, datasource is defined as *database_name/objectstore_name*;
- **Save** property enables data saving into the chosen database and store defined as *database_name/objectstore_name*.

Both database name and objectstore name are **must-have** paramaters. 

Webix **data loading** pattern in described [separately](desktop/data_loading.md).

@complexity:2


