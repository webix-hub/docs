setFilters
=============

@short:
	sets an array of filter objects 

@params:

- filters		array			an array with filter objects

@example:
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


@template:	api_method
@descr:
Each filter object should have the following properties:

- **id** - (*string*) the filter id
- **name** - (*string*) the filter name (will be rendered in the list of options for filtering)
- **function** - (*function*) the filtering function
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values:
	- *number*
    - *string*
    - *any*

See the full list of available filters in the [related article of the Query Builder documentation](querybuilder/list_of_filters.md).

@relatedapi:
api/ui.querybuilder_getfilters.md

@related:
querybuilder/filters.md