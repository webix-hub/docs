getFilters
=============


@todo:
	check! 

@short:
	returns all available filter objects

@params:

@returns:

- filters		array			an array of all specified filters



@example:
var filters = $$("querybuilder").getFilters();


@template:	api_method
@descr:
A returned array with filters looks like this:

~~~js
[{
	"fn":function (a, b)
	id:"less or equal"
	name:"less or equal"
	type:"number"
}]
~~~

and has the following properties:

- **id** - (*string*) the filter id
- **name** - (*string*) the filter name (will be rendered in the list of options for filtering)
- **function** - (*function*) the filtering function
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values:
	- *number*
    - *string*
    - *any*
	


@relatedapi:
api/ui.querybuilder_setfilters.md

