showColumnBatch
=============

@short:
    shows or hides a group of columns
	

@params:
- batch      string      batch name

@example:

var grid = webix.ui({ view:"datatable", columns:[
    { id:"login" },
    { id:"firstName", batch:"name" },
    { id:"firstName", batch:"name" },
    { id:"login", batch:"details" }
]});

//show login, firstName, lastName
grid.showColumnBatch("name");

//show login, details
grid.showColumnBatch("details");



@example:

@template:	api_method
@descr:

