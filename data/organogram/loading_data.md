Loading Data into Organogram
===============

Webix Organogram can get data in the following predefined [data formats](desktop/data_types.md):

1. JSON (default);
2. XML.

*[Details and  examples of data formats](datatree/data_formats.md) in tree-like structures*

###JSON

~~~js
[
	{ id:"1", value:"Manager", data:[
		{ id:"1.1", value:"Store Manager" },
		{ id:"1.2", value:"Office Assistant" , data:[
			{ id:"1.2.1", value:"Dispatcher", data:[
				{ id:"1.2.1.1", value:"Drivers" }
			] }
		] }
     ]}
]
~~~

###XML

~~~xml
<data>
	<item id="1" value='Manager'>
		<item id="1.1" value='Store Manager'></item>
		<item id="1.2" value='Office Assistant'>
        	<item id="1.2.1" value='Dispatcher'>
            	<item id="1.2.1.1" value='Drivers'></item>
            </item>
        </item>
	</item>
</data>
~~~

There are two main ways you can specify the data source for Organogram:

1. Define the data set in the object initialization;
2. Use api/link/ui.tree_parse.md or api/link/ui.tree_load.md methods.

Both methods lead to the same result.

{{note
If you load XML data you need to set the api/link/ui.tree_datatype_config.md property in the constructor config or the second parameter of the
api/link/ui.tree_parse.md / api/link/ui.tree_load.md method to the name of the expected data type, i.e. 'xml'.
}}

Loading from inline dataset
-----------------------------------------
If you want to specify the data set directly on the page, you can use:

1. property api/link/ui.tree_data_config.md 
2. method api/link/ui.tree_parse.md


{{snippet
Specifying data inline
}}
~~~js
chart_data = [
	{id:"root", value:"Board of Directors",  data:[
		{ id:"1", value:"Managing Director", data:[
			{id:"1.1", value:"Base Manager", data:[
				{ id:"1.1.1", value:"Store Manager" },
				{ id:"1.1.2", value:"Office Assistant", data:[
					{ id:"1.1.2.1", value:"Dispatcher", data:[
						{ id:"1.1.2.1.1", value:"Drivers" }
					] }

				] },
				{ id:"1.1.3", value:"Security" }
			]},
			{ id:"1.2", value:"Business Development Manager", data:[
				{ id:"1.2.1", value:"Marketing Executive" }
			]},
            
            ...
		]}
	]}
];

var orgChart = new webix.ui({
  view:"organogram",
  ...
  data: chart_data
});

//or 
orgChart.parse(chart_data)
~~~
{{editor http://webix.com/snippet/d9458920	Organization Chart}}


Loading from a data file
------------------------
To load data from a file on the server, you can use:

1. property api/link/ui.tree_url_config.md
2. method api/link/ui.tree_load.md

Remember, in case of XML data you should specify the data type explicitly as 'xml':

~~~js
orgChart = new webix.ui({
  view: "organogram",
  ...
  url: "data/data.xml",
  datatype: "xml"
});
//or
orgChart.load('data/data.xml', 'xml');
~~~


Loading from a database
-----------------------

As the Organogram component is based on the TreeStore, you can also load data from a database on the server.
For the details, read the article datatree/loading_data.md#loadingfromadatabase.

@edition:pro
