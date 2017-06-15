Data Mapping
===============

It's possible to define mapping between loaded data and columns of datatable. 

By default, DataTable will assume that incoming json/xml has attribute with the same name as columns id. 
So for well formed xml/json you need to define only column id. 

In case of xml/json in custom format, you can use "map" attribute of column,
it defines which property of loaded data object need to be used for that column in grid

{{snippet Loading from XML }}
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
    	{
        	id:"size", 
        	map:"#cells[0]#", 
        	header:"Will use value from first cell sub-tag" 
        },
        { 
        	id:"url",  
            map:"#details#", 
            header:"Will use value from details attribute or sub-tag" 
        }
    ],
    datatype:"xml"
	url:"data/data.xml"
}); 
~~~


The code above will correctly show data from XML as in: 

~~~xml
<rows>
    <item details="http://mysite.com"><cell>15x24</cell><cell>19.02.2008</cell></item>
    <item details="http://mysite.com"><cell>10x12</cell><cell>22.02.2008</cell></item>
    ...
</rows>
~~~


Specific of CSV and JsArray data types
--------------------------------------

During csv(jsarray) parsing, its columns are named as data1 .. dataN
You can use that values as column's ids 

~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
    	{ id:"data1"  },
        { id:"data2"  }
    ],
~~~
{{sample 15_datatable/01_loading/01_inline_data.html }}


or you can use mapping, to define more meaningful names for columns

~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
    	{ id:"url",   map:"#data1#"  },
        { id:"size",  map:"#data2#"  }
    ],
~~~


Converting values to the native type
-------------------------------------

When you loading data from xml, all values will be loaded as string ( in json - string or numbers ), but it is not very useful
as we need to work with different types of objects, date objects for example. 

Mapping logic allows to define the native type of value, and during data mapping
it will be converted from the string to the defined type


~~~js
webix.ui({
	view:"datatable",
    columns:[
    	{ id:"start", map:"(date)#start#" }
    ]
~~~
{{sample 15_datatable/20_templates/06_dates_string.html }}

If id of columns and name of mapped field is equal you can shorten it to 

~~~js
webix.ui({
	view:"datatable",
    columns:[
    	{ id:"start", map:"(date)" }
    ]
~~~



Scheme data mapping 
-------------------------------

If all above doesn't work you can use scheme property to define custom data mapping function

~~~js
webix.ui({
	view:"datatable",
    scheme:{
         $init:function(obj){
         //obj - data object from incoming data
             obj.count = obj.cells[0]; //set value based on some data in incoming dataset
             obj.price = obj.cells[1];
             obj.total = obj.price * obj.count;   //or calculate values on the fly
         }
    },
    columns:[
        { id:"count" },
        { id:"price" },
        { id:"total" }
    ],
    ...
~~~

[Data scheme](desktop/data_scheme.md) if described in detail separately.


Common mapping for all data items
-----------------------

Data can be mapped initially to created aggregated properties that can be later used as column IDs:

~~~js
webix.ui({
	view:"datatable",
	map:{
		name:"#firstname# #lastname#",
		birth:"(date)#birthdate#"
	},
	columns:[
    	{ id:"name", header:"User name" },
        { id:"birth", header:"Date of birth"}
    ],
    data:[
    	{ id:1, firstname:"Adam", lastname:"Smith", birthdate:new Date(1985, 1, 1) },
        { id:2, firstname:"Tom", lastname:"Brown", birthdate:new Date(1986, 2, 2) },
    ]
});
~~~



@seolinktop: [js framework](https://webix.com)
@seolink: [datagrid javascript](https://webix.com/widget/datatable/)