getStructure
=============


@short:
	returns the current pivot configuration

@params:

@returns:

- config		object 			the current pivot structure



@example:
var config = $$("pivot").getStructure();

@template:	api_method
@descr:
Format of a config object is the same as the "structure" parameter of the constructor:

- for Pivot

~~~js
var config = {
	groupBy: "continent",
	values: [
		{name:"balance", operation:"max", color: "#eed236"},
		{name:"oil", operation:"max", color: "#36abee"}
	],
	filters:[{name:"year", type:"select"}]
}
~~~

- for Pivot Chart

~~~js
var config = {
    groupBy: "year",
    values: [{name:"balance", operation:"sum", color: "#eed236"}],
    filters:[{name:"name", type:"select"}]
}
~~~

@relatedapi:
- api/ui.pivot_setstructure.md


@seolinktop: [ui component library](https://webix.com)
@seolink: [javascript pivot grid](https://webix.com/pivot/)