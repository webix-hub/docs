
{{memo A datatable with advanced filtering capabilities.}}

Webix Pivot allows quickly processing huge complex datasets and creating clear reports on their basis. 
You can easily customize this component and proceed with comparing, filtering and sorting data - all within one table.

Check desktop/pivot.md documentation for more information.

###Constructor 

~~~js
var pivot = webix.ui({
	view:"pivot",
	structure: {
		rows: ["form", "name"],
        columns: ["year"],
        values: [
            { name: "gdp", operation: "sum"},
            { name: "oil", operation: "sum"}
        ],
        filters: []
	},
	data: pivot_data
});
~~~

### Where to start

- [Overview of the Pivot Widget](desktop/pivot.md)
- [Samples](http://docs.webix.com/samples/61_pivot/index.html)

