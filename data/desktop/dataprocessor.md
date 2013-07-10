DataProcessor
=============

Webix DataProcessor is a functional library that lets you to ‘communicate’ with server-side backend. It

- resides on the client side;
- handles data validation before saving into the database;
- helps manipulate different aspects of data saving operations between client and server;
- can be used for any UI [component](desktop/components.md) and [DataCollection](desktop/nonui_objects.md).

##DataProcessor Initialization

DataProcessor object can be inited in both long and short forms. Compulsory parameters include: 

- **url**, a path to the php-script that links to [DataConnector](desktop/serverside.md) and handles data processing. It's the same script you use to load data from the database. 
You can also use your own code for data saving;
- **master**, a component you will use the dataProcessor with. 

Other parameters (**mode**, validation **rules**, **on**, etc.) and optional and [can be found here](api/refs/dataprocessor.md#properties).

####Short Form

A short form connects the previously created dataProcessor to the component, but if there isn't any, it creates the new dataProcessor. 

{{snippet
Short Form (master, url)
}}
~~~js
var dp = webix.dp("mylist", "some_script.php"); 
~~~ 

The **webix.dp()** method is also used for getting a DataProcessor object if changes of the default saving pattern are required: 

~~~js
var dp = webix.dp("mylist"); //returns dataprocessor object
~~~

####Long Form

With a long form you make use of the **new** constructor where you create an object through object literals. 

{{snippet
Full Form 
}}
~~~js   
dp = new webix.DataProcessor({
	url: "data.php", 
	master: $$('mylist')
});
~~~

{{sample 14_dataprocessor/02_list.html }}

####Implicit Form via Save Property

There exists an implicit way of DataProcessor initialization. You  define **url** as value of **save** property for the needed component (**master**): 

~~~js
webix.ui({
	view:"datatable",
    ..config..
    url: "data.php", //script that links to DataConnector and loads data
    save: "connector -> data.php" //the same script used for data processing
});
~~~

DataProcessor features other properties as well as methods and events. [Check its API](api__refs__dataprocessor.html).

##Data Processing Operations

DataProcessor interpretes client-side operations performed on data and automatically generates requests to update data in the database.

The default processing looks as follows: 

- If **remove()** function is called within the component, the **DELETE** request is performed on the database record;
- If **editing** is done, or **update()** function is called, the **UPDATE** request is generated;
- If you **add()** data to the component, the **INSERT** request is performed to add this record to the datatabse table. 

##Changing Default Processing Logic

The event system for dataProcessor helps change the default processing on client-side thus setting other pattern for specified operation within necessary component. 

The logic is changed with the help of the **action** object and its ID, operation and data properties: 

- **id** - the ID of the item being processed;
- **operation** - the database operation being performed ("update", "delete" or "insert" by default). If you use a custom code, you can manipulate with your own operations and operation names;
- **data**  - refers to data from the table being processed. Here we can get to table columns (action.data.column_name). 
 
This is how we change deletion from database for updating the record:

~~~js
webix.ui({
	view:"datatable", 
    id:"emp_grid",
    ..// config,
    url:"data/employee.php", 
	save:"connector->data/employee.php"
 });
 
..//function redefining removal into updating

webix.dp($$("emp_grid")).attachEvent("onbeforedelete", function(id, action){
		action.operation = "update";
		action.data.deleted = webix.i18n.parseFormatStr(new Date());
});
~~~

Now, when a record is removed from the component, a field **deleted** of this record is updated in the database table. The current date is set into it to track the moment when the record was removed on the client side. 

**Data Operations**

Client-side data item operations are made with the help of dedicated [controls](desktop/controls.md) and include the following ones. 

- [Data Adding and Deletion](desktop/add_delete.md);
- [Data Updating](desktop/update.md)
- [Data Editing](desktop/edit.md)

##Reloading a Single Record from the Database (for Bound Components)

[Data Binding](desktop/data_binding.md) is often used to make one component a datasource for the other one the moment selection in the master one happens. **Binding is performed on client-side** and helps synchronize data
changes.

Working with server-side, you need to update the master component when changes in the slave one occur, which means you need to reload this data from server.   

Take you have two [datatables](datatable/index.md) ("emp_grid" and "wage_grid") that load data from different "employees" and "wages" tables, the latter being a dependent one. 

<img src="desktop/db.png">

~~~js
webix.ui({
	view:"datatable", id:"emp_grid", columns: [
		{id:"name", template:"#first_name# #last_name#"}, //load data from 'employees' table
        {id:"wage", template:"#wage.value#"} //loads data from 'wages' table 
	],
    url:"data/employee.php",
	save:"connector->data/employee.php"
})

webix.ui({
	view:"datatable", id:"wage_grid", columns:[
    	{id:"date_start", .. }, //column IDs coincide with DB table titles
        {id:"value", ..}
    ],
    url:"data/wages.php",
	save:"connector->data/wages.php"
})
~~~

Emp_grid id bound with wage_grid to be its datasource:

~~~js
$$('wage_grid').bind($$('emp_grid'), function(wage, cursor){
	return wage.empl_id == cursor.id;
});
~~~

Cursor position is the ID of the item the cursor is set on. Here cursor position is the ID of the employee in the "wages" table, the same ID the employee has in the "employees" table

When you change wage value in the slave **wage_grid** component the data is saved to wages table, where each wage is connected with the employees by their IDs. 

The event system for dataProcessor includes the **onAfterSync** event that can be used to trigger the **load()** function to update the info within the "emp_grid". 

~~~js
webix.dp($$("wage_grid")).attachEvent("onaftersync", fucntion(){
		var id = $$("emp_grid").getCursor(); //ID of the needed employee
		$$("emp_grid").load("data/employee.php?action=get&id="+id); 
});
~~~

Here you load only the item with the specified ID with the help of the GET request. 

##Data Validation with DataProcessor

Data validation is enabled by including specific rules for input field. You can read about them [here](desktop/data_validation.md). With rules specified, the validation 
process starts each time you try to save data to the database. 
 
~~~js   
dp = new webix.DataProcessor({
		rules:{$all:webix.rules.isNotEmpty },
		url: "save.php", 
		master: $$('mylist')
})
~~~

###Related Article

- [Dataprocessor API - Methods, Properties and Events](api/refs/dataprocessor.md)

@complexity:2