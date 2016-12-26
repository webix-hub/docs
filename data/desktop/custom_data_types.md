Customizing Data Types
=============

By default JSON children are stored in the **data** property object while XML records (both parents and children) are introduced by an **item** tag. 
However, any custom tags will do provided that you **create a custom data format** based on a prebuilt one. 

Parsing logic for each of the supported data types is stored in the **[webix.DataDriver](helpers/data_drivers.md)** object (webix.DataDriver.json, webix.DataDriver, xml, etc.). There you can change default tags in two ways:

- change the logic of the existing data driver - [described here](helpers/data_drivers.md). All incoming data of the state type will be processed according to the new logic.
- copy the existing driver object and create a custom one on the base of it. The new processing logic will be applied only to data with the new data format you specify as **datatype.** Described below.

Custom Tags for JSON
--------------------
{{snippet
Default JSON data with 2 nesting levels
}}
~~~js
[
	{ id:"1", open:true, value:"The Shawshank Redemption", data:[
		{ id:"1.1", value:"Part 1" data:[
			{id:"1.1.1", value:"Page 1"},
			{id:"1.1.2", value:"Page 2"}
		]},
		{ id:"1.2", value:"Part 2" }
	]},
	{ id:"2", value:"The Godfather", data:[
		{ id:"2.1", value:"Part 1" }
	]}
]
~~~

**Declaring the new format:**
~~~js
var myjson = webix.DataDriver.myjson = webix.copy(webix.DataDriver.json);
~~~

**Changing tags:**

Elements of the first nesting level will be stored in **parts**, while the second-level ones will be stored in **pages.**
~~~js
myjson.child=function(obj){
				if (obj.$level == 1)
					return obj.parts;
				if (obj.$level == 2)
					return obj.pages;
			};
//or, if you need the same property for all children
myjson.child="parts";
~~~

**New Dataset:**

~~~js
[
	{ id:"1", open:true, value:"The Shawshank Redemption", parts:[
		{ id:"1.1", value:"Part 1" pages:[
			{id:"1.1.1", value:"Page 1"},
			{id:"1.1.2", value:"Page 2"}
		]},
		{ id:"1.2", value:"Part 2" }
	]},
	{ id:"2", value:"The Godfather", parts:[
		{ id:"2.1", value:"Part 1" }
	]}
]
~~~

{{note
Don't forget to specify the name of the new format as the **datatype** for your component!
}}

~~~js
webix.ui({
	view:"treetable",
	//..config
	datatype:"myjson"
});
~~~

{{sample 17_datatree/01_loading/01_json_data.html}}

Custom Tags for XML
---------------------

{{snippet
Default XML Data
}}
~~~xml
<data>
	<item value='The Shawshank Redemption' open='1'>
		<item value='part1'></item>
			<item>Page 15</item>
			<item>Page 16</item>
		<item value='part2'></item>
	</item>
</data>
~~~

**Declaring the new format:**

~~~js
var myxml = webix.DataDriver.myxml = webix.copy(webix.DataDriver.xml);
~~~

**Changing tags:**
~~~js
myxml.records = "/*/book";

myxml.child = function(obj){
	if (obj.$level == 1)
		return obj.part;
	if (obj.$level == 2)
		return obj.page;
}
//or, if you need the same property for all children
myxml.child="part";
~~~

**New Dataset:**

~~~js
<data>
	<book value='The Shawshank Redemption' open='1'>
		<part value='part1'>
			<page>Page 15</page>
			<page>Page 16</page>
		</part>
		<part value='part2'></part>
	</book>
</data>
~~~

{{note
Don't forget to specify the name of the new format as the **datatype** for your component!
}}

~~~js
webix.ui({
	view:"treetable",
	//..config
	datatype:"myxml"
});
~~~

{{sample 17_datatree/01_loading/02_xml_data.html}}

##Customizing CSV parsing logic

###Global changes

The default parsing logic of CSV data can be changed **globally**:

~~~js
webix.DataDriver.csv.cell = "\t";
webix.DataDriver.csv.row = "|";
~~~

Now, all the components that use "csv" datatype, will be parsed according to new rules. 

###Creating custom datatype

A custom datatype should be created in case you wish to apply it to one or several components while leaving the global CSV parsing unchanged. 


~~~js
webix.DataDriver.mycsv = webix.extend({
	row:"|",	
	cell:"-"
}, webix.DataDriver.csv);
~~~

Now, you can use it in component instances: 

~~~js
var grid = webix.ui({
	view:"datatype",
    datatype:"mycsv",
    data:'1-The Shawshank Redemption|2-The Godfather'
});

//or for loading data in that format
$$('mylist').load("data.csv","mycsv");			
~~~

@complexity:3
