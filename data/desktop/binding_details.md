Working with Bound Components
=============

Binding makes selected record of one component a datasource for another. The basic binding tie is established between two components using their IDs of variables they are stored in (if any). 

~~~js
$$('my_form').bind(list); 
~~~

It has already been [described](desktop/data_binding.md).

Here different aspects of bata binding are examined. 

##Binding Rules

The **bind()** method allows customization during binding by providing a **rule** and, optionally, **data format**. Any custom fucntion may become the binding rule. 

List data is filtered according to the option you choose within a [richselect](desktop/controls.md#richselect) control. 

~~~js
$$('list').bind($$('richselect'), function(obj, filter){
				return obj.category == filter; //reference to list data object
			});
~~~

The function takes **data object** and **filter** as parameters. If you work with serverside data, specify *table name* instead of the "obj". 

{{sample 80_docs/binding_rule.html}}

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

##Cursor Concept for Bound DataCollections

Cursor concept is used to control focus within the application  with bound as well as sycned data-management components. Its position is the **ID of the active data item.**

You can get as well as set cursor position with the help of the following methods: 

- **setCursor(cursor);** - string, number -  sets the position of the cursor, the ID of the necessary data item.
- **getCursor();** - gets the current cursor position. 

If needed, cursor concept can be included into a binding rule. 

~~~js
$$("datatable2").bind($$("datatable1"), function(obj, cursor){
			return obj.empl_id == cursor.id;
		}); //"obj" is a data object of a master "datatable1". 
~~~

The rule sets display mode for the slave datatable ("datatable2"). For successul bind 'empl_id' of the slave datatable must coincide with the ID of selected item in the master datatable. 

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

###Data Saving 

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
~~~



