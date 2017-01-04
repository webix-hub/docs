Server-Side Integration
=================

Server-side integration is possible with Webix [data components](desktop/components.md), 
client-side data stores (called [Data Collections](desktop/nonui_objects.md)) and [forms](desktop/form.md). 
It is enabled in several ways:

- you can write your own **[custom scripts](desktop/custom_serverside.md)** in your favorite language to load data and save changes back;
- you can use server-side [REST API](desktop/server_rest.md) (MVC.Net, Ruby on Rails, PHP Yii **MVC frameworks** coupled with your scripts or connectors);
- you can choose one of [additional ways](desktop/serverside.md#otherwaysofintegratingwithserver).

##Data Loading

Basic client-side code that enables [loading data](desktop/data_loading.md) to a component during its initialization is as follows: 

~~~js
webix.ui({
	id:"dtable",
	view:"datatable",
    url:"data.php"
});
~~~

Or, to load data after component initialization, apply **load()** method to it: 

~~~js
$$("dtable").load("myscript.php", "xml");
~~~

**Note that**

- Server script you state as **url** parameter or pass into **load()** function executes GET request and returns data from server in either of the [possible data formats](desktop/data_types.md);
- You should specify **datatype** parameter if incoming data is not JSON (the default datatype);
- In case of long datasets [dynamic loading](desktop/dynamic_loading.md) functionality will be helpful;
- Default loading pattern can be [customized](desktop/server_customload.md) - specific loading modes, ajax helper for passing parameters into load script.

More info about custom scripts is in the [dedicated article](desktop/custom_serverside.md).

If you are unsure what to do in case you need to get data from a **different domain** with relations to your app's one, consult our solution to [cross-domain data loading](desktop/crossdomain_loading.md).



##Data Saving

Basic client-side code that enables data saving from a component to database is as follows:

~~~js
webix.ui({
    id:"dtable",
	view:"datatable",
   	save:"save_script.php"
});
~~~

**Note that**

- Save script gets data in POST request and saves them to database. 
- Save script typically returns **operation status** and **ID** of the changed item. To tune server-side response, look into the [dedicated article](desktop/custom_serverside.md#response).
- Saving can be implemented via [Webix Ajax helper](desktop/server_ajaxsave.md), which adds more flexibility.

In addition, **save** property automatically initializes [DataProcessor](desktop/dataprocessor.md) for this component so that data changes are transmitted to your save script. 
DataProcessor listens to component events, defines editing operation (as **insert, update** and  **delete** one) and sends changed data to server script in POST request. 

**Defining Operation Type**

By default, operation status comes as **webix_operation** in POST request. Usually, save script is single and contains patterns for different operations. 

At the same time you can define a **specific script** for each operation. Dataprocessor will define the type of operation and the necessary script will be executed:

~~~js
save:{
	"insert":"data/insert.php",
	"update":"data/update.php",
	"delete":"data/delete.php"
}
~~~

{{sample 14_dataprocessor/08_custom_urls.html}}

If you need to change the default pattern of data processing - look up [Dataprocessor docs](desktop/dataprocessor.md);

##Saving Uploaded Files

If you use Webix [Uploader](desktop/file_upload.md), you may wonder about how saving of the files is performed. 

~~~js
{
	view:"uploader",
    id:""uploader1,
    name:"uploader"
	upload:"upload.php"
	autosend:false
}

$$("uploader1").send();
~~~

**Note that**

- **Autosend** should be set to *false* in order that saving starts only when you call the **send** method. When you call it, the script specified in **upload** property will be executed;
- **Server part of file upload** is described in detail in the [dedicated part](desktop/uploader_serverside.md) of uploader documentation;
- The information about how to **save form and uploader data** separately - is [nearby](desktop/uploader_integration.md). 

##Saving Form and Input Data

Form data is either 

- pushed to the component it is [bound](desktop/data_binding.md) with;
- or (more typically) is sent to server by [Webix Ajax request](desktop/server_ajaxsave.md).

##Other Ways of Integrating with Server 

- you can make use of a **[Server Side Connector](desktop/dataconnector.md)**. The necessary information is given in the [corresponding article](desktop/dataconnector.md).
- you can apply [Webix Remote](desktop/webix_remote.md)
- you can use [WebSockets (Faye proxy object)](desktop/server_faye.md)


###Further Reading

- desktop/server_customload.md
- desktop/server_ajaxsave.md
- [Loading and Saving  with Custom Scripts](desktop/custom_serverside.md)
- [Customizing DataProcessor](desktop/dataprocessor.md)
- [Offline Support](desktop/server_offline.md)
- [Working in REST Mode](desktop/server_rest.md)
- [Working with Proxy Objects](desktop/server_proxy.md)


@index: 
- desktop/dataconnector.md

@complexity:2