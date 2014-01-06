Data Binding and Syncing with Non-UI Objects
===============

The webix library contains three invisible yet meaningful elements. They have no graphic representation yet can store data in them. 

- **DataValue** - stores a single value like any input control ([text](desktop/controls.md#text), [button](desktop/controls.md#button), [label](desktop/controls.md#label));
- **DataRecord** - stores a single record like [form](desktop/form.md) and [htmlform](desktop/htmlform.md);
- **DataCollection** - stores a collection of records the same way it goes with all the data-presenting components([list](desktop/list.md), [dataview](desktop/dataview.md), [datatable](datatable/index.md)). 

Like its "visible" siblings, the components can store data and have the same API. They feature the same properties and take the same methods, including **bind()** and **sync()**. 

When can they be useful?

##DataCollection Usage

Non-ui components store some info you'd like to use later in visible components. For instance, in the DataCollection you can specify the needed dataset and later on, sync all the
data-presenting components with it so that they all are fed with the same data. 

~~~js
var data = new webix.DataCollection({ 
	template:"#rank#. #title# - #year#",
	data:big_film_set //the datasource
});
~~~

Now let's init the list and sync it with out invisible DataCollection

~~~js
webix.ui({
	view:"list",
	id:"list",
	template:"#rank#. #title# - #year#",
	data:"" // we needn't specify anything here
});
			
$$('list').data.sync(data);
~~~

Now, if we bind a form to the DataCollection, it will be a slave view in relation to the synced list as well! And any data from the form will be added to 
dataCollection, and then to list. 

However, data will not fill the form unless we refer to cursor concept. 

##Cursor Concept

Cursor position is the ID of an item that the cursor is set on. Cursor should be set in case several components are bound to/synced with one and the same source, e.g. one and the same DataCollection, in order 
to avoid conflicts between different component referring to one and the same datasource and making changes upon it. 

The invisible **dataCollection** is a master component for both the form and data-containing components synced with it. But since it's invisible, data cannot be operated on.
The issue is solved by using any component to set cursor to an item from dataCollection each time this item is selected in the chosen component.

For instance, you'd like a list to be "volonteer" to get to dataCollection during form filling. 

~~~js
$$('list').attachEvent("onAfterSelect", function(id){  data.setCursor(id); }); 
~~~

As a result, data is saved to dataCollection after editing as well as to all the synced components without any additional manipulations. 

{{sample 80_docs/nonui.html}}

##Server-Side Integration with non-UI Components

[Server-side work](desktop/serverside.md) is enabled with **dataConnector** to load data and **dataProcessor** to save changes back to the database. It can be used for both "visible" and "invisible" (non-ui) components.

To use dataProcessor with dataCollection synced with some component on the page, you should go through a three-stage process.

1 . Define a **dataCollection** and populate it with data from the database:

~~~js
store = new webix.DataCollection({
	url:"../common/connector.php",
	datatype: "xml"
});
~~~

2 . Declare a **dataProcessor** for the dataCollection: 

~~~js
var dp = new webix.DataProcessor({
	master: store,
	url: "../common/connector.php"
});
~~~

3 . **Sync** a data-presenting component with the dataCollection: 

~~~js
list.sync(store);
~~~

{{sample 14_dataprocessor/06_datastore.html }}

##DataCollection and Datatable Syncing 

DataProcessor and server-side integration work the same way with all components yet in case of [datatable](datatable/index.md) extra functionality appears. 

DataConnector allows rendering data from one table into a component (**render_table** method) or displaying data from several tables using custom SQL-query (**render_sql** method). More info about this in the
[Serverside Integration](desktop/serverside.md) article.  

**Working with Database Tables: ID-to-Text Transformation**

Tables in the database are often connected by ID while on client-side, within the component, we require that text values should be shown. The solution hides in loading data from the needed tables into 
**different dataCollections** and refer to **datatable colummn configuration** to render the database data. 

First, create several **dataCollections**  and load data from connected database tables. 

{{snippet
Table Rendering
}}
~~~js
var employee = new webix.DataCollection({
	url:"data/employees.php",
	save:"connector->data/employees.php" //dataprocessor, short init form
});

var customers = new webix.DataCollection({
	url:"data/customers.php"
});

var orders = new webix.DataCollection({
	url:"data/orders.php",
	save:"connector->data/orders.php"
});
~~~

What is there in these collections? 

While database connect parameters are the same for two collection, they differ in tables they render: 

~~~sql
--library connectors for working with server side
require_once("./config.php");
$data = new JSONDataConnector($db,"SQLite3"); 

--for employee collection
$data->render_table("employees","id","email, fullname, login"); 

--for customers collection
$data->render_table("customers","id","lastname, firstname, job, address, city, zip, country"); 

--for orders collection
$data->render_table("orders","id","date, employee, customer, status [,other fields]);
~~~

Then create a datatable and sync it with either fo these collections. 

~~~js
$$("dash-ord-active").sync(orders);
~~~

This will be the main datasource for the component. As far as in the **"orders" table contains just IDs** of dedicated customers and orders, they **should be transformed into text** while rendering to datatable .

For these needs there's a **collection** property in datatable column API to point to a datasource different from that of the whole component. 

~~~js
{ view:"datatable", id:"dash-ord-active", 
 columns:[
		{ id:"date", header:"Order Date" },
        { id:"employee", header:"Employee", collection:employee},
				{ id:"customer", header:"Customer", collection:customers},
				{ id:"status", header:"Status" },
				{ id:"fee", ...},
				{ id:"taxes", ...},
				{ id:"total", ...} //other columns
		]
}

~~~

Two columns for the datatble are fed directly from **employee** and **customers** collection where they get text values instead of ID-s. 

Datatable column configuration is described in [related datatable documentation](datatable/columns_configuration.md). 
