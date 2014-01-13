Server-Side Integration 
============

On previous steps we've done good job. 

- We've  set the layout for the app and placed there UI components. See [Basic All Tutorial. Step 1](tutorials/basic_app.md). 
- We have enabled interaction between different components within the app. See [Basic All Tutorial. Step 2](tutorials/basic_app_2.md). 

Now it's time to learn how to work with data stored in the database and how should we treat **CRUD** (create, read, update, delete) operations so that they not only appear on the page, 
but also change data in the database. 

The **tasks for serverside** are as follows: 

- To populate our list with data from the database;
- To ensure that all the changes you make on the client side (within the component) should be reflacted in the database (items should be added, deleted and updated in the DB)

Serverside Integration is described in detail in the [related article of documentation](desktop/serverside.md) while here let's make the following steps: 

##Loading Data from the Database

Data loading is performed with the help of **ready-made dataConnector**, a script that retrieves data from the necessary database table and renders its data to the component. With 
library package, you get a wide choice of data connectors to serve the needs of serverside work. There exist .Net, PHP and Java versions. 

The connector should be set as data **url** for a component. 

~~~js
{
 	view:"list", id:"mylist",
    template:"#title# - #year#",
    select:true, 
    url:"../common/connector.php",
	datatype:"xml"
}
~~~

DataConnector enables only **server->client interaction**, it's the component's datasource. Used alone, it doesn't push client-side changes back to the database, which is the responsibility of **DataProcessor**. 

##DataProcessor Initialization

**Webix.DataProcessor** is responsible for [server-side integration](desktop/serverside.md) and handles all the CRUD operations.

It should be inited for the component you'd like to perform server work with: 

~~~js
var dp = new webix.DataProcessor({
	master:$$('mylist'),//specifies the desired component 
	url:"../common/connector.php"// 
});
~~~

Very often dataProcessor gets the same **url** that is specified as component datasource. At the same time, it can be your own piece of code if you want your own custom logic. 

DataProcessor will automatically "translate" all your actions to the server: when you add a record to the list, the new record will appear in the database table, etc. 

##Component Binding

At last, let's make a step up and **simplify form update**. On previous step we used an *"onAfterSelect"* event to transmit list data into the form and a complicated *"update_row"* function to push edited data back to list. 
It was for the sake of learning. 

At the same time, Webix library has powerful [Binding API](desktop/data_binding.md) to enable data synchronization between components. **Bind()** function is used to make one component a datasource for another one on selection basis.

The **update();** function is no longer needed as well since from now on we apply **save();** method to the form to push changes back to the list and the database. 

~~~js

webix.ui({
	view:"toolbar", 
    cols:[
		{...},
		{view:"button", id:"update", value:"Save", width:100, click:"$$('myform').save()"} 
	]   //the new function for the button
});

$$("myform").bind($$("mylist")); //component binding
~~~

Addition and removal of items goes the same way as it was on previous step. 

{{sample 80_docs/03_basic_app.html}}

Related Articles: 

- [Data Binding](desktop/data_binding.md)
- [Server-Side Integration. Dataprocessor](desktop/serverside.md)

@complexity:2