isolate
=======


@short: masks IDs of all inner elements
	

@type: boolean
@example:
webix.ui({
		isolate:true,
		cols:[
			{ view:"button", value:"Load" },
			{ view:"button", value:"Save" },
            { view:"button", value:"Delete" }
		]
});
 


@template:	api_config
@descr:

This property allows to reuse the same IDs  
For example you can use something like this

~~~js
webix.ui({
   cols:[
     { id:"col1", isolate:true, rows:[
     	{ view:"list", id:"mylist" },
        { template:"Details", id:"details" }
     ]},
     { id:"col2", isolate:true, rows:[
     	{view:"list", id:"mylist" },
        { template:"Details", id:"details" }
     ]}
   ]
});
~~~

In above code snippet there are two blocks which are using the same IDs, so there is no way to access the list by its ID directly.
Because of isolate property - two elements with the same ID can exist and can be located in the next way:

~~~js
//will not work
var list = $$("mylist"); // will return second list

//will work
var list1 = $$("col1").$$("mylist");
var list2 = $$("col2").$$("mylist");
~~~