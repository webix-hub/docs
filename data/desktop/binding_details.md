Working with Bound Components
=============

Binding makes selected record of one component a datasource for another. The basic binding tie is established between two components using their IDs of variables they are stored in (if any). 

~~~js
$$('my_form').bind(list); 
~~~

It has already been [described](desktop/data_binding.md).

Here different aspects of bata binding are examined. 

##Binding Rules

The **bind()** method can take two optional parameters to customize the binding pattern - **rule** **format**. 

{{note
The customization is only possible in case
slave component is based on [DataStore](api/refs/datastore.md) (all data management components except for tree-like) or
[TreeStore](api/refs/treestore.md) (tree and treetable).
}}

###Binding Rules for Inline Collections

Binding rule defines a scheme according to which records in the slave component are filtered. It can be string or function. 

As function, binding rule takes 2 parameters: 

- **slave**  - slave data object;
- **master** - master data object.

List data is filtered according to the option you choose within a [richselect](desktop/controls.md#richselect) control. 

{{snippet
Slave list displayed record with category equal to master value
}}
~~~js
$$('list').bind($$('richselect'), function(slave, master){
	return slave.category == master; 
});
~~~

{{sample 80_docs/binding_rule.html}}

Additionally, binding rule can cancel bind application in runtime if no data is sent from master (i.e. no record is selected in master). 

{{snippet 
Slave datatable displays only records with movie property equal to master record ID
}}
~~~js
gridb.bind(grida, function(slave, master){
		if (!master) return false; //cancelling bind applying
	return master.id == slave.movie;
});
~~~

{{sample 15_datatable/15_api/02_link_grid.html}} 

###Binding Rules for Hierarchical Collection as Master

In case master component is based on a [TreeStore](api/refs/treestore.ms) ([tree](datatree/index.md) and [treetable](desktop/treetable.md))
rules can be defined with the help of the following flags: 

- **$level** - only immediate children of a selected item are pushed to slave component. By default children are defined by **data**
key in any of the supported [data formats](desktop/data_types.md): 

{{snippet
Grid will show only children of a selected tree node
}}
~~~js
$$("grid").bind( $$("tree"), "$level");
~~~

JSON of a tree item of such kind is as follows: 

~~~js
{ id:"..", value:"..", data:[
	//will be shown in slave component
	{ id:"..", value:".." },
	{ id:"..", value:".." }
]}
~~~

{{sample 17_datatree/04_api/08_bind.html}}

- **$data** - the object of a selected item (without children) is pushed to slave component. Here you should pass the **format** of subdata presentation: 

Format can be a string that defines the **key** by which desired data is set in the item. This is not the key by which children are set
in the [data format](desktop/data_types.md) (by default it is "data"): 

~~~js
$$("grid1").bind( $$("tree"), "$data", "records");
~~~

JSON of a tree item of such kind is as follows:

~~~js
{ id:"..", value:"..", records:[
	//will be shown in slave component
	{ id:"..", value:".." },
	{ id:"..", value:".." }
]}
~~~

{{sample 17_datatree/04_api./09_subdata.html }}

Format can be set via a function where you describe binding behavior manually: 

~~~js
$$("grid2").bind( $$("tree"), "$data", function(obj, source){
	if (!obj) return this.clearAll();
	var fulldata = [].concat(source.data.getBranch(obj.id)).concat(obj.records);
	this.data.importData(fulldata, true);
});
~~~

Here we get item chilren with the help of a **getBranch()** method, combine them with data set by **records** key and
[import](api/datastore_importdata.md) the resulting array into slave datatable. 

{{sample 17_datatree/04_api./09_subdata.html}}

##Binding Events 

- **onBindApply** – fires the moment binding is applied;
- **onBindRequest** - fires when the component is ready to receive data from the master component;
- **onBindUpdate** – fires when the value in the slave view changes and *save()* is called to update master. 

~~~js
$$("files").bind($$("folders"));

$$("files").attachEvent("onbindapply", function(){
	$$("preview").setHTML(" ");
}); // makes the preview template empty
~~~

##Default Data to Prevent Undefined Values

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

##Binding. Form and Component Integration. ServerSide. 

As a rule, form doesn't communicate directly from server-side. It receives data from the component it is bound with and the changed data is sent first to the component before being saved to the dastabase. 

However, the exist a dataFeed method to allow for reloading data into the bound directly from server, not from the client.

~~~js
dhx.ui({
	view:"form", 
    id:"myform1",
    ...//config  
    dataFeed: "data/form.php"
});

$$("myform1").bind($$("datatable1"));
~~~

The functionality can be used when the form should get the data from the related table rather than from that of the master component. 

<h3 id="data_saving">Data Saving</h3> 

When a form is bound to a component, data from the selected item is transmitted to the form as well as any changes you make within the form are saved automatically to the selected item. 

It happens on calling the **save();** method

~~~js
$$("myform1").save();
~~~

But if you have **two forms** bound to one and the one component and you save each of the forms separately, the data from the previously saved one is lost. The solution is the **saveBatch()**
method that makes simultaneous saving of several forms. It is called from the master component rather than from either of the slave forms. 

~~~js
$$('myStore').saveBatch(function(){
     $$('myform1').save();
     $$('myform2').save();
});
~~~

The full **saving algorithm** is described below. 

###Saving to DB.

If you load data from a database, saving is implemented in the same way. But you must initialize a **[DataProcessor](desktop/dataprocessor.md)** for this component since it handles all the client-to-server operations. 

####Loading Database Data to the DataCollection

First, you init the [dataCollection](desktop/nonui_objects.md) to store serverside data and sync it to the needed UI component. 

~~~js
var orders = new dhx.DataCollection({
	url:"data/orders.php", //data loading from DB
	save:"connector->data/orders.php" //dataProcessor to save data to DB
});

$$('order-grid').sync(orders);
~~~

Then, bind form to the dataCollection rather than to the synced component. 

~~~js
$$("order-form").bind(orders); 
~~~

Data will be saved to the dataCollection and to the component as well as to the database. 

####Direct Loading from the Database

In this case, you specify **loading url** within the component and initialize **[dataProcessor](desktop/dataprocessor.md)**. 

Then the form is bound to the component and **save()** method for the form will update the component and the database record. 

~~~js
dhx.ui({
	view:"datatable",
    id:"order-grid",
    ...//config
	url:"data/orders.php", //data loading
	save:"connector->data/orders.php"  //dataProcessor init
});

$$("myform1").bind($$("order-grid"));
~~~

###Saving Algorithm

Saving data from the form to the component (and the database table) is a three-stage process: 

- checking whether **changes** in the form were made. Find **isDirty** Api [here](desktop/form_tasks.md); 
- **validating** data on the client-side. Look how to define [Validation Rules](desktop/data_validation.md);
- **saving** the data if it is valid.

~~~js
save_order:function(){
	var form = $$("myform1");
	if (form.isDirty()){ //checking for chages
		if (!form.validate()) return false; //validation
		form.save(); //saving to the component
	}
	return true;
}
~~~



