Server-side Integration
=================

There exist two libraries that enable interaction between your app and the server: 

- **DataProcessor** ([described separately](desktop/dataprocessor.md));
- **DataConnector**.

The combination of both gives you an ability to load data to component as well as perform **CRUD** operations within the component (not in the database, which prevents from overloading it with queries) 
and then save all the changes into the database. 

<img src="desktop/connector.png"/>

In essence, **dataConnector** helps populate components with serverside data. Then, when you add, edit and delete data items within this component, **dataProcessor** help this connector push the changed data back to server. 

The Data Connector together with DataProcessor use their inner logic to interpret your actions and generate the code to update database tables according to the 
changes made. At the same time, default loading and saving pattern can be changed and adjusted it to your needs on client side with the help of library API. 

As a matter of fact, server-client interaction can be done without data connectors provided that you write your own code for loading data and saving changes back.

##Data Connector 

- is represented in ready-made PHP, Java, .Net, ColdFusion versions;
- simplifies data loading from database;
- allows basic CRUD operations on server-side;
- enables sorting and filtration on server-side;
- features protection against CSRF and XSS attacks.

The simplest way to establish database connection and load data is as follows: 

- write a script that contains **path to the necessary connector** and data rendering logic (described below). It can be a totally custom script without including a connector; 
- specify this script as **URL** for the Webix component you work with.

~~~js
webix.ui({
	view: "datatable", 
    ..config..
    url: "data.php" 
});
~~~

##Rendering Database Data (PHP Solution)

Below is the guide how to write the **script** that will **link component** and **dataConnector** (call it **data.php**, e.g):

###1 . Select to the necessary Connector file and connect to the database. 

First you should specify path to desired Data Connector, the type of your database, hostname / IP-address, login and pass: 

~~~php
require_once("../../data_connector.php"); //!connector
$dbtype = "MySQL";
$conn = mysql_connect(localhost, "login","password");
~~~

There's a number of connectors to serve the needs of different UI conponents. 

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

In case of a single table you specify its name, the primary key field and field names you'd like to render:

~~~php
$data->render_table("users","id","user, email, status"); 
~~~

In case of several tables you need to write a SQL-query, specify the primary key field and fields to render. 

~~~php
$data->render_sql("SELECT user, email, status, project FROM users, projects", "id", "user, email, status, project")
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
 
Here values from the "wages" table are sorted by date while the descending direction means that the highest line will be the latest value. the result of the query will the the fisrt line of the sorted table. 
 
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
  
###4 . Define this script as the datasource for the needed component:

~~~js
webix.ui({
	view: "datatable", 
    id:"grid",
    ..config..
    url: "data.php"
});

//or, in case you load data after component init:

$$("grid").load("data.php");
~~~

Now you can load data from database tables and, additionally, make use of [dynamic loading](desktop/dynamic_loading.md) functionality. 

{{note
To **save changes** you performed on this data on the **client-side**, within the component, you should initialize the [DataProcessor](desktop/dataprocessor.md) for this component. 
}}

@index: 
  - desktop/dataprocessor.md

@complexity:2