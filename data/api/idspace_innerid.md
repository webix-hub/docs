innerId
=============


@short:
	returns the inner ID of an item by its public (real) ID

@params:
- id		number,string		the public ID of an item


@returns:

- innerId     number,string    the inner ID of item
	

@example:


@template:	api_method
@defined:	IdSpace	
@descr:
The method will be to the point when you use the same IDs for several nested components,
e.g. you place two columns on a page and put a list component inside each of them. 

Both lists have the same ID:"mylist".

~~~js
webix.ui({
   cols:[
     { id:"col1", isolate:true, rows:[
        { view:"list", id:"mylist", data:webix.copy(list_data)  },        
     ]},
     { id:"col2", isolate:true, rows:[
        {view:"list", id:"mylist", data:webix.copy(list_data) },        
     ]}
   ]
});

~~~

So, when you need to refer to one of these lists, you should use:

~~~js
// for example, to get the id of the list in the second column
$$("col2").innerId("$list2");
~~~

Vice versa, to get the real ID of an item, use the code as in:

~~~js
var realId = some.$$(innerId).config.id
~~~

@relatedapi: 
api/ui.layout_isolate_config.md