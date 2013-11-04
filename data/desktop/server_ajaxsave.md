Saving Data with Webix Ajax Helper
====================

Webix ajax helpers helps save component data on demand as well as form and input data. 

{{note
Note that [DataProcessor](desktop/dataprocessor.md) isn't inited this time and you need to catch the necessary events (add, edit, delete) yourself. For forms saving request is usually send on button click.
}}

Data is sent to server script in the body of Ajax POST request:

~~~js
webix.ajax().post("myscript", params, callback);
~~~

**Note that**

- **"myscript.php"** can be your [own script](desktop/custom_serverside.md) on any language you choose. It can be as well a [connector-based script](desktop/dataconnector.md));
- **params** are sent in form of JSON object (which is exactly what the [form](desktop/form.md)'s api/link/ui.form_getvalues.md method returns:

~~~js
webix.ajax().post("my_script", {id: some, name: some, address:some }, callback);
webix.ajax().post("my_script", form.getValues(), callback);
~~~

If combined with connector-based script, [simplified data transfer protocol](desktop/dataconnector.md#simple) can be used.

Additionally, you can pass **extra parameters** as GET request:

~~~js
webix.ajax().post("data/load.php?id=1&action=update", {prop1:value1, prop2:value2} function(text, data){
	...//callback
});
~~~

There you'll have in serverside script:

~~~php
$id = $_GET['id'];
$action = $_GET['action'];
$prop1 = $_POST['prop1];
$prop2 = $_POST['prop2];
~~~

Learn more about the possibilities of [Webix Ajax interface](helpers/ajax_operations.md).

@complexity:2

