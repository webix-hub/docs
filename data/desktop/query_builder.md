Query Builder
==============

{{pronote
The widget is available in the **Webix Pro** edition.
}}


API Reference
---------------

- [Methods, properties and events](api/refs/ui.querybuilder.md)

External resources
-------------------

{{note The sources of this component are located in a separate folder of the library package - **/querybuilder**}}
- There are  online samples at [docs.webix.com/samples](http://docs.webix.com/samples/66_querybuilder/)

Overview
----------

Query Builder is handy widget for building complex filters. It can be used standalone or in tandem with data widgets that have filtering abilities, e.g. Grid and Pivot,
to make filtering more profound and resultative (specific).

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/querybuilder_front.png">

Initialization
------------------

To initialize Query Builder on the page, you need to specify its configuration as follows:

~~~js
webix.ui({
	view: "querybuilder",
	id: "querybuilder",
	fields: [
		{ id:"fname", 	value:"First Name", type:"string" },
		{ id:"lname", 	value:"Last Name",  type:"string" },
		{ id:"age",  	value:"Age", 		type:"number" },
		{ id:"bdate",  	value:"Birth Date", type:"date" }
	]
})
~~~

The main configuration property is **fields**. It is an array of field objects that will be used for filtering the dataset.

Each field object has three properties (all are strings):

- *id* - the field id
- *value* - the field value
- *type* - the type of the field

{{sample}}




@edition:pro

{{@todo: check the folder name in the package and links to samples}}