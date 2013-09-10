Server-side Integration
=================

Server side integration with Webix components is enabled in several ways:

- you can write your own **custom scripts** to load data and save changes back;
- you can make use of ready-made **Server Side Connectors** that enable data loading and saving. They are available in PHP, Java, .Net, ColdFusion versions;
- You can use MVC.Net, Ruby on Rails, PHP Yii **MVC frameworks** coupled with your scripts or connectors.

<img src="desktop/connector.png"/>

Any pattern you choose is suitable for working with **Webix data components**, client-side **datastores** ([Data Collection](desktop/nonui_objects.md)) and **forms**. 

There exist two libraries that enahnce interaction between your app and server: 

- [DataProcessor](desktop/dataprocessor.md) - listens to editing events and defines editing operation (*insert, update, delete*) within the component and sends changed data for server script (either custom or connector-based) in POST request. 
Its initialization is **highly recommended** to avoid monotonous coding while its API helps  adjust it to your needs;
- [DataConnector](desktop/dataconnector.md) - offers a simplified pattern for loading and, if DataProcessor is inited, saving data to database. The use of connectors simplifies server-client communication and encompasses all
standard server operations while it's also possible to change their logic to meet your needs. Yet, using connectors is **optional** and is up to your choice. 

###Data Loading

Basic client-side code that loads data to a component during its initing is as follows: 

~~~js
webix.ui({
	view:"datatable",
    id:"dtable",
    ..// config
    url:"myscript.php", 
    datatype:"xml" 
});
~~~

Or, if you load data after compomnent init, apply *load()* method: 

~~~js
$$("dtable").load("myscript.php", "xml");
~~~

**Note that**

- You should specify **datatype** parameter if incoming data is other than JSON (default);
- Server script you specify as **url** parameter, can be either a custom one or the connector-based (links to a chosen [Server Side Connector](desktop/dataconnector.md));
- Custom script can be written on **any language**, not just PHP. If you use a certain type of connector, the linking script should of the same language with connector.

###Data Saving

Basic client-side code that enables data saving from a component to database is as follows:

~~~js
webix.ui({
	view:"datatable",
    id:"dtable",
    url:"myscript.php", 
    //for connector-based scripts
    save:"connector->myscript.php",
   	//for custom server scripts
   	save:"my_savescript.php"
    datatype:"xml" 
});
~~~

**Note that**

- Component **save** property initializes [DataProcessor](desktop/dataprocessor.md) for this component so that data changes are transmitted to the script you state as its value. There exist other ways of DataProcessor initing, 
which should be used if customization is needed - [look here](desktop/dataprocessor.md);
- In case of [connector](desktop/dataconnector.php) usage, **url** and **save** properties house one and the same linking script that leads to this connector. Custom scripts are different, as a rule.

###Saving Data via Ajax

Data you get from users via form and separate inputs is typically saved via Ajax request, so **DataProcessor initing is unnecessary** as data saving is started on some page event
(e.g. button click) and data is sent to server script in the body of Ajax POST request.

Webix offers its own [API to work with Ajax](helpers/ajax_operations.md).

~~~js
webix.ajax().post("my_script", params, callback);
~~~

**Note that**

- **"myscript.php"** can be your own script on any language you choose. It can be as well connector-based script that links to Webix Server Side connector;
- **params** are sent in form of JSON object (as well returned by [form](desktop/form.md)'s [getValues()](api/link/ui.form_getvalues.md) method:

~~~js
webix.ajax().post("my_script", {id: some, name: some, address:some }, callback);

webix.ajax().post("my_script", form.getValues(), callback);
~~~

If combined with connector-based script, [simplified data transfer protocol](desktop/dataconnector.md#simple) can be used.

###Further Reading

- [DataProcessor](desktop/dataprocessor.md)
- [Server Side Connectors](desktop/dataconnector.md)
- [Implementing server-side integration with custom scripts](desktop/custom_serverside.md)

@index: 
  - desktop/dataprocessor.md
  - desktop/dataconnector.md

@complexity:2