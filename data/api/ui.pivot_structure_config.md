structure
=============

@todo:
	check 


@short:
	defines initial display and analysis pattern

@type: object
@example:

webix.ui({
    view:"pivot",
    structure: { 
        rows: ["form", "name"],
        columns: ["year"],
        values: [
            { name: "gdp", operation: "sum"},
            { name: "oil", operation: "sum"}
        ],
        filters: []
    }
});

@template:	api_config
@descr:

@related:
pivot/initialization.md

