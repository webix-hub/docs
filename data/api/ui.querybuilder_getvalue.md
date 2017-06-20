getValue
=============


@todo:
	check 

@short:
	returns the value set for Query Builder (an array of rules and fields for filtering)

@params:


@returns:

- value			array		an array of rules and fields for filtering


@example:
var value = $$("querybuilder1").getValue();

@template:	api_method
@descr:
The returned array with rules and fields looks as in:

~~~js
[
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
    [
		{ id:"fname", 	value:"First Name", type:"string" },
		{ id:"lname", 	value:"Last Name",  type:"string" },
		{ id:"age",    	value:"Age", 		type:"number" },
		{ id:"bdate",  	value:"Birth Date", type:"date" }
	]
]
~~~

@relatedsample:

66_querybuilder/01_initialization/01_init.html

@relatedapi:
api/ui.querybuilder_setvalue.md
