Details and Examples of Data Formats
====================
<img src="datatree/data_formats.png"/>

Expected data formats
--------------------------------

###JSON

~~~js
[
	{ "id":"1", "open":"true", "value":"Toyota", "data":[
		{ "id":"1.1", "value":"Avalon" },
		{ "id":"1.2", "value":"Camry" },
		{ "id":"1.3", "value":"Corolla" }
	]},
	{ "id":"2", "value":"Skoda", "data":[
		{ "id":"2.1", "value":"Octavia" },
		{ "id":"2.2", "value":"Superb" }
	]}
]
~~~

###XML

~~~xml
<data>
	<item value='Toyota' open='1'>
		<item value='Avalon'></item>
		<item value='Camry'></item>
        <item value='Corolla'></item>
	</item>
    <item value='Skoda'>
		<item value='Octavia'></item>
		<item value='Superb'></item>
	</item>
</data>
~~~


Available data keys/attributes
------------------------------------
You can define the following attributes/keys in the data set:

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<thead>
	<tr>
		<th>
			Attribute
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><b>value</b></td>
		<td>the item value (the title of the related node)</td>
	</tr>
	<tr>
		<td><b>open</b></td>
		<td>defines whether the branch will be opened initially</td>
	</tr>
	<tr>
		<td><b>css</b></td>
		<td>the name of a css class that will be applied to the data item</td>
	</tr>
	<tr>
		<td> <b>checked</b></td>
		<td>checks the check box related to the item ( if exists) </td>
	</tr>
	<tr>
		<td><b>intermediate</b></td>
		<td>sets the 3rd state of the check box related to the item ( if exists) </td>
	</tr>
	<tr>
		<td> <b>webix_kids</b></td>
		<td>the flag of dynamic loading</td>
	</tr>
	</tbody>
</table>


JSON data. Using simplified form
------------------------------------------------
You can use the simplified form of JSON and specify data as in:

~~~js
[
	{ "value":"Toyota", "open":"true", "data":[
		"Avalon", "Camry", "Corolla" 
	]},
	{ "value":"Skoda", "data":[
		"Octavia", "Superb" 
	]}
]
~~~
{{sample 17_datatree/01_loading/01_json_data.html}}

*Compare simplified format with the [standard form](#expecteddataformats).*


Custom JSON format
---------------------------------------------------
To use custom attributes in JSON data set you can define your custom JSON format (read details in article helpers/data_drivers.md).

{{note
When you specify a custom format, don't remember to set the expected data type to the name of a new format
}}

Here is a simple example:

~~~js
var myjson = webix.DataDriver.myjson = webix.copy(webix.DataDriver.json);

myjson.child=function(obj){
	if (obj.$level == 1)
		return obj.cars;
};

tree = new webix.ui({ view:"tree", datatype:"myjson", ... });
~~~
*the 'child' function defines which object properties should store sub-items*


As a result, your data will look as in:

~~~js
//full form
[
	{ "id":"1", "open":"true", "value":"Toyota", "cars":[
		{ "id":"1.1", "value":"Avalon" },
		{ "id":"1.2", "value":"Camry" },
		{ "id":"1.3", "value":"Corolla" }
	]},
	{ "id":"2", "value":"Skoda", "cars":[
		{ "id":"2.1", "value":"Octavia" },
		{ "id":"2.2", "value":"Superb" }
	]}
]
//simplified form
[
	{ "value":"Toyota", "open":"true", "cars":[
		"Avalon", "Camry", "Corolla" 
	]},
	{ "value":"Skoda", "cars":[
		"Octavia", "Superb" 
	]}
]
~~~

{{sample
	17_datatree/01_loading/01_json_data.html
}}


Custom XML format
----------------------------------------------------------
To use custom tags you can define your custom XML format (read details in article helpers/data_drivers.md).

{{note
When you specify a custom format, don't remember to set the expected data type to the name of a new format
}}

Here is a simple example:

~~~js
var myxml = webix.DataDriver.myxml = webix.copy(webix.DataDriver.xml);
myxml.records = "/cars/car";

myxml.child = "model";

tree = new webix.ui({	view:"tree", datatype:"myxml", ... });
~~~
*the 'records' property defines the root tags*<br>
*the 'child' property (also can be a function that takes the data object as a parameter) defines which tag should store sub-items*

As a result, your data will look as in:

~~~xml
<cars>
	<car value='Toyota' open='1'>
		<model value='Avalon'></model>
		<model value='Camry'></model>
        <model value='Corolla'></model>
	</car>
    <car value='Skoda'>
		<model value='Octavia'></model>
		<model value='Superb'></model>
	</car>
</cars>
~~~

{{sample
	17_datatree/01_loading/02_xml_data.html
}}