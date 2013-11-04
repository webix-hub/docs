Pivot
=====

What is pivot...


How to init Pivot
-----------------

How to use Pivot
----------------

### Rows and Columns
Fields mapped to Columns will define the x-scale of pivot
Fields mapped to Rows will define the y-scale of pivot
Fields mapped to Data will define the data part of pivot

### Operation on Data
There are 4 main operations other data 

- sum  - shows the sum of values
- max  - shows the max value
- min  - shows the min value
- cont - shows the number of values

You can add your own operation. 

### Filters

There are tow type of filter 

- select filters
- text filters

Text filters do support base math comparators, you can type something like "< 100", "> 2.5" or "= 12"  
If there is no comparation operator, filter will use text match for filtering


API
----------


### Constructor

~~~js
webix.ui({
     container:"testA",
     view:"pivot",
     data:pivot_dataset
     structure: {
         rows: ["form", "name"],
         columns: ["year"],
         values: [{ name:"gdp", operation:"sum"}, { name:"oil", operation:"sum"}],
         filters:[]
     }
});
~~~

### Supported options

- container -  id of html element where pviot need to be initialized, optional
- data - data to be shown in pivot, optional
- structure - initial configuration of pivot, optional
- fieldMap - can be used to define custom labels for fields, optional 
- max - boolean, enables or disables highlighting of max values, optional
- min - boolean, enables or disables highlighting of min values, optional

#### Structure

- rows - array of fields which will be used as pivot's rows
- columns - array of fields which will be used as pivot's columns
- values - array of fields which will be used as pivot's data
- filters - array of fields which will be used as filters


### Loading data

You can use js API to load the data in pivot, or you can use *url* and *data* parameters of constructor for the same
~~~js
//load data from json structure
pivot.parse(data);
//load data from external ulr
pivot.load(url);
~~~

### Loading configuration

~~~js
//get current configuration
var config = pivot.getStructure();
//set configuration
pivot.setConfiguration(config);
~~~

Format of "config" is the same as "structure" parameter of the constructor

~~~js
var config = {
    rows: ["form", "name"],
    columns: ["year"],
    values: [{ name:"gdp", operation:"sum"}, { name:"oil", operation:"sum"}],
    filters:[]
}
~~~

### Data export

You can export result to PDF or Excel

~~~js
pivot.toPDF();
pivot.toExcel();
~~~

### More granular API
You can access the DataTable object by using
~~~js
pivot.$$("data");
~~~
And use any of datatable [events](api/refs/ui.datatable_events.md) of [API methods](api/refs/ui.datatable_methods.md)

~~~js
pivot.$$("data").attachEvent("onAfterSelect", function(id){ 
  webix.message("row selected"); 
})
~~~



Configuration
-------------

### Localization

By defautl all fields in pivot have english names, but you can change it by adding custom locale configuration on the page. 

~~~js
webix.i18n.pivot = {
	columns: "Columns",
	count: "count",
	fields: "Fields",
	filters: "Filters",
	max: "max",
	min: "min",
	operationNotDefined: "Operation is not defined",
	pivotMessage: "[Click to configure]",
	rows: "Rows",
	select: "select",
	sum: "sum",
	text: "text",
	values: "Values",
	windowMessage: "[move fields into required sector]"
};
~~~


### Renaming filds

By default Pivot uses names of data fields to name the columns. To change this behavior you can define fieldMap property. 
If you have data like 
~~~js
[{ a1:100, a2:1.34 }, ...]
~~~

you can show beautiful names of columns instead of a1 and a2 by using code like next

~~~js
webix.ui({
  view:"pivot",
  fieldMap:{ "a1" : "GDP", "a2" : "Grow ratio" },
  ...
})
~~~


### Adding extra operations

Pivot provides only 4 operations by default ( sum, count, min, max ) 
You can implement your own like next

~~~js
pivot.operations.abssum = function(data) {
    //data - array of values which need to be processed
    var sum = 0;
    for (var i = 0; i < data.length; i++) {
       var num = window.parseFloat(data[i], 10);
       if (!window.isNaN(num))
          sum += Math.abs(num);
       }
    return sum;
};
~~~
