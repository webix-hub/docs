Exploring Filtering Logic
========================

In this section we will explore how the filter rules are formed and the extended filtering logic of the Query Builder works.

When you initialize Query Builder, it doesn't have any filter rules specified. So the initial [**rules** object](querybuilder/setting_value.md) contains:

- the default **glue** property (that defines the logic of filter rules' usage) set to "and"
- an empty **rules** array 

~~~js
{
    "glue": "and",
    "rules": []
}
~~~


After the user has added a rule, a new object is added into the *rules* array:

~~~js
{
    "glue": "and",
    "rules": [
        {
            "key": "fname",
            "rule": "begins with",
            "value": "Alex"
        }
    ]
}
~~~

Thus, a filter rule consists of three fields which are specified by the following properties:

- **key** - (*string*) the key that corresponds to the id of the field
- **value** - (*string*|*number*|*date*) the entered value to compare the field value with
- **rule** - (*string*) the filter rule. [See the full list of filters](querybuilder/filters.md#listoffilters)

##The "key" input field

<img src="querybuilder/key_field.png">

The contents of the "key" field are defined by the related **field** object of the Query Builder.

The *key* property of the rule object corresponds to the *id* of the field object.


~~~js
[
	// rules
    {
        glue:"and",
        rules:[
            { key:"fname", value:"Alex", rule:"equal" }
            ...           
        ]
    },
    // fields
    [
        { id:"fname", value:"First Name", type:"string" }
        ...
    ]
]
~~~

##The "rule" input field

<img src="querybuilder/rule_field.png">

The contents of the "rule" field are formed by the values of the *name* properties of all **filter** objects. 

The *rule* property of the rule object corresponds to the *id* of the filter object.


~~~js
// rules object
{
   glue:"and",
   rules:[
   		{
          	"key": "age",
          	"value": 90,
            "rule": "less"
       	},          
   ]
},
~~~

~~~js
// filter object
{ 
	id: "less", 
    name: "less", 
    "fn": function (a, b) { return a < b; }, 
    type: "number" 
}
~~~

- **id** - (*string*) the filter id
- **name** - (*string*) the filter name (will be rendered in the list of options for filtering)
- **function** - (*function*) the filtering function
- **type** - (*string*) the type of data the filter will be applied to. Can have the following values: *string* (will be applied to the "string" field type)
*number* (to the "date" and "number" field types) and *any* (to "string", "number" and "date" field types)

The filter types shown as selection options of the "rule" field are defined by the type of the field:

- for "string" fields' types - all the filters of the "string" and "any" types:
	- "not between"
	- "begins with"
    - "not begins with"
    - "contains"
    - "not contains"
    - "ends with"
    - "not ends with"
    - "is empty"
    - "is not empty"
 	- "equal"
    - "not equal"
    - "is null"
    - "is not null"
- for "number" and "date" fields' types - all filters of the "number" and "any" types:
	- "less" 
    - "less or equal" 
    - "greater" 
    - "greater or equal"
    - "between"
    - "equal"
    - "not equal"
    - "is null"
    - "is not null"

Read more about filters in the [related article](querybuilder/filters.md#settingfilters).
    
##The "value" input field

<img src="querybuilder/value_field.png">

The "value" field is intended for entering a value to compare a dataset item with for filtering by the corresponding rule. The type of the entered value depends on
the type of the field.
 
The type of the input for entering a value is defined by the filter rule and the type of the input field. There are 4 types of inputs:

- **desktop/slider.md** - for fields with the *number* type and rules *"between"/"not between"* 
- **desktop/daterange.md** - for fields with the *date* type and rules *"between"/"not between"*
- **desktop/datepicker.md** - for fields with the *date* type and rules **except for** *"between"/"not between"* 
- **desktop/text.md** - for all other fields and rules' types


@edition:pro