Configuring Pivot
================

Getting and Setting Configuration Object
---------------------------

You can get and set the pivot configuration object as follows:

~~~js
//get current configuration
var config = pivot.getStructure();

//set configuration
pivot.setStructure(config);
~~~

Format of a **config** object is the same as "structure" parameter of the constructor:

~~~js
var config = {
	rows: ["form", "name"],
	columns: ["year"],
	values: [
    	{ name: "gdp", operation: "sum"}, 
        { name: "oil", operation: "sum"}
    ],
	filters:[]
}
~~~

{{sample 61_pivot/01_init/03_configuring.html}}

Defining Operations on Data
--------------------------

Operations are set within [Pivot structure object](pivot/initialization.md#struct) in the **values** array. **Name** refers to data item property:

~~~js
view: "pivot",
structure: {
	values: [
		{ name: "gdp", operation: "sum" }, //gdp values will be summed
		{ name: "oil", operation: "max" } //max oil value will be shown
	]
}
~~~

There are **4 prebuilt operations** over data: 

- **sum**  -  default, shows the sum of values of this property;
- **max**  - shows the max value of this property found in the dataset;
- **min**  - shows the min value of this property found in the dataset;
- **count** - shows the number of occurrences of this property in the dataset.

If needed, you can **add your own <span id="operation">operation</span>** in one of the following ways:

1) through the **operations** property

~~~js
pivot.operations.abssum = function(data) {
	// data - array of values which need to be processed
	var sum = 0;
	for (var i = 0; i < data.length; i++) {
		var num = window.parseFloat(data[i], 10);
		if (!window.isNaN(num))
		sum += Math.abs(num);
	}
	return sum;
};
~~~

And use it as: 

~~~js
values:[ name:"oil", operation:"abssum"]
~~~

{{sample 61_pivot/01_init/04_define_function.html}}

2) with the help of the api/ui.pivot_addoperation.md method 

Besides adding an operation, it allows specifying the *leavesOnly* property.
This property means that the operation function will take only values of leaves child rows (rows that do not have sub-rows).
The method takes three parameters:

- name - (string) the operation's name
- function - (function)	the function which will be called for each cell in the column with this operation.
It takes an array with values of child cells
- options - (object) object with operation options. Currently, there's just one option - leavesOnly. 
If it's set to *true*, the operation function will take values of child rows that do not contain sub-rows.
    
~~~js
grida.addOperation("avr", function(data) {
    var sum = 0;
    for (var i = 0; i < data.length; i++) {
        if( data[i] )
        sum += window.parseFloat(data[i], 10);
    }
    return data.length?(sum/data.length):0;
}, {leavesOnly: true});
~~~

{{sample 61_pivot/03_table_api/03_adding_operation.html}}


Sum counters for columns and rows
----------------------------------

To calculate the total sum for each row, **total column** can be set: 

~~~js
view:"pivot"
totalColumn: "sumOnly",
...
~~~

To calculate the total sum per column, **footer** can be defined: 

~~~js
view:"pivot"
footer: "sumOnly",
...
~~~

{{sample 61_pivot/03_table_api/02_total_column.html}}

The "sumOnly" value of both properties forces the summing function to process only rows/columns that contain sums already. 

Filters
--------

Filters are set within [Pivot structure object](pivot/initialization.md#struct) in **filters** array. **Name** refers to data item property used for filtering:

~~~js
view:"pivot",
structure: {
	filters: [
		{ name: "name", type:"select" },
		{ name: "continent", type: "text" }
	]
}
~~~

There are two types of filters: 

- **select**  - filters by options automatically gathered from a dataset (all unique values of this property). For instance, if you choose *Continents*, then all unique continent names from the dataset become options;
- **text** - filters by symbols in the text field. It supports base **math comparison operators**, so you can type something like "< 100", "> 2.5" or "= 12"  
If there is no operator, filter will use text match for filtering.

Renaming fields 
-------------------

By default, Pivot uses data item properties for column names. But if you have dataset structured like below, the default pattern becomes unsuitable:

~~~js
[{ a1:100, a2:1.34 }, ...]
~~~

In this case, you can use **fieldMap** property to set beautiful names for columns instead of *a1* and *a2*:

~~~js
webix.ui({
	view: "pivot",
	fieldMap: { "a1" : "GDP", "a2" : "Grow ratio" },
  	//...
});
~~~

{{sample 61_pivot/01_init/06_custom_titles.html}}

Setting readonly mode
----------------------

In order to disable changing of the pivot configuration settings, you can specify the *readonly* config property with the "true" value:

~~~js
webix.ui({
	view: "pivot",
    readonly:true,
	//...
});
~~~

{{sample 61_pivot/01_init/10_readonly.html}}


Specifying Header Sorting
---------------------------

You can enable header sorting in Pivot by specifying the **sort** property with the "string" value in the column configuration:

~~~js
webix.ui({
	view: "pivot",
	id: "pivot",
	structure:{
    	rows: ["year"],
    	columns: [{id:"form",sort:"string"}, {id:"continent",sort:"string"}],
    	values: [{name:"balance", operation:"sum"}]
	}
});
~~~

It's also possible to define the sorting direction in the column. By default, the direction is ascending. 
You can change it by setting the **sortDir** property with the "desc" value in the column configuration:

~~~js
structure:{
	rows: ["year"],
	columns: [
    	{id:"form",sort:"string", sortDir:"desc"}, 
        {id:"continent",sort:"string"}
    ],
	values: [{name:"balance", operation:"sum"}]
}
~~~

{{sample 61_pivot/01_init/08_sorted_header.html}}