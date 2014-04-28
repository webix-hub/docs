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


##DataProcessor EventSystem and Error Tracking

DataProcessor events ([listed in API reference](api/refs/dataprocessor.html#events)) can be used for different purposes. For instance, the events can help you:

1) **Modify data** before it's gone to server with the **onBeforeDataSend** event that takes the whole dataobject as parameter:

~~~js
dp.attachEvent('onBeforeDataSend', function(obj){
	obj.data.StartDate = webix.i18n.dateFormatStr(obj.data.StartDate);
});
~~~

2) **Track successfull** and **unsuccessful serverside responses** separately with the help of **onAfterSync** and **onAfterSaveError** events respectively:

{{snippet
Successful server response
}}
~~~js
dp.attachEvent('onAfterSync, function(id, text, data){
	var response = data.xml(),
    	hash = response.data;
    //hash {type:'', tid: '', sid:''}      
});
~~~

- **type** - type of **action** performed (*insert, update, delete*);
- **sid** - item ID that was sent to server for update;
- **tid** - item ID that returned from server after update. 

{{note
**tid** and **sid** will only be different in case on **insert** operation. In this case, DataProcessor automatically changes client-side ID to the ID that was generated for the item on server. 
}}

{{snippet
Unsuccessful server response
}}
~~~js
dp.attachEvent('onAfterSaveError', function(id, status, obj){
     var operation = this.getItemState(id).operation; //operation that was performed
});
~~~

In case of an error during saving, response **status** will always be 'error' while **type** of operation is derived by api/dataprocessor_getitemstate.md method.

**Getting to a master component from DataProcessor**

Inside DataProcessor event handlers you can reach the master component througn DataProcessor configuration objetc:

~~~js
dp.attachEvent('onSomeEvent', function(id, status, obj){
   var grid = this.config.master; //this == DataProcessor
});
~~~

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

Not any client-side update is to be saved to server. To temporarily cancel DataProcessor you can:

- either apply api/dataprocessor_ignore.md fucntion to the Dataprocessor object. 

~~~js
webix.dp("grid").ignore(function(){
	$$("grid).add(data);	
});
~~~

- switch Dataprocessor api__dataprocessor_off.html during the update operation:

~~~js
dp.on();
$$("grid).add(data);	
dp.off();
~~~


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

@complexity:2