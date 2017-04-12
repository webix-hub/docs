DataTable Sorting
=======
DataTable allows you to <a href="http://webix.com/widget/datatable/" title="sort datatable component">sort data rows</a> on the client side.
There are 2 ways to invoke sorting in the table:

1. [By a single click on the header of a column with the enabled **sort** attribute](#sortingbyaclickontheheader);
2. [By API call ( can be called from some event or action, i.e button click or page load ) of the **sort()** method](#programmaticsorting).


Sorting by a click on the header
--------------------------------------------
When you click on the header, DataTable starts to display a special control indicating which column the table is currently sorted by and the direction of this sorting (ascending or descending).
Each next click on the same header will reverse the sorting direction.

<img src="datatable/sorting.png">

Columns can have different type of content (numbers, strings, dates) and each type of content requires its specific way of sorting.

###Sorting Modes for Different Data Types

For this purpose, DataTable provides 5 sorting types to ensure correct sorting of columns:

1. *int*;
2. *date*;
3. *string*;
4. *string_strict* (case-sensitive 'string');
5. [*text*](datatable/sorting.md#visible_text) (visible text including template);
6. [custom sorting type](datatable/sorting.md#addingcustomsortingtype).

To enable sorting and assign the appropriate sorting type to a column, you should specify the **sort** attribute among the 
[column's parameters](api/ui.datatable_columns_config.md) and set it to some of types.

{{snippet
Sorting configuration
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title",    sort:"string"},
		{ id:"year",  header:"Release year", sort:"int"}
	]
});
~~~

{{sample 15_datatable/02_sorting/01_builtin.html }}

{{note
The above mentioned sorting modes work with column values defined by their **ID** attributes and ignore values either defined by column templates or provided by column options.
}}

In the sample column below column titles are sorted, yet categories are displayed (column template overrides column ID during rendering):

~~~js
{ id:"title",	template:"#cat_id#", header:"Category ID" }
~~~

In the sample column  below option IDs are sorted, yet option values are displayed:

~~~js
{ id:"cat_id",  header:"Category", collection:[
	{ id:1, value:"Crime"}, { id:2, value:"Thriller" }]  
}
~~~


<h3 id="visible_text">Sorting by visible text</h3>

Sorting by visible text is enabled with the help of the **"text"** sorting mode that switches on **string** comparison for the values actually displayed in datatable columns. 

It takes into account column values defined by **templates**  and collection **values** rather than IDs:

~~~js
columns:[
	{ id:"title",template:"#cat_id#", header:"Category ID", sort:"text" },
	{ id:"cat_id",  header:"Category",sort:"text", collection:[
    	{ id:1, value:"Crime"}, { id:2, value:"Thriller" }]
    }
]
~~~

{{sample 15_datatable/02_sorting/04_by_text.html}}

###Triggering Server-side Sorting on the Client Side

It's possible to issue a request to server to sort data in backend and reload the sorted dataset to the datatable: 

The option is enabled by **server** sorting mode: 

~~~js
view:"datatable",
columns:[
	{ id:"package",	header:"Name", sort:"server"},
    {..}
],
url:"data.php"
~~~

{{sample 40_serverside/01_php_vanila/11_datatable_sort_filter.html}}

Now header clicking will trigger a server-side GET request with the following parameter: *sort[package]=desc* (data.php?sort[package]=desc), which allows sending: 

- **operation name** (sort);
- **data property** to sort by (here: package);
- **sorting order** (here: descending).  

The new data will be loaded to the datatable and replace the initial dataset. 

{{note
If [serverFilter](datatable/filtering.md) is enabled for this column, the data will be both filtered and sorted on the server side before returning to the client. 
}}

Custom sorting functions
-------------------------------------------------
If you want to apply custom sorting behavior, you can define the related logic in a function and set this function as the value of the **sort** attribute.

This function will be called for each pair of adjacent values and return 1,-1 or 0:

- **1** - an object with the first value in pair must go before the second one;
- **-1** - the second object goes before the first one;
- **0** - the order of both objects doesn't change.

The function can be defined in a general way:

{{snippet
Using custom functions for sorting DataTable
}}
~~~js
function sortByParam(a,b){
		a = a.rank;
		b = b.rank;
		return a>b?1:(a<b?-1:0);
}

webix.ui({
		view:"datatable",
		...
		columns:[
			{ id:"title",	header:"Film title", sort:sortByParam },
			...
		]
})
~~~
{{sample 15_datatable/02_sorting/02_custom.html }}

Programmatic sorting 
-----------------------
You should use the [sort()](api/link/ui.datatable_sort.md) method to invoke sorting on some event or action, i.e button click or page load. 
You can't use this method if you want to sort DataTable by a click on the header.

{{snippet
Sorting DataTable on the button click
}}
~~~html
<input type='button' onclick='grid.sort("#title#", "asc", "string");'>

<script type="text/javascript" charset="utf-8">
		grid = webix.ui({ view:'datatable', ...})
</script>
~~~

{{sample 15_datatable/02_sorting/03_sort_api.html }}

###Controlling header sorting mark

You can show and hide the sorting sign (&#708;/&#709;) by calling the [markSorting()](api/ui.datatable_marksorting.md) method with the following parameters: 

- **column_id** - id of the column you want to draw a sorting sign for;
- **direction** - sorting direction. 

When used with no arguments, the method removes all the sorting signs from the datatable headers.

{{snippet
Canceling sorting
}}

~~~js
grid = webix.ui({ view:"datatable", ...})

grid.markSorting("title", "asc");
~~~
{{sample 15_datatable/02_sorting/03_sort_api.html }}


##Adding Custom Sorting Type

You can define your own sorting type via the **sorting.as** property of the **webix.DataStore.prototype** object.
You need to specify a function, that will describe a new type of sorting as follows:

~~~js
webix.DataStore.prototype.sorting.as.sort_type = 
function(a,b){ return a.param > b.param ? 1 : -1 }
~~~

For example, let's set a new type "bylength" to sort data by the text length:

~~~js
webix.DataStore.prototype.sorting.as.bylength = 
function(a,b){ return a.length > b.length ? 1 : -1 }
~~~

To apply a custom sorting type to a column, you need to set its name as the value of the **sort** property for the corresponding column:

~~~js
{
	view:"datatable",
	columns:[
		{ id:"product1", sort:"bylength" },
		{ id:"product2", sort:"bylength" },
		{ id:"product3", sort:"bylength" }
	]
}
~~~

You can also set the newly created sorting type as a value of the *as* parameter of the "sort()" method:

~~~js
$$("datatable1").sort({
   by:"name", 
   dir:"desc",
   as:"bylength"
});
~~~


@keyword:
	sort