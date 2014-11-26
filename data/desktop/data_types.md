Supported Data Types
===================

The majority of data-presenting components take data in <acronym title="Extensible Markup Language">XML</acronym>, 
<acronym title="JavaScript Object Notation">JSON</acronym>, JSArray and <acronym title="Comma-Separated Values">CSV</acronym> formats. Still, three of 
them, namely [grouplist](desktop/grouplist.md), [treetable](desktop/treetable.md) and datatree/index.md support only XML and JSON datatypes since only they can show hierachy which is a key feature of these 
components. 

- **Data sources** and **loading methods** are described in [Data Loading](desktop/data_loading.md) section.
- **Data Drivers** that with processing lofic for each format are descriped in [Data Drivers](helpers/data_drivers.md);
- **Customization of Data Types** by changing default Driver behavior - [Customizing Data Types](desktop/custom_data_types.md).  

Data Type Samples
-------------------

Here we'll see how one and the same dataset looks in different formats while paying attention to [non-hierarchical](#nonhi) and [hierarchical](#hi) data.

##Non-hierarchical data {#nonhi}

<table border="1" width="100">
<tr bgcolor="#BCD6DE">
	<td>Person</td>
    <td>Place</td>
    <td>Age</td>
</tr>
<tr>
	<td>Nanny</td>
    <td>Alabama</td>
    <td>45</td>
</tr>
<tr>
	<td>Derek</td>
    <td>New York</td>
    <td>23</td>
</tr>
<tr>
	<td>Samuel</td>
    <td>Oregon</td>
    <td>32</td>
</tr>
</table>

###XML
~~~xml
<?xml version="1.0" encoding="UTF-8"?>
<data>
	<item id="1" person="Nanny" place="Alabama" age="45"/>
	<item id="2" person="Derek" place="New York" age="23"/>
    <item id="3" person="Samuel" place="Oregon" age="32"/>
</data>
~~~

###JSON Object
~~~json
[
	{ id:"1", person: "Nanny", place: "Alabama", age: "45" },
	{ id:"2", person: "Derek", place: "New York", age: "23" },
	{ id:"3", person: "Samuel", place: "Oregon", age: "32"}
]
~~~

###JSArray
~~~js
[
	[ "Nanny", "Alabama", "45" ],
	[ "Derek", "New-York", "23"],
	[ "Samuel", "Oregon", "32"]
]
~~~

###CSV

CSV, or Comma Separated Values, is a sequence of characters with rows and fields being separated by some breaks (comma, tab, new line).

~~~csv
Nanny, Alabama, 45
Derek, New-York, 23
Samuel, Oregon, 32
~~~

By default line anf field **delimiters** are "\n"(new line) and ","(comma) respectively. 

To change the logic of CSV parsing for the application components, look up the [related article](desktop/custom_data_types.md#customizingcsvparsinglogic).

##Hierarchical Data {#hi}

<img src="desktop/hierarchical_data.png">

###XML

By default records of any hierarchy level and their children are introduced with **item** tags:

~~~xml
<?xml version="1.0" encoding="UTF-8"?>
<data>
	<item value="animals" open="1">
		<item value="Fish">
        	<item value="Marine">
            	<item>Halibut</item>
            </item>
            <item value="Fresh Water">
            	<item>Rainbow Trout</item>
            <item/>
        </item>
		<item value='Mammals'>
        	<item value="Domestic">
            	<item>Cow</item>
            </item>
            <item value="Wild">
            	<item>Wolf</item>
            </item>
        </item>
	</item>
</data>
~~~

{{sample 17_datatree/01_loading/02_xml_data.html}}

###JSON

By default child records are stored in the **data** object property of the parent record. 
~~~json
[{id:"1", title:"Animals", data:[
	{id:"1.1", title:"Fish", data:[
    	{id:"1.1.1", title:"Fresh Water", name:"Halibut"},
        {id:"1.1.2", title:"Marine", name:"Rainbow Trout"}
    	]
    },
    {id:"1.2", title:"Mammals", data:[
    	{id:"1.2.1", title:"Domestic", name:"Cow"},
        {id:"1.2.2", title:"Wild", name:"Wolf"}
    	]
    }
	]
}]
~~~

{{sample 17_datatree/01_loading/01_json_data.html}}

[Custom Tags for XML and JSON Data](desktop/custom_data_types.md)

@index:
 - desktop/custom_data_types.md

@complexity:1