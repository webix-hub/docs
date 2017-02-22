Working with Bound Components
=============

Binding makes selected record of one component a data source for another. The basic binding tie is established between two components using their IDs of variables they are stored in (if any). 

~~~js
$$("myform").bind(list); 
~~~

It has already been [described](desktop/data_binding.md).

Here different aspects of data binding are examined. 

##Binding Rules

The **bind()** method can take two optional parameters to customize the binding pattern - **rule** **format**. 

{{note
The customization is only possible in case
slave component is based on [DataStore](api/refs/datastore.md) (all data management components except for tree-like) or
[TreeStore](api/refs/treestore.md) (tree and treetable).
}}

Binding rule defines a scheme according to which records in the slave component are filtered. It can be either a string or a function. 


###Binding rule as a function

As function, binding rule takes 2 parameters: 

- **slave**  - slave data object;
- **master** - master data object.

{{snippet
Slave list displays records with category equal to master value
}}
~~~js
$$("list").bind($$("richselect"), function(slave, master){
	return slave.category == master; 
});
~~~

Here list data is filtered according to the option you choose within a [richselect](desktop/richselect.md) control. 

{{sample 80_docs/binding_rule.html}}

Additionally, binding rule can cancel bind applying in runtime.

{{snippet 
Slave datatable displays only records with movie property equal to master record ID
}}
~~~js
gridb.bind(grida, function(slave, master){
		if (!master) return false; //canceling bind applying
	return master.id == slave.movie;
});
~~~

Here binding is canceled in case no data is sent from master (i.e. no record is selected in master). 

{{sample 15_datatable/15_api/02_link_grid.html}} 

{{note
Pay attention that selected value for a master view should be set after data is loaded.
}}

###Binding rule as a string

If master component is loaded with hierarchical data you can define a binding rule with the help of the following flags: 

- **$level** - only immediate children of a selected item are pushed to slave component. By default children are introduced by **data**
key in all the supported [data formats](desktop/data_types.md): 

{{snippet
Grid will show only children of a selected tree node
}}
~~~js
$$("grid").bind( $$("tree"), "$level");
~~~

Input JSON of such a tree is as follows: 

~~~js
{ id:"..", value:"..", data:[
	//will be shown in slave component
	{ id:"..", value:".." },
	{ id:"..", value:".." }
]}
~~~

{{sample 17_datatree/04_api/08_bind.html}}

- **$data** - the object of a selected item (without children) is pushed to a slave component. Here you should pass the **format** of sub-data presentation to specify data items necessary for the slave. 

###Format of bound data presentation

Format can be a string that defines the **key** by which desired data is set in the item object. As a rule, it differs from the key by which children are set
 (if they are set via "data" (default), it's more reasonable to use **$level** rule): 

~~~js
$$("grid1").bind( $$("tree"), "$data", "records");
~~~

Input JSON data of such a tree is as follows:

~~~js
{ id:"..", value:"..", records:[
	//will be shown in slave component
	{ id:"..", value:".." },
	{ id:"..", value:".." }
]}
~~~

{{sample 17_datatree/04_api/09_subdata.html }}

Format can be set via a function where you describe binding behavior manually: 

~~~js
$$("grid2").bind( $$("tree"), "$data", function(obj, source){
	if (!obj) return this.clearAll();
	var fulldata = [].concat(source.data.getBranch(obj.id)).concat(obj.records);
	this.data.importData(fulldata, true);
});
~~~

Here we get item children with the help of a **getBranch()** method, combine them with data set by **records** key and
[import](api/datastore_importdata.md) the resulting array into slave datatable. 

{{sample 17_datatree/04_api/09_subdata.html}}

##Binding Events 

- **onBindApply** – fires the moment binding is applied;
- **onBindRequest** - fires when the component is ready to receive data from the master component;
- **onBindUpdate** – fires when the value in the slave view changes and *save()* is called to update master. 

~~~js
$$("files").bind($$("folders"));

$$("files").attachEvent("onbindapply", function(){
	// makes the preview template empty
	$$("preview").setHTML("");
}); 
~~~

##Preventing from Undefined Values

What happens when **no selection** is made in the master component? If no measures are taken, the slave component would show **undefined** values. 

{{note
This concerns only data components that have **template** property in their constructor and doesn't concern form and htmlform  where binding is set according to the **names** of their inputs. 
}}

The **defaultData** property of the master one helps solve the problem. 

~~~js
webix.ui({ 
	rows:[
		{view:"list",
    	template:"#rank#.#title#",
        data:... 
        defaultData:{
        	rank:"0",
            title:"default Item"
        	}
        },
        {view:"template",
        template:"#rank#.#title#"}
    ]
})

$$("template1").bind($$("list1"));
~~~

{{sample 80_docs/default_data.html}}

Now, when no item is selected in the list, template will show default values (as set by the defaultData) instead of undefined ones. 

Look to [CollectionBind API](api/collectionbind_defaultdata_config.md) for more details. 

##Cursor Concept for Bound Collections

Cursor concept is used to control focus within the application with bound and synced data-management components. Its position is the **ID of the active data item.**

Simply put, cursor stores the ID of a data item from the master control for which binding is performed at the moment.

You can get and set cursor position with the help of the following methods: 

- **setCursor(cursor);** - string, number -  sets the position of the cursor, the ID of the necessary data item.
- **getCursor();** - gets the current cursor position. 

~~~js
var cursor = master.getCursor();
~~~

Cursor can be deleted to remove the current bind link: 

~~~js
master.setCursor(null);
~~~

If a **form** (slave) is bound to a **list** (master) and cursor is removed from the list  - form will be emptied. 

{{note
Cursor is as well useful when working with non-visible [DataCollections](desktop/nonui_objects.md). 
}}

##Using Binding for Server Side 

As a rule, slave component doesn't communicate directly from server-side. 
It receives data from the master view it is bound with and the changed data is sent first to the master 
that handles communication with the server. 

However, there exists a possibility to get server-side data for the slave based on master selection - 
[dataFeed functionality](api/atomdataloader_datafeed_config.md). 

~~~js
webix.ui({
	view:"form", 
    id:"myform",
    ...//config  
    dataFeed: "slave_data.php"
});

$$("myform").bind($$("mydatatable"));
~~~

Data feed defines URL that will be used by slave control to sent server-side request the moment selection in the master component changes. 

The functionality works the same for form and collections (data components) yet the URL parameters differ: 

- for forms the request URL looks like: "slave_data.php?action=get&id="+obj.id
- for data components the request URL is as follows: "slave_data.php?filter[id]="+obj.id

where **obj** is selected data item in the master component.

##Saving Data of Multiple Bound Forms

When a form is bound to a component, data from the selected item is transmitted to the form as well as any changes you make within the form are saved automatically to the selected item. 

It happens on calling the **save();** method

~~~js
$$("myform").save();
~~~

But if you have **two forms** bound to one and the one component and you save each of the forms separately, 
the data from the previously saved one is lost. The solution is the [saveBatch()](api/bindsource_savebatch.md)
method that makes simultaneous saving of several forms. 

It is called from the master component rather than from either of the slave forms. 

~~~js
$$("mydatatable").saveBatch(function(){
     $$("myform1").save();
     $$("myform2").save();
});
~~~

Saving Extra Data with the Bound Form
------------------------------------

It is possible to save some extra data together with the changes made in the form to the bound component. 

For this you need to get values of all form elements and specify the name of the field that contains an extra value. Then pass form values to the *form.save()* method:

~~~js
var values = form.getValues();
values.myfield = "My value";

form.save(values);
~~~
