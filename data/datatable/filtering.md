DataTable Filtering
===================
The library provides ability to <a href="http://webix.com/widget/datatable/" title="filter in datatable widget">filter data</a> on client-side by one or several criteria using for this built-in or customly created filters.


Filters in the header
--------------------------
You can define built-in filter in the header or footer of a column. The following types of filters are available:

- **textFilter** - text filter. Retrieves values that contain mask defined through text field.
- **selectFilter** - select filter. Retrieves values which contain mask defined through dropdown list of possible values.
- **numberFilter** - text filter used for number columns. Retrieves values which contain mask defined through text field. Allows users to use the following comporison operators in it:
	- '=' - equal to;
	- '>' - greater than;
	- '<' - less than;
	- '<=' - less or equal;
	- '>=' - greater or equal.

- **dateFilter** - text filter used for date columns. Retrieves values that contain mask defined through text field.<br> Allows users to use the following comporison operators in it:
	- '>' - greater than;
	- '<' - less than;
	- '<=' - less or equal;
	- '>=' - greater or equal.
    
There are 3 ways you can input data to the  **dateFilter**:

1. '*yyyy*' - 4-digits year;
2. '*mm.yyyy*' - 2-digits month and 4-digits year separated by point;
3. '*dd.mm.yyyy*' - 2-digits day, 2-digits month and 4-digits year separated by points

- **serverFilter** - text filter used for data column. Retrieves values that contain mask defined through text field and sends a request to server to return filtered dataset. <br> Request parameters include: 
	- *count* - the number of data records to return. Its value depends on [dynamic loading](desktop/dynamic_loading.md) parameters, if any;
    - *start* - ID of the data record to start from (0 - beginning). Its value depends on [dynamic loading](desktop/dynamic_loading.md) parameters, if any;
	- *filter[column_name]* - name of the column (in brackets) for which filtering is performed. Its value is a text value you've entered in the filter input. 

If **serverside sorting** is enabled, data is both filtered and sorted on server. 

###Defining header filters
    
Built-in filter is set by property **content** of the **header** attribute. Note, to add a filter to the header(footer), the header(footer) must be specified as array.


<table class="list">
	<caption class="caption">
		<strong>Table 1 </strong>
		Built-in filters
	</caption>
    <thead>
	<tr>
		<th align="left">
			<strong>Filter type</strong>
		</th>
		<th align="left">
			<strong>Code example</strong>
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><img src="datatable/text_filter.png" /></td>
		<td>
~~~js
columns:[
	{id:"title",header:[
     "Film title",{content:"textFilter"}]
    },
	{id:"year",header:"Released"},
	{id:"votes",header:"Votes"}]
~~~
    </td>
	</tr>
	<tr>
		<td><img src="datatable/select_filter.png" /></td>
		<td>
~~~js
columns:[
	{id:"title", header:[
     "Film title",{content:"selectFilter"}]
	},
	{id:"year", header:"Released"},
	{id:"votes", header:"Votes"}]
~~~
        </td>
	</tr>
    <tr>
		<td><img src="datatable/numeric_filter.png" /></td>
		<td>
~~~js
columns:[
	{id:"title", header:"Film title"},
	{id:"year", header:[
     "Released",{content:"numberFilter"}]
    },
	{id:"votes", header:"Votes"}]
~~~
    	</td>
	</tr>
    <tr>
		<td><img src="datatable/date_filter.png" /></td>
		<td>
~~~js
columns:[
	{id:"title",header:"Film title"},
	{id:"year", header:[
      "Released",{ content:"dateFilter"}],
      format:webix.i18n.dateFormatStr}]
~~~
        </td>
	</tr>
	</tbody>
</table>



Note, each time you start to type text in such a filter, DataTable invokes the [filterByAll()](api/ui.datatable_filterbyall.md) method. Each time the method is called, all data is re-filtered (previous results aren't preserved).

###AND logic
By default, when you specify filters in several columns, DataTable applies AND logic to them, i.e. the table will display just records that meet 
all criteria at once.


###OR logic

<img src='datatable/filtering_or_logic.png'/>

In case you want to apply OR logic (to display records that meet at least one of criteria) you should redefine the [filterByAll()](api/ui.datatable_filterbyall.md) method. For example, it can look like this:

{{snippet
Implementing OR logic for filters
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:["Film title", {content:"textFilter"}] },
		{ id:"year",  header:["Released",  {content:"selectFilter"}] },
        { id:"votes", header:"Votes" }
	]
});
			
grid.filterByAll=function(){
//gets filter values
	var title = this.getFilter("title").value;
	var year = this.getFilter("year").value;
//unfilters the table if values were not selected
	if (!title	&& !year) return this.filter();
//filters using OR logic
	this.filter(function(obj){
		if (obj.year == year) return true;
		if (obj.title.toLowerCase().indexOf(title)!=-1) return true;
		return false;
	});
};
~~~

{{sample 15_datatable/03_filtering/03_or.html }}


###Custom filtering rules

A filter is a set of filtering rules applied to specific content. When you specify a filter you have the possibility to set additional filtering rules for it. 
To set additional filtering rule for the filter you must create a custom function implementing those rule and set property **compare** of the **header**(**footer**) attribute to this function.

Custom function specified as a filtering rule takes 2 parameters:

1. **value** - a column value (the function checks values by turn);
2. **filter** - the entered in the filter value.

For example, to make DataTable filtered just by the start letter of column values, you may specify the filtering rule shown below:

{{snippet
Filtering by the start letter of the column values
}}
~~~js
function startCompare(value, filter){
	value = value.toString().toLowerCase();
	filter = filter.toString().toLowerCase();
	
	return value.indexOf(filter) === 0;
}

grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:["Film title",{content:"textFilter", compare:startCompare}]},
		...
	]
});	
~~~

{{sample 15_datatable/03_filtering/07_rules.html }}


###Filtering by multiple criteria entered via one input

<img src='datatable/filtering_one_input.png'/>


There is the possibility to filter DataTable by different columns using one input for this. 

This can be done by:

1. Redefining method [filterByAll()](api/ui.datatable_filterbyall.md);
2. Specifying an additional filtering rule.

{{snippet 
Filtering by multiple criteria (by using method filterByAll)
}} 
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"rank",	header:["#", { content:"textFilter", colspan:3}] },
		{ id:"title",	header:["Film title",""] },
		{ id:"year",	header:["Released",""] },
	]
});	

grid.filterByAll=function(){
//gets filter values
	var text = this.getFilter("rank").value.toString().toLowerCase();
//unfilters for empty search text
	if (!text) return this.filter();

//filters using OR logic
	this.filter(function(obj){
		if (obj.year == text) return true;
		if (obj.title.toLowerCase().indexOf(text)!=-1) return true;
		return false;
	});
};			
~~~

{{sample 15_datatable/03_filtering/04_one_for_all.html }}


{{snippet 
Filtering by multiple criteria (by specifying an additional filtering rule)
}} 
~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"rank",	header:["#", {content:"textFilter", compare:oneForAll, colspan:3}]},
		{ id:"title",	header:["Film title",""] },
		{ id:"year",	header:["Release year",""]}
	],
});

function oneForAll(value, filter, obj){
	if (obj.year.toString().toLowerCase().indexOf(filter) !== -1;) return true;
	if (obj.title.toLowerCase().indexOf(text)!=-1) return true;
	return false;
};
~~~

{{sample 15_datatable/03_filtering/04_one_for_all_2.html }}


HTML inputs as filters for DataTable
---------------------

<img src='datatable/filtering_custom.png'/>

###Setting an HTML input as datatable filter

{{snippet
Setting a Custom Filter
}}
~~~js
<input type="text" id='myfilter'> //input

grid = new webix.ui({  //component
	view:"datatable",
    columns:[
    	{id:"title", ...}
    ]
});

grid.setFilter(document.getElementById("myfilter"), 
	{ columnId:"title" }, //column to filter
	{
		getValue:function(node){
			return node.value;
		},
		setValue:function(node, value){
			node.value = value;
		}
});
~~~

{{sample 15_datatable/03_filtering/06_custom_built.html}}

###Custom Filtering with filter() method

In addition, the library gives you method [filter()](api/link/ui.datatable_filter.md) to provide fully custom filtering. 


For example, if you add an input and button to the page and want to filter DataTable by clicking on it, you code may look like this:

{{snippet
Implementing a custom filter
}}
~~~js
<input type="text"><input type="button" value='filter' onclick='filterText(this);'>

<script>
	function filterText(node){
		var text = node.previousSibling.value;
		if (!text) return grid.filter();

		grid.filter(function(obj){  //grid is a dataTable instance
			return obj.year == text;
		})
	}
</script>
~~~

Note, in the DataTable constructor you need to specify no parameters.

{{sample 15_datatable/03_filtering/05_custom.html }}


