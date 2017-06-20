
{{memo a handy tool for creating complex filters}}

{{todo check link to samples}}

Webix Query Builder widget inherits from desktop/layout.md and allows setting extended rules for data filtering, grouping several
rules and define the logic of rules' usage. 
You can use it as a standalone solution or combine with data widgets, such as DataTable and Pivot. Query Builder can also be used
as a built-in filter of DataTable.

Check desktop/query_builder.md documentation for more details.

###Constructor 

~~~js
var querybuilder = webix.ui({
    view:"querybuilder", 
    id: "querybuilder",
    fields: [
        { id:"fname",   value:"First Name", type:"string" },
        { id:"lname",   value:"Last Name",  type:"string" },
        { id:"age",     value:"Age",        type:"number" },
        { id:"bdate",   value:"Birth Date", type:"date" }
    ]
});
~~~

### Where to start

- [Overview of the Query Builder Widget](desktop/query_builder.md)
- [Samples](http://docs.webix.com/samples/66_querybuilder/index.html) 
