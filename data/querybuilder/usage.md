Using Query Builder with Data Widgets
=====================================

You can use Query Builder as a standalone solution for extented filtering of large datasets or combine it with Webix data widgets, e.g. DataTable and Pivot.
What is more, this widget can be embedded into DataTable and used as a built-in filter.

Using Query Builder as a Separate Filter
-------------------------

In order to use a Query Builder to filter data components, you need to get the function that implements the filtering logic.
You can do this with the help of the api/ui.querybuilder_getfilterhelper.md method.

~~~js
var helper = $$("querybuilder").getFilterHelper();
~~~

The returned "helper" function iterates through the dataset items and checks whether they correspond to the 
filter rules. The "helper" function returns *true* if the item complies with the rule and *false*, if it doesn't.

After receiving the filtering function, you should pass it to the Webix api/link/ui.proto_filter.md method to enable filtering of data components with Query Builder.
For example:

~~~js
$$("$datatable1").filter(helper);
~~~

###Example for DataTable

Let's have a look at an example of using Query Builder with DataTable in detail. 

- Let's assume that we have the following datatable:

~~~js
webix.ui({
	view:"datatable",
	columns:[
		{ id:"title",	header:"Film title",	width:350,	sort:"string"},
		{ id:"year",	header:"Released",		width:200,	sort:"int"},
		{ id:"rating",	header:"Rating", 		width:250,	sort:"int"}
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", 	year:1994,  rating:9},
		{ id:2, title:"The Godfather", 				year:1972,  rating:9},
		{ id:3, title:"The Godfather: Part II", 	year:1974,  rating:9}
	]
})
~~~

- Now we need to initialize a Query Builder and set the **fields** values corresponding to the necessary dataset property names: 

~~~js
webix.ui({
	view: "querybuilder",
	id: "querybuilder",
	fields:[
		{ id:"rating", 	value:"Rating", type:"number" },
		{ id:"title", 	value:"Title",  type:"string" },
		{ id:"votes",  	value:"Votes", 	type:"number" }
	]
})
~~~

- Then we will add a button and specify the filtering logic in its handler function:

~~~js
var buttonFilter = {
	view:"button",
	value:"Apply Filter",
	width:150,
	click: function() {
		if($$("querybuilder")){
			helper = $$("querybuilder").getFilterHelper();
		}
		$$("$datatable1").filter(helper);
	}
};
~~~

Thus, we have defined that on clicking the button the *getFilterHelper()* of the query builder will be called. It will return the *helper* function that
implements filtering in the query builder. 

This function will be passed as an argument to the **filter()** method called for the datatable. So, the datatable data will be filtered according to the rules
set in the query builder.


{{sample 66_querybuilder/01_initialization/02_basic.html}}


###Example for Pivot

In this section we will discuss an example that shows how to use Query Builder with Pivot. Our steps will be as follows:

- First, we will create a Pivot with data

~~~js
webix.ui({
	id:"pivot",
	readonly: true,
	view:"pivot",
	height:400,
	width:1500,
	data:[
    	{"name": "Argentina", 	"year": 2005, "continent": "South America"},
    	{"name": "Austria", 	"year": 2006, "continent": "Europe"},
    	{"name": "Chad", 		"year": 2007, "continent": "Africa"}
    ],
	readonlyTitle: "Oil Export Statistics",
	max: true,
	structure: {
		rows: ["form", "name"],
		columns: ["year"],
		values: [{ name:"oil", operation:["min","sum"]}],
		filters:[]
	}
})
~~~

- Then we will initialize a Query Builder and set the **fields** values corresponding to the necessary dataset property names

~~~js
webix.ui({
	view: "querybuilder",
	id: "querybuilder",
	fields:[
		{ id:"name", 		value:"name", 		type:"string" },
		{ id:"year", 		value:"year",  		type:"number" },
		{ id:"continent",  	value:"continent", 	type:"string" }
	]
})
~~~

- Finally, we will specify the handler for event that will fire on some changes in filters

~~~js
$$("querybuilder").attachEvent("onChange", function() {
	$$("pivot").filter($$("querybuilder").getFilterHelper());
});
~~~

Thus, in the event handler we have defined that when filter rules will be modified the **filter()** method will be called for Pivot.
This method will make the query builder to re-filter data according to the currently set rules.


{{sample 66_querybuilder/01_initialization/04_pivot.html}}


Embedding Query Builder into DataTable
-----------------------------------

You can use the Query Builder widget as a built-in filter for DataTable. It works the same as any other [DataTable filter](datatable/filtering.md).

- specify the datatable configuration

~~~js
webix.ui({
	view:"datatable",
	id: "datatable1",
	columns:[
		{ id:"title",	header:"Film title",	width:350,	sort:"string"},
		{ id:"year",	header:"Released",		width:200,	sort:"int"},
		{ id:"rating",	header:"Rating", 		width:250,	sort:"int"}
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", 	year:1994,  rating:9},
		{ id:2, title:"The Godfather", 				year:1972,  rating:9},
		{ id:3, title:"The Godfather: Part II", 	year:1974,  rating:9}
	]
})
~~~

- set the necessary fields for Query Builder

~~~js
var fields = [
	{ id:"rating", value:"Rating", type:"number" },
	{ id:"title", value:"Title",  type:"string" },
	{ id:"votes",  value:"Votes", type:"number" }
];
~~~

- set the query builder as a filter in the datatable header by using the *content* property. Use the "queryBuilder" type of filter for this purpose.
Also you need to specify the dataset fields that will be used for filtering.

~~~js
webix.ui({
	view:"datatable",
	id: "datatable1",
	columns:[
		{ id:"title",		header:"Film title",	width:350,	sort:"string"},
		{ id:"year",		header:"Released",		width:200,	sort:"int"},
		{ id:"rating",		header:"Rating", 		width:250,	sort:"int"}
        { 
        	id:"category", 	
            header:{ content:"queryBuilder", label:"Category", fields:fields }, 
            width:100
        },
	]	
})
~~~

The value of the **queryBuilder** filter can be stored in the state object, saved together with all other information about the current Datatable state
and restored when it's necessary. Read more about saving of DataTable state in the [related article](desktop/datastate_state.md#savingdatatablestate).

{{sample 66_querybuilder/01_initialization/03_datatable.html}}


@edition:pro
