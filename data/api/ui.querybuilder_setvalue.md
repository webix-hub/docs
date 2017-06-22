setValue
=============

@todo: check the link to sample

@short:
	sets a value for Query Builder as an array of rules and fields for filtering

@params:

- rules			object			a set of rules for filtering
- fields		array			an array of fields for filtering (to redefine the initially set fields)


@example:
$$("querybuilder1").setValue(
	[
    	// rules
      {
		glue: "or",
    	rules: [
        	{
            	key: "fname",
            	value: "Alex",
            	rule: "equal"
        	},
        	{
            	glue: "and",
            	rules: [
                	{
                    	key: "age",
                    	value: 90,
                    	rule: "less"
                	},
                	{
                    	key: "age",
                    	value: 10,
                    	rule: "greater"
                	}
            	]
        	}
    	  ]
	   }, 
       	// fields
       [
     		{ id:"fname", value:"First Name", type:"string" },
     		{ id:"lname", value:"Last Name", type:"string" }
     
   	   ]
	]
);



@template:	api_method
@descr:
There are two more ways of setting the value for Query Builder. 
Besides setting both rules and fields, you can also specify either only the **rules** object:

~~~js
// setting only the rules object
$$("querybuilder").setValue(
	[{
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
	}]
);
~~~

or only the **fields** array:

~~~js
// setting only the fields array
$$("querybuilder").setValue(
	[ 
		[
			{ id:"fname", value:"First Name", type:"string" },
			{ id:"lname", value:"Last Name", type:"string" }
					
		]
	]
);
~~~


@relatedsample:

66_querybuilder/01_initialization/01_init.html

@relatedapi:
api/ui.querybuilder_getvalue.md

@related:
querybuilder/setting_value.md#settingvalue