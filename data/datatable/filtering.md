 DataTable Filtering
===================
The library provides ability to <a href="http://webix.com/widget/datatable/" title="filter in datatable widget">filter data</a> on client-side by one or several criteria using for this built-in or customly created filters.


Filters in the header
--------------------------

You can define a built-in filter in the header or footer of a column. Webix offers 8 filter types:

- in a standard free version:
	- **textFilter**;
	- **serverFilter** (text-based);
    - **serverSelectFilter** (select-based);
	- **selectFilter**;
	- **numberFilter**;
    - **dateFilter**;
- additionally, in the Webix Pro edition:    
	- **richSelectFilter**;
    - **multiSelectFilter**;
	- **datepickerFilter**;
    - **serverMultiSelectFilter**. (multiselect-based)
    
All of them are described in detail below.     

Built-in filter is set by property **content** of the **header/footer** attribute. Note, to add a filter to the header(footer), the header(footer) must be specified as array.

~~~js
columns:[
	{ id:"title", header:[{content:"{filtername}Filter"}, "Title"] }
]    
~~~

{{note
If you need to create a **custom filter** (or smth) for header content, or you need to **redefine** the behaviour of an already existing filter, 
go [here](datatable/headers_footers.md#customheaderandfootercontent) for the instructions. 
}}

###Text filter {#text}

<img src="datatable/text_filter.png"/> 

Retrieves values that contain mask defined through text field.
		
~~~js
{ id:"title",header:[ "Film title",{content:"textFilter"}] }
~~~

{{sample
15_datatable/03_filtering/01_builtin.html
}}


###Server Filter {#server}

A text filter that works with backend. Retrieves values that contain mask defined through text field and sends a request to server to return filtered dataset. 

~~~js
{ id:"title",	header:["Film title", {content:"serverFilter"}] }
~~~

{{sample 40_serverside/01_php_vanila/11_datatable_sort_filter.html}}

Request parameters include: 

- *count* - the number of data records to return. Its value depends on [dynamic loading](desktop/dynamic_loading.md) parameters, if any;
- *start* - ID of the data record to start from (0 - beginning). Its value depends on [dynamic loading](desktop/dynamic_loading.md) parameters, if any;
- *filter[column_name]* - name of the column (in brackets) for which filtering is performed. Its value is a text value you've entered in the filter input. 

If **serverside sorting** is enabled, data is both filtered and sorted on server. 

###Select filter {#select}

<img src="datatable/select_filter.png"/>

Retrieves values that contain mask defined through a dropdown list of possible values. Based on a standard HTML select input.
		
~~~js
{ id:"title", header:["Film title",{content:"selectFilter"}] }
~~~

{{sample 15_datatable/03_filtering/01_builtin.html}}

###Number filter {#number}

<img src="datatable/numeric_filter.png"/>

Text filter used for number columns. Retrieves values which contain mask defined through text field. Allows users to use the following comporison operators in it:

- '=' - equal to;
- '>' - greater than;
- '<' - less than;
- '<=' - less or equal;
- '>=' - greater or equal.
		
~~~js
{ id:"year", header:[ "Released",{content:"numberFilter"}] }
~~~

{{sample 15_datatable/03_filtering/09_numeric.html}}

###Date filter {#date}

<img src="datatable/date_filter.png"/>

A text filter used for date columns. Retrieves values that contain mask defined through text field. Allows users to use the following comparison operators in it:

- '>' - greater than;
- '<' - less than;
- '<=' - less or equal;
- '>=' - greater or equal.
    
There are 3 ways you can input data to the  dateFilter:

1. '*yyyy*' - 4-digits year;
2. '*mm.yyyy*' - 2-digits month and 4-digits year separated by point;
3. '*dd.mm.yyyy*' - 2-digits day, 2-digits month and 4-digits year separated by points
		
~~~js
{ id:"year", header:[ "Released",{ content:"dateFilter"}], 
	format:webix.i18n.dateFormatStr}
~~~

{{sample 15_datatable/03_filtering/10_date.html }}

###Richselect Filter {#richselect}

{{pronote
Available in **Webix Pro** edition only.
}}

<img src="desktop/richselect_filter.png"/>

Retrieves values that contain mask defined through a popup list of possible values. Based on Webix [richselect](desktop/richselect.md) control.

~~~js
{ id:"year", header:["Released", { content:"richSelectFilter" }] }
~~~

{{sample 60_pro/01_datatable/03_filters/06_filter_multiselect.html}}

###Multiselect Filter {#multiselect}

{{pronote
Available in **Webix Pro** edition only.
}}

<img src="desktop/multiselect_filter.png"/>

Retrieves values that contain mask defined through a popup list of possible values while **miltiple values** can be selected at once. 
Based on Webix [multiselect](desktop/multiselect.md) control.

~~~js
{ id:"year",header:["Released", { content:"multiSelectFilter" }]
~~~

{{sample 60_pro/01_datatable/03_filters/06_filter_multiselect.html}}

###Datepicker Filter {#datepicker}

{{pronote
Available in **Webix Pro** edition only.
}}

<img src="desktop/datepicker_filter.png"/>

Retrieves values that contain mask defined through the popup calendar. Based on Webix [datepicker](desktop/datepicker.md) control. 

~~~js
{ id:"date", header:[ "Released", { content:"datepickerFilter" }],
		format:webix.i18n.dateFormatStr}
~~~

{{sample 60_pro/01_datatable/03_filters/07_filter_daterange.html}}

##Filtering Logic

Note, each time you start to type text in such a filter, DataTable invokes the [filterByAll()](api/ui.datatable_filterbyall.md) method. Each time the method is called, all data is re-filtered (previous results aren't preserved).

###AND logic
By default, when you specify filters in several columns, DataTable applies AND logic to them, i.e. the table will display just records that meet 
all criteria at once.

{{sample
15_datatable/03_filtering/02_and.html
}}


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


##Custom filtering rules

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

grid.registerFilter(document.getElementById("myfilter"), 
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

{{sample 15_datatable/03_filtering/05_custom.html }}

Note, in the DataTable constructor you need to specify no parameters.

##Find API

Datatable API allows searching for the needed records easily with the help of its [find](api/link/ui.datatable_find.md) method. 

Unlike filtering, it preserves the records visible but returns an array of rows that match the given criterion for further usage.

For instance, it allows highlighting the filtered data: 

~~~js
//res - array of found rows
var res = table.find(function(obj){
	return obj.title.toLowerCase().indexOf(value) != -1;
});

table.clearCss("marker", true)
for (var i = 0; i < res.length; i++)
	table.addCss(res[i].id, "marker", true);
table.refresh();
~~~

{{sample 15_datatable/03_filtering/11_find_api.html}} 


## TreeTable specific configuration

In case of TreeTable some extra configurations can be defined to define how filters will be applied

The **filterMode** property is an object that can contain 2 attributes:

- **showSubItems** - (*boolean*) defines whether the tree must display childs of the filtered items (*true*) 
or the filtered items would be displayed as childs of the root node (*false*). The default value - *true*. 
- **openParents** - (*boolean*) defines whether the tree will expand branches to show the found items (*true*) or stay as is (*false*). The default value - *true*
- **level**  - (*number*) sets the nesting level to filter items from (one-based numbering). 

{{snippet
Using the filterMode parameter
}}

~~~js
webix.ui({
	view:"treetable", 
    filterMode:{
		showSubItems:false,
        level:2
	}
});
~~~

{{sample
	17_datatree/04_api/03_filter.html
}}
