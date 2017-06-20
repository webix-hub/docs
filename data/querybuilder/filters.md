Working with Filters
======================

Filters in Query Builder are presented by functions that compare the entered value with value from the dataset. 

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
- **function** - (*function*) the filtering function. [See the list below]()
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values:
	- *number*
	- *string*
	- *any*

###The list of filter functions

All available filter functions are located in the **filters** array. Check the full list:

~~~js
[
	{ 
    	id: "less", 
        name: "less", 
        "fn": function (a, b) { return a < b; }, 
        type: "number" 
    },
    { 
    	id: "less or equal", 
        name: "less or equal", 
        "fn": function (a, b) { return a <= b; }, 
        type: "number" 
    },
    { 
    	id: "greater", 
        name: "greater", 
        "fn": function (a, b) { return a > b; }, 
        type: "number" 
    },
    { 
    	id: "greater or equal", 
        name: "greater or equal", 
        "fn": function (a, b) { return a >= b; }, 
        type: "number" 
    },
    { 
    	id: "between", 
        name: "between", 
        "fn": function (a, b, c) { return a > b && a < c; }, 
        type: "number" 
   	},
   	{ 
    	id: "not between", 
        name: "not between", 
        "fn": function (a, b, c) { return a <= b || a >= c; }, 
        type: "number" 
    },
    { 
    	id: "begins with", 
        name: "begins with", 
        "fn": function (a, b) { return a.lastIndexOf(b, 0) === 0; }, 
        type: "string" 
    },
    { 
    	id: "not begins with", 
        name: "not begins with", 
        "fn": function (a, b) { return a.lastIndexOf(b, 0) !== 0; }, 
        type: "string" 
    },
    { 
    	id: "contains", 
        name: "contains", 
        "fn": function (a, b) { return a.indexOf(b) !== -1; }, 
        type: "string" 
    },
    { 
    	id: "not contains", 
        name: "not contains", 
        "fn": function (a, b) { return b.indexOf(a) === -1; }, 
        type: "string" 
    },
    { 
    	id: "ends with", 
        name: "ends with", 
        "fn": function (a, b) { return a.indexOf(b, a.length - b.length) !== -1; }, 
        type: "string" 
    },
    { 
    	id: "not ends with", 
        name: "not ends with", 
        "fn": function (a, b) { return a.indexOf(b, a.length - b.length) === -1; }, 
        type: "string" 
    },
    { 
    	id: "is empty", 
        name: "is empty", 
        "fn": function (a) { return a.length === 0; }, 
        type: "string" 
    },
    { 
    	id: "is not empty", 
        name: "is not empty", 
        "fn": function (a) { return a.length > 0; }, 
        type: "string" 
    },
    { 
    	id: "equal", 
        name: "equal", 
        "fn": function (a, b) { return a === b; }, 
        type: "any" 
    },
   	{ 
    	id: "not equal", 
        name: "not equal", 
        "fn": function (a, b) { return a !== b; }, 
        type: "any" 
    },
    { 
    	id: "is null", 
        name: "is null", 
        "fn": function (a) { return a === null; }, 
        type: "any" 
    },
    { 
    	id: "is not null", 
        name: "is not null", 
        "fn": function (a) { return a !== null; }, 
        type: "any" 
    }
]
~~~


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

There is a possibility to get the helper function that implements the filtering logic using the api/ui.querybuilder_getfilterhelper.md method.

~~~js
var helper = $$("querybuilder1").getFilterHelper();
...
$$("$datatable1").filter(helper);
~~~

The returned "helper" function iterates through the dataset items and checks whether they correspond to
the filter rules. The "helper" function returns *true* if the item complies with the rule and *false*, if it doesn't.

After you've received the helper function, you can pass it to the Webix api/link/ui.proto_filter.md method to
[enable filtering of data components with Query Builder](querybuilder/usage.md).


Exploring Filtering Logic
---------------------

In this section we will explore how the extended filtering logic of the Query Builder works.

When you initialize Query Builder, it doesn't have any rules specified. So the initial **rules** object contains

- the default **glue** property that defines the logic of rules' usage set to "and"
- an empty **rules** array 

~~~js
{
    "glue": "and",
    "rules": []
}
~~~


After you've added a rule, the corresponding *rule* object is added:

~~~js
{
    "glue": "and",
    "rules": [
        {
            "key": "fname",
            "rule": "begins with",
            "value": "Alex"
        }
    ]
}
~~~

Thus, a rule consists of three fields which are specified by the following properties:

- **key** - (*string*) the key that corresponds to the id of the field
- **value** - (*string*|*number*|*date*) the entered value to compare the field value with
- **rule** - (*string*) the filter rule. [See the full list of filters](querybuilder/filters.md#listoffilters)

###The "key" input field

The contents of the "key" field are defined from the **fields** object of the Query Builder.

The key from the rules corresponds to the id of the field and takes the field value.

~~~js
[
	// rules
    {
        glue:"and",
        rules:[
            { key:"fname", value:"Alex", rule:"equal" },
            { 
                glue:"or",
                rules:[
                    { key:"age", value:90, rule:"less" },
                    { key:"age", value:10, rule:"greater" }
                ]
            }
        ]
    },
    // fields
    [
        { id:"fname",   value:"First Name", type:"string" },
        { id:"lname",   value:"Last Name",  type:"string" },
      
    ]
]
~~~

###The "rule" field

The value of the "rule" field corresponds to the related filter name from the **filters** array:

~~~js
{ 
	id: "less", 
    name: "less", 
    "fn": function (a, b) { return a < b; }, 
    type: "number" 
}
~~~


- **id** - (*string*) the filter id
- **name** - (*string*) the filter name (will be rendered in the list of options for filtering)
- **function** - (*function*) the filtering function
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values: *number*,*string* and *any* (both string and number)



###The "value" input field

The "value" field is intended for entering a value to compare a dataset with for filtering by the corresponding rule. 

The type of the entered value and the type of the input depends on the type of the rule. 


 