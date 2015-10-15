Working with Databases
========================

Webix offers a simple way for efficient work with [IndexedDB](https://developer.mozilla.org/en-US/docs/IndexedDB/Using_IndexedDB) in-browser storage. 

Complying with Webix concept of [serverside proxy objects](desktop/server_proxy.md) IndexedDB support is implemented via **indexdb** proxy object that contains necessary logic for 
creating databases as well as working with existing ones.

Webix **indexdb** proxy object is used for: 

- creating IndexedDB database in current browser and populating it with data;
- getting IndexedDB data and loading it into Webix **data components** ([datatable](datatable/index.md), [dataview](desktop/dataview.md), [list](desktop/list.md), [chart](desktop/chart.md));
- saving changes you perform over component data into the corresponding database. Each time you refresh the page up-to-data data is loaded. 

**Indexdb** proxy object features three built-in **methods**:

- **load** - loads database data from the chosen database into the component;
- **save** - saves component changes into the chosen database;
- **create** - creates an IndexedDB database with objectstore(s) and loads data to it(them). 

###Loading data from IndexedDB Store to Webix Component

To load data from an existing IndexedDB database, provide its name together with an objectstore name according to the following pattern: **indexdb->db_name/store_name**. 

Both database and objectstore names are **must-have** paramaters:

~~~js
{
	view:"datatable",
    id:"datatable",
    url:"indexdb->mydb/mycollection"
}

//or, for loading data after component init
$$("datatable").load("indexdb->mydb/mycollection");
~~~

{{sample 40_serverside/05_indexeddb/01_datatable_loading.html }}

Component's [url](api/link/datacollection_url_config.md) property as well as [load](api/link/datacollection_load.md) method define datasource. 
In case of IndexedDB, they call **load** method of an **indexdb** proxy object and pass database and objectstore names into it.

###Saving Component Data to IndexedDB Database

To save changes performed over component data, you need to pass database and objectstore names into the component's **save** property according to the following pattern: **indexdb->db_name/store_name**:

~~~js
{
	view:"datatable",
    url:"indexdb->mydb/mycollection",
    save:"indexdb->mydb/mycollection"
}
~~~

{{sample 40_serverside/05_indexeddb/02_datatable_saving.html }}

Component's [save](api/link/datacollection_save_config.md) property calls **save** method of an **indexdb** proxy object.

###Creating IndexedDB Datatase and Populating it with Data 

The **indexdb** proxy allows using its methods directly. For instance, you can call **create** method with the following code:

~~~js
webix.proxy.indexdb.create(dbname, collection_data, dbversion, callback);
~~~

Where: 

- **dbname** - name of a databases being created;
- **collection_data** - JSON object that contains **collection names** as keys and **collection data** as values;
- **dbversion** - version of the database being created. It you prefer not to bother about versons, pass *null*;
- **callback** - callback function. 

Here's an example of a function call, where *mydb* database with *mycollection* objectstore is created and data is loaded to the objectstore. 

~~~js
webix.proxy.indexdb.create("mydb", {
	mycollection:[
		{"id":1,"title":"The Shawshank Redemption ","year":"1998","votes":194865,
        	"rating":"7.5","rank":1},
		{"id":2,"title":"The Godfather","year":"1975","votes":511495,"rating":"9.2",
        	"rank":2},
		{"id":3,"title":"The Godfather: Part II","year":"1974","votes":319352,
        	"rating":"9.0","rank":3},
        {"id":4,"title":"The Good, the Bad and the Ugly","year":"1966","votes":213030,
        	"rating":"8.9","rank":4},
		{"id":5,"title":"My Fair Lady","year":"1994","votes":533848,"rating":"9.1",
        	"rank":5},
        {"id":6,"title":"12 Angry Men","year":"1957","votes":164558,"rating":"8.9",
        	"rank":6}
	],
    //mycollection2:[data], //as many stores as you like
    //mycollection2:[data]
}, null, init_demo);
~~~

{{sample 40_serverside/05_indexeddb/01_datatable_loading.html }}

Webix **data loading** pattern in described [separately](desktop/data_loading.md).

@complexity:2

