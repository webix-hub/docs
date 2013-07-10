onServerConfig
=============


@short:fires when the component loads data containing the config tag (key) inside. 
	

@params:
-	config	object	the config object

@example: 
	
some.attachEvent("onServerConfig", function(config){
    //... some code here ... 
});

@template:	api_event
@descr:
When the parser processes data and 'sees' the tag (key) named as **"config"** it invokes the **onServerConfig** event (before api/link/ui.datatable_onafterload_event.md).

{{note
Applicable only to data in the XML, JSON formats
}}



<br>
You might want to change the name of tag(key) the parser should look for. In this case, use the api/refs/datadriver.md class and the next command:

~~~js
webix.DataDriver.[format].config = "/*/[keyword]";
~~~
<br>
For example, to make the parser search for the **"conf"** tag instead of **"config"** in the XML data, you should call the command as in:

~~~js
webix.DataDriver.xml.config = "/*/conf";
~~~
