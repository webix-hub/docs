DataProcessor
=============

Webix DataProcessor is a functional library that lets you to ‘communicate’ with server-side backend. It

- resides on the **client side** as a mixin of Webix library;
- listens to **component events** (data adding, updating and removing) and passes **changed data** as well as **operation** performed (insert, update, delete) to the server script in **POST request**. 
- handles **data validation** before passing to server script;
- can be used for any UI [component](desktop/components.md) and [DataCollection](desktop/nonui_objects.md).

{{note
Without DataProcessor, you need to attach corresponding functions to component events (onAfterInsert/Update/Delete) to get data ready for processing.
}}

##DataProcessor Initialization

DataProcessor object can be inited in both long and short forms. Compulsory parameters include: 

- **url**, a path to your [own server script](desktop/custom_serverside.md) or connector-based one (described in [Server Side Connector](desktop/dataconnector.md)). In any case, it should be the script that enables data loading from the database 
into the component;
- **master**, a component or DataCollection you will use the dataProcessor with. 

Other parameters (**mode**, validation **rules**, **on**, etc.) and optional and [can be found here](api/refs/dataprocessor.md#properties).

####Implicit Initialization via Save Property

When you define **url** (path to the necessary script) as value of **save** property for the needed component (**master**) - DataProcessor is automatically inited: 

~~~js
webix.ui({
	view:"datatable",
    ..config..
    url: "data.php", //script that links to DataConnector and loads data
    save: "connector -> data.php" //the same script used for data processing
    
    or
    url:"data_load.php", //your custom script for loading
    save:"data_save.php" //you custom script for saving
});
~~~

####Short Form

A short form connects the previously created dataProcessor to the component, but if there isn't any, it creates the new dataProcessor. 

{{snippet
Short Form (master, url)
}}
~~~js
webix.dp("mylist", "some_script.php"); 
~~~ 

The **webix.dp()** method is also used for **getting a DataProcessor object** of any component (if DataProcessor is inited for it). The object features a set of [methods and properties](api/refs/dataprocessor.md) 
that can be used to change default processing pattern: 

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
	master: $$('mylist'),
    ..//optional properties
});
~~~

{{sample 14_dataprocessor/02_list.html }}

##Data Processing Operations

DataProcessor interpretes client-side operations performed on each data item and defines the type of data action for it: 

The default processing looks as follows: 

- If **remove()** function is called within the component, action type is **delete**;
- If **editing** is done, or **update()** function is called, data action is of an **update** type;
- If you **add()** data to the component, the data action is **insert**.

This **data action** together with **data** of edited/added/deleted record is sent to server script the moment any editing operation is performed. Data action is passed as:

- **!nativeeditor_status** parameter in case of implicit DataProcessor initing (with **save** property) and simultaneous usage of connector;

~~~js
view:"list",
save:"connector->myscript.php" //link to Server Side Connector
~~~
- **webix_operation** parameter in all other cases.

It looks like this: 

~~~js
id	7
title	The Shaushenk Redemption
webix_operation	delete
~~~

And other protocol with implicit Dataprocessor initing for connector-based scripts:

~~~js
1_!nativeeditor_status	update
1_birthday	1965-08-19
1_id	1
~~~

The moment Dataprocessor returns data, script execution begins (if other is not stated):

- If serverside integration is enabled with a [Server Side Connector](desktop/dataconnector.md), the connector automatically **generates database request** corresponding to action type to treat changed data;
- For [custom scripts](desktop/custom_serverside.md), you get **webix_operation** and other data via **POST** request and write corresponding queries for each type of operation.  

##Changing Default Processing Logic

The [event system](api__refs__dataprocessor_events.html) for dataProcessor helps change the default processing logic right on client-side. 

To alter processing, you should manually attach processing function to the necessary DataProcessor event (onBeforeDelete, onBeforeInsert, onBeforeUpdate). For instance, set **update** action type on **onBeforeDelete** thus 
making connector issue UPDATE request instead of DELETE.

This is how we change deletion from database by updating this record:

~~~js
webix.ui({
	view:"datatable", 
    id:"grid",
    ..// config options
    url:"data/employee.php", 
	save:"connector->data/employee.php"
 });
 
..//function redefining removal into updating

webix.dp($$("grid")).attachEvent("onbeforedelete", function(id, action){
		action.operation = "update";
		action.data.deleted = webix.i18n.parseFormatStr(new Date());
});
~~~

 where..

- **id** - the ID of the item being processed;
- **action** - DataAction object;
- **operation** - the database operation being performed (action type);
- **data** - refers to component inner DataStore. Here we can get to the desired data item property (*action.data.property_name*). 

Now, when a record is removed from the component, a field **deleted** of this record is updated in the database table. The current date is set into it to track the moment when the record was removed on the client side. 

Learn more about the possibilities of data manipulation on clent side in related articles:

- [Data Adding and Deletion](desktop/add_delete.md);
- [Data Updating](desktop/update.md)
- [Data Editing](desktop/edit.md)

##Cancelling Dataprocessor for Some Operation

Cancelling default Dataprocessor work can be useful in case of [bound](desktop/data_binding.md) data component and form. 

**Grid** populates **form** with data each time its row is selected. At the same time, if you change data in form and save it - new data will be pushed to grid and the DataProcessor will trigger save script execution.

To cancel this and save form data separately, apply api/dataprocessor_ignore.md fucntion to the Dataprocessor object. 

~~~js
$$("form").bind($$("grid"));

webix.dp("grid").ignore(function(){
		$$("grid).add(data);	
	});
~~~

Form data can be saved via [Webix Ajax Helper](desktop/server_ajaxsave.md).

##Reloading a Single Record from the Database (for Bound Components)

[Data Binding](desktop/data_binding.md) is often used to make one component a datasource for the other one the moment selection in the master one happens. **Binding is performed on client-side** and helps synchronize data
changes.

Working with server side, you need to update the master component when changes in the slave one occur, which means you need to reload this data from server.   

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

Cursor position is the ID of the item the cursor is set on. Here cursor position is the ID of the employee in the "wages" table, the same ID the employee has in the "employees" table.

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
		rules:{
        	$all:webix.rules.isNotEmpty 
        },
		url: "save.php", 
		master: $$('mylist')
})
~~~

###Related Article

- [Dataprocessor API - Methods, Properties and Events](api/refs/dataprocessor.md)
- [Server Side Connectors](desktop/dataconnector.md)
@index:
	desktop/serverside.md
@complexity:2