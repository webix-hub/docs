External configuration
============================================
You have the possibility to load not only data but also DataTable configuration from external file or the server side.

<img src="datatable/external_configuration.png"></png>

Providing configuration as part of data
---------------------------------------

### Configuration from a JSON file

To load both data and configuration from JSON file, initialize DataTable as shown below:


~~~js
dtable = new webix.ui({
	container:"box",
	view:"datatable",
	url:"data/data-config.json" //path to json file. See the file content below
});
~~~


The specified **data-config.json** file should have the following structure:
{{snippet
'data-config.json' file
}}
~~~json
{
	"config":{ 
		columns:[
			{ id:"title",	header:"Film title", width:200},
			{ id:"year",	header:"Released",   width:80},
			{ id:"votes",	header:"Votes", 	 width:100}
		],
		height:100,
		autowidth:true
	},
	"data":[
		{id:"1", title:"The Shawshank Redemption", year:"1994", votes:"678790"},
		{id:"2", title:"The Godfather",            year:"1972", votes:"511495"}
	]
}
~~~
	
###Configuration from an XML file

To load both data and configuration from XML file, initialize DataTable as shown below:

~~~js
dtable = new webix.ui({
	container:"box",
	view:"datatable",
	url:"data/data-config.xml"// path to XML file. See the file content below
});
~~~

The specified **data-config.xml** should have the following structure:

{{snippet
'data-config.xml' file
}}
~~~xml
<?xml version='1.0' encoding='utf-8' ?>
<data>
	<config>
		<columns>
			<column id="title"   header="Film title"  width="200"></column>
			<column id="year"	  header="Released"	   width="80"></column>
			<column id="votes"	  header="Votes"	   width="100"></column>
		</columns>
		<height>100</height>
		<autowidth>true</autowidth>
	</config>
	<item id='1' title='The Shawshank Redemption' year='1994' votes='678790'></item>
	<item id='2' title='The Godfather'            year='1972' votes='511495'></item>
</data>
~~~


{{sample 15_datatable/01_loading/09_config_xml.html }}

Loading configuration from a separate file
----------------------------------------

###Configuring from the server side

To load DataTable configuration from the server side, initialize DataTable as shown below:

~~~js
webix.ajax("data/config.json", function(text){ 
	var config = webix.DataDriver.json.toObject(text);
	new webix.ui({
		container:"box",
		view:"datatable",
		columns:config,
		data: [
			{ id:1, title:"The Shawshank Redemption", year:1994,  votes:678790},
			{ id:2, title:"The Godfather",            year:1972,  votes:511495}
		]
	});	
});
~~~

The specified **config.json** file should have the following structure:

{{snippet
'config.json' file
}}
~~~json
[
	{ id:"title",	header:"Film title",  width:200},
	{ id:"year",	header:"Released" ,   width:80},
	{ id:"votes",	header:"Votes", 	  width:100}
]
~~~

###Configuring and populating from the server side

To load both data and configuration from the server side, initialize DataTable as shown below:
~~~js
webix.ajax("data/data-config.json", function(text){
	var obj = webix.DataDriver.json.toObject(text);
	new webix.ui({
		container:"box",
		view:"datatable",
		columns:obj.config,
		data:obj.rows
	});	
});
~~~



The specified **data-config.json** file should have the following structure:

{{snippet
'data-config.json' file
}}
~~~json
{
	"config":[
		{ id:"title",	header:"Film title", width:200},
		{ id:"year",	header:"Released",   width:80},
		{ id:"votes",	header:"Votes", 	 width:100}
	],
	"rows":[
		{ "id":1, "title":"The Shawshank Redemption", "year":1994, "votes":678790},
		{ "id":2, "title":"The Godfather",            "year":1972, "votes":511495}
	]
}
~~~
{{sample 15_datatable/01_loading/10_custom_configuration_format.html }}

@seolinktop: [javascript ui framework](https://webix.com)
@seolink: [ui datagrid](https://webix.com/widget/datatable/)