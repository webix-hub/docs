Setting/Getting Query Builder Value
========================================

##Setting Value

In order to set a value for Query Builder, you can use the api/ui.querybuilder_setvalue.md method. This method allows setting rules and fields for filtering, as well as
define the logic of the rules' usage.

You need to pass two parameters to the api/ui.querybuilder_setvalue.md method:

- **rules** - (*object*) a set of rules for filtering. The *rules* object consists of the **glue** property and an array of rules.<br>
Each rule array is preceded by the **glue** property that defines the logic of using rules in the group:<br> 
"AND" - to display records that correspond to all rules at once and<br>
"OR" - to show records that correspond to at least one of the rules.<br>
Each object inside of the *rules* array includes the following properties:

 - **key** - (*string*) the key that corresponds to the id of the field
 - **value** - (*string*|*number*|*date*) the entered value to compare the field value with
 - **rule** - (*string*) the filter rule. [See the full list of filters](querybuilder/filters.md#listoffilters)
- **fields** - (*array*) an array of fields for filtering. Use this parameter to redefine the initially defined fields

~~~js
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
~~~

##Getting Value

You can get the value of the Query Builder via the api/ui.querybuilder_getvalue.md method.

~~~js
var value = $$("querybuilder1").getValue();
~~~

The method returns the array of rules and fields used for filtering. For example:

~~~js
[
	// rules
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
    // fields
    [
        { id:"fname",   value:"First Name", type:"string" },
        { id:"lname",   value:"Last Name",  type:"string" },
        { id:"age",     value:"Age",        type:"number" },
        { id:"bdate",   value:"Birth Date", type:"date" }
    ]
]
~~~
