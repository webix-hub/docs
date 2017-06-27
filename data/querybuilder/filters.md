Working with Filters
======================

Filters in Query Builder are presented by objects that contain functions which implement filtering logic. 

##Setting Filters

To specify filters, you need to make use of the api/ui.querybuilder_setfilters.md method.

~~~js
$$("querybuilder").setFilters([
    {   
        id: "equal", 
        name: "equal", 
        "fn": (a, b) { return a === b; }, 
        type: "any"
    }, 
    {
        id: "contains", 
        name: "contains", 
        "fn": (a, b) { return a.indexOf(b) !== -1; }, 
        type: "string"
    }
])
~~~

The method sets an array of filter objects. Each filter object should have the following properties:

- **id** - (*string*) the filter id
- **name** - (*string*) the filter name (will be rendered in the list of options for filtering)
- **function** - (*function*) the filtering function
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values: *number*, *string*, *any*

###The list of filters

All available filter functions are located in the **filters** array. [Check the full list of filters](querybuilder/list_of_filters.md).
 
If you haven't found a necessary function, you can add it to the filters list by using the api/ui.querybuilder_setfilters.md method.


##Getting Filters

You can get the list of all applied filters using the api/ui.querybuilder_getfilters.md method. 

~~~js
var filters = $$("querybuilder").getFilters();
~~~

It will return an array of filters. For example:

~~~js
[
	{
    	"fn":function (a, b)
   	 	id:"less or equal"
    	name:"less or equal"
    	type:"number"
	},
    {
    	function (a)
		id:"is null"
		name:"is null"
		type:"any"
    }
]
~~~


Using getFilterHelper() Method
---------------------

In order to use Query Builder for filtering a dataset, you need
to get the helper function that implements the filtering logic. You can do this with the help of the api/ui.querybuilder_getfilterhelper.md method.

~~~js
var helper = $$("querybuilder1").getFilterHelper();
~~~

The returned "helper" function iterates through the dataset items and checks whether they correspond to
the filter rules. The "helper" function returns *true* if the item complies with the rule and *false*, if it doesn't.

After you've received the helper function, you can pass it to the Webix api/link/ui.proto_filter.md method to
[enable filtering of data components with Query Builder](querybuilder/usage.md).

For example, with Webix DataTable:

~~~js
$$("$datatable1").filter(helper);
~~~

{{sample 66_querybuilder/01_initialization/02_basic.html}}

@index:
- querybuilder/list_of_filters.md

@edition:pro
 