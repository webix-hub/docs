Data drivers
============

There are 5 default data drivers: 

- *json*
- *xml*
- *html*
- *csv*
- *jsarray*


Customizing data driver
------------------------

###XML

In case of XML you can redefine 
<table class='list'>
	<tr><th>Element</th><th>Type</th><th>Code</th></tr>
    <tr><td>data tag</td>
    <td>xpath</td>
    <td>
~~~js
webix.DataDriver.xml.records = "/*/item";
~~~
    </td></tr>
	<tr><td>configuration tag</td>
    <td>xpath</td>
    <td>
~~~js
webix.DataDriver.xml.config = "/*/config";
~~~
    </td></tr>
	<tr><td>child tag</td>
    <td>tag name</td>
    <td>
~~~js
webix.DataDriver.xml.child = "item";
~~~
    </td></tr>
</table>

for example to load data in Webixgrid format you can use 

~~~js
webix.DataDriver.xml.records = "/rows/row";
~~~

Above line will redefine data parsing logic for all xml sources, if you wish to alter only one - you can create a new datatype from existing one as. 

~~~js

webix.DataDriver.mytype = webix.copy(webix.DataDriver.xml);
webix.DataDriver.mytype.records = "/rows/row";
...
dtable.load("data.xml", "mytype");
~~~

### CSV

It is possible to define row and cell separators

~~~js
webix.DataDriver.csv.row = "\n";
webix.DataDriver.csv.cell = ",";
~~~

### HTML

You can redefine which tag in html will be processed as data tag

~~~js
webix.DataDriver.html.tag = "LI";
~~~

### JSON

You can redefine which object propery stores sub-items ( used for hierarchical dataset, like one for tree, treegrid, grouplist etc. )

~~~js
webix.DataDriver.json.child = "data";
~~~



Methods of data driver
----------------------

~~~js
//convert string to object
var data = driver.toObject(data);
//return array of all records in datasource
var records = driver.getRecords(data)
//return single data object
var data = driver.getDetails(records[0]);
~~~


### XML

~~~js
//run xpath
var elements = driver.xpath("/some/xpath", data);
//convert xml tag to json object
var obj = driver.tagToObject(elements[0]);
//convert string to js data-types, numbers and booleans
obj = driver.assignTypes(obj);
~~~






Creating new data driver
------------------------

In addition to built in data types , it possible to define custom ones

The structure of driver is the following:


~~~js
Webix.DataDriver.some={ //some - the name of the type
	toObject:function(text,xml){
                ...
		return text; 
	},
	getRecords:function(data){ 
                var result = [];
                ...
		return result;
	},
	getDetails:function(data){
                var result = {}
                ... 
		return result;
	},
	getInfo:function(data){
		return { 
		 _size:some, 
		 _from:other 
		};
	}
};

~~~


For a start, we have some data that we want to use as a new data type.
The first thing we need to make with this data - conversion into an intermediate object (an object that will be used as an input parameter in the other functions). 
  
  
So, our first step -  **toObject(text, xml)** function. The function is called after data loading or directly in the **parse** method and returns the intermediate data object.
  
+ _text_ - incoming data.
+ _xml_ - xml object (for xml loading scenario. For other data types can be ignored).


Then, we form an array of records using data from our intermediate object -  **getRecords(data)** function.

+ data - the intermediate object from the previous step.

Having an array of records we need to specify a set of properties for each single record - the third step - **getDetails(data)**.
  
+ data - an element of the array from the previous step.

The last action has sense just for dynamic data loading scenarios. It's a function that gets count of data and position at which new data needs to be inserted. The fourth step - **getInfo(data)**. The function returns count of data and the appropriate position mentioned above: '0' if a value is unknown or unnecessary.

+ data - the intermediate object from step 1

So, making these four or even three steps you can specify any data type and then use it while developing.  

@complexity:3