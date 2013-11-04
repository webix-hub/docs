Data Connector
=======================

The Server Side Connectors together with [DataProcessor](desktop/dataprocessor.md) use their inner logic to interpret CRUD operations and generate the code to update database tables according to the 
changes made. 

- Connectors come in ready-made **PHP, Java, .Net, ColdFusion** versions;
- they simplify **data loading** from database and **data saving**. You needn't write database queries yourself;
- allow basic **CRUD operations on server-side**;
- enable **server-side sorting** and **filtration**;
- feature built-in **protection** against **CSRF** and **XSS** attacks.

As a rule, one and the same connector is used for [loading data](#loading) and [saving](#saving).

##Connector Documentation {#docu}

- [PHP connectors](http://docs.dhtmlx.com/doku.php?id=dhtmlxconnector:start);
- [Java Connectors](http://docs.dhtmlx.com/doku.php?id=dhtmlxconnectorjava:toc);
- [.Net Connectors](http://docs.dhtmlx.com/doku.php?id=dhtmlxconnectornet:toc);
- [ColdFusion Connectors](http://docs.dhtmlx.com/doku.php?id=dhtmlxconnectorcf:toc).

There you should search for standard **DataConnector** and **JSONDataConnector** that are intended for use with our touch-oriented libraries including Webix. 

##Data Loading {#loading}

Connectors perform database queries and return data in **XML** format (standard DataConnector) or in **JSON** (JSONDataConnector). [Data formats](desktop/data_types.md) are described separately. 

To load data with the help of the necessary connector, you should: 

- write a **connector-based script** that connects to the necessary database AND contains **path to the necessary connector**. In addition, it may contain extra data rendering logic (described below).
- specify this script as **url** for the Webix component you work with.

~~~js
webix.ui({
	view: "datatable", 
    ..config..
    url: "server/data.php" 
    datatype:"xml"
});

//or, in case you load data after component init:

$$("grid").load("server/data.php");
~~~

- Datatype can be omitted in case of JSONDataConnector usage since it returns data in default JSON format. 
- In case of long datasets, make use of [dynamic loading](desktop/dynamic_loading.md) functionality. 

##Connector Based Script (PHP Solution)

Below is the guide how to write the **script** that will **link component** and **dataConnector** (call it **data.php**, e.g):

###1 . Connect to the database and select to the necessary connector. 

Specify path to desired Data Connector, and connect to your database: 

~~~php
require_once("../../data_connector.php"); //!connector
$dbtype = "MySQL";
$conn = mysql_connect(localhost, "login","password");
~~~

###2 . Initialize dataConnector: 

~~~php
$data = new JSONDataConnector($conn, $dbtype); 
~~~

Here you can enable protection against CSRF and XSS attacks: 

{{snippet
CSRF Protection
}}
~~~js
ConnectorSecurity::$security_key = true;
~~~

{{snippet
XSS Protection
}}
~~~js
//safehtml
ConnectorSecurity::$xss = DHX_SECURITY_SAFEHTML;

//trusted
ConnectorSecurity::$xss = DHX_SECURITY_TRUSTED;
~~~

By default, SECURITY_SAFETEXT protection is used, so you needn't specify it directly.

###3 . Render data from the needed table/ tables: 

In case of a **single table** you specify its name, the primary key field and field names you'd like to render:

~~~php
$data->render_table("users","id","user, email, status"); 
~~~

In case of **hierarchical data**, you also specify **relation id**, which is the name of the field that stores ID of the parent branch for this record:

~~~js
$data->render_table("users", "id", "user, email, status", "", "relation_id" );
~~~

In case of **several tables** you need to write a SQL-query, specify the primary key field and fields to render. 

~~~php
$data->render_sql("SELECT user, email, status, project FROM users, projects", "id", "user, email, status, project");
~~~

Here you can enable [dynamic loading](desktop/dynamic_loading.md), which is useful in case of long datasets. The argument states the number of records loaded initially while the others will be loaded as you scroll 
or page through the data in the component: 

~~~php
$data->dynamic_loading(30);
~~~

**Comments:**

**Render_table** and **render_sql** have common parameters: 

 - table name / SQL-query;
 - name of primary key (ID) field;
 - names of fields to take data from;
 
###4 . Customize rendered data
 
Apart from these two basic functions, you can add extra functionality by using the following methods:
 
 - **configure**  - configuring a temporary table for further usage the same way you do it with **render_table**.  
 - **limit** - customizing the amount of rendered data. Takes for parameters: start line, the number of lines to be rendered, column name to take data from, and sorting direction in this column;

~~~php
$last_value -> configure("wages", "id", "values, start_date"); 

$last_value -> limit(0, 1, "date_start", "desc"); 
~~~
 
Here values from the "wages" table are sorted by date while the descending direction means that the highest line will be the latest value. The result of the query will the the fisrt line of the sorted table. 
 
 - **mix** - defining data for a field/column in the UI component. The data comes from the table different from that you use to render data for this component. 
 
~~~php
$data -> mix("wage", $last_value, array("empl_id" => "id")); 
~~~

Here the method works with a column/field name of the component, the value, you'd like to render there and ID correspondence between the tables. 
 
 - **filter** - filtering data on serverside. Takes column name and desired value as arguments
 
~~~php
$data -> filter("field_name = ''"); 
~~~

Here the data is filtered by a "field_name" field and shows all records where it is empty. 
  

{{note
Connectos have big possibilities of customization, so consult their [documentation](#docu).
}}

##Saving Data with Connectors {#saving}

To enable saving data with the chosen connector, you should specify it as value of the component **save** property (in addition to mentioning as **url** for loading). 

~~~js
webix.ui({
	view: "datatable", 
    ..config..
    url: "server/data.php" 
    save:"connector->server/data.php"
    datatype:"xml"
});
~~~

**Note that**

- The must-have detail here is a **connector** prefix before the path. 
- As soon as you define you connector-based script as **save** script, DataProcessor is inited to send changed data to this script. 

[DataProcessor](desktop/dataprocessor.md) passes changed data from the component alongside with the operation (*update, insert, delete*) performed on it. 
This operation corresponds to query type the connector will execute over the database table. If you neeed to customize this behavior  - go to [DataProcessor docs](desktop/dataprocessor.md).

There are two protocols for data transfer with Server Side Connectors

- **Standard** - used for automatic data sending from a component to server (each time you add, edit, remove item);
- **Simplified** - used for manual triggering of server script execution, e.g. issuing Ajax request. 

###Standard Protocol

- **get** request automatically receives mark *?editing=true*
- **post** request receives data for the record being edited. It includes **data** from all fields of this record AND **!nativeeditor_status** (update, insert, delete) that is defined automatically on the base of user actions;
- **response** comes as in XML that includes type of performed action, original item ID and item ID after processing.

{{snippet
ServerSide Response
}}
~~~xml
<?xml version='1.0' ?><data><action type='update' sid='1' tid='1' ></action></data>
~~~

**Original ID** (sid) and **ID after processing** (tid) may differ when item adding is performed on client side, during which item gets temporary ID that is changed to database record ID after inserting this item into the database. 

Response can be changed. See connector [documentation](#docu) for the needed pattern. 

###Simplified protocol {#simple}

- you should specify desired operation (action type) manually in **get** request as "myscript.php?action=insert";
- **post** - properties you pass within Ajax request in form of JSON object;
- **response** - **true/false** for update operation plus **item ID** for insert and delete. 

More about simplified data transfer [here](http://docs.dhtmlx.com/doku.php?id=dhtmlxconnector:general_idea).

Simplified protocol can be used for Ajax requests:

~~~js
webix.ajax().post("myscript.php?action=update", 
	{id: new_id, name: new_name}, //params
     function(response){ //callback
		if(response) //for update it's either true or false
        	webix.message("Done");
        else
        	webix.message("Update Failed");
});
~~~

@complexity:3

