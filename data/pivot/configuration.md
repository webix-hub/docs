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

Format of the **config** object is the same as "structure" parameter of the constructor:

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
		{ name: "gdp", operation: "sum" }, // GDP values will be summed up
		{ name: "oil", operation: "max" } // max oil value will be shown
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

The method takes three parameters:

- **name** - (string) the operation's name
- **function** - (function)	the function which will be called for each cell in the column with this operation.
It takes an array with values of child cells
- **options** - (object) object with operation options (*leavesOnly* or *ids*, see details below)
    
Besides adding an operation, the api/ui.pivot_addoperation.md method allows specifying two properties: 

- *leavesOnly* - (boolean) if set to *true*, the operation function will take only values of child rows that don't contain sub-rows.
- *ids* - (boolean) if set to *true*, the operation function will take ids of ungrouped data items as the 4th parameter.    
    
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

{{sample 61_pivot/03_table_api/02_adding_operation.html}}

{{sample 61_pivot/03_table_api/04_weighted_average.html}}


Sum Counters for Columns and Rows
----------------------------------

To calculate the total sum for each row, **total column** can be set via the api/ui.pivot_totalcolumn_config.md property 

~~~js
webix.ui({
    view:"pivot",
    totalColumn:"sumOnly",
    //...
});
~~~

To calculate the total sum per column, **footer** can be defined via the api/ui.pivot_footer_config.md property: 

~~~js
webix.ui({
    view:"pivot",
    footer: "sumOnly",
    //...
});
~~~

The "sumOnly" value of both properties forces the summing function to process only rows/columns that contain sums already. 

{{sample 61_pivot/03_table_api/01_total_column.html}}

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

Renaming Fields 
-------------------

By default, Pivot uses data item properties for column names. But if you have dataset structured like below, the default pattern becomes unsuitable:

~~~js
[{ a1:100, a2:1.34 }, ...]
~~~

In this case, you can use the api/ui.pivot_fieldmap_config.md property to set beautiful names for columns instead of *a1* and *a2*:

~~~js
webix.ui({
	view: "pivot",
	fieldMap: { "a1" : "GDP", "a2" : "Grow ratio" },
  	//...
});
~~~

{{sample 61_pivot/01_init/06_custom_titles.html}}

Setting Readonly Mode
----------------------

In order to disable changing of the Pivot configuration settings, you can specify the api/ui.pivot_readonly_config.md config property with the "true" value:

~~~js
webix.ui({
	view: "pivot",
    readonly:true,
	//...
});
~~~


You can also set a readonly title which will be displayed
instead of the link which opens a popup with Pivot configuration settings. Use the api/ui.pivot_readonlytitle_config.md for this purpose:

~~~js
webix.ui({
	view: "pivot",
    readonlyTitle:"New Title",
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