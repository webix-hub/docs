setFilters
=============


@todo:
	check 

@short:
	sets an array of filtering objects 

@params:

- filters



@example:
$$("querybuilder").setFilters([
	{	
    	id: "equal", 
    	name: "equal", 
        fn: (a, b) { return a === b; }, 
        type: "any"
    }, 
	{
    	id: "contains", 
        name: "contains", 
        fn: (a, b) { return a.indexOf(b) !== -1; }, 
        type: "string"
    }
])


@template:	api_method
@descr:

@relatedapi:
api/ui.querybuilder_getfilters.md