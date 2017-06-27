getFilters
=============

@short:
	returns an array of all available filter objects

@params:

@returns:

- filters		array			an array of all specified filters



@example:
var filters = $$("querybuilder").getFilters();


@template:	api_method
@descr:
A returned array with filters looks like this:

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

Each object in the array has the following properties:

- **id** - (*string*) the filter id
- **name** - (*string*) the filter name (will be rendered in the list of options for filtering)
- **function** - (*function*) the filtering function
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values:
	- *number*
    - *string*
    - *any*
	
The full list of predefined filters is given in the [related article](querybuilder/list_of_filters.md).

@relatedapi:
api/ui.querybuilder_setfilters.md

@related:
querybuilder/filters.md
