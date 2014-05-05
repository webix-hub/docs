Data Binding and Syncing
===============

When you have multiple related views (components) on the page you can **bind** them together or **sync** their data in order that any changes in one of the views would 
trigger changes in the bound/synced ones. The main component is called a **master** one while the bound one is a **slave**. Master view
appears to be the datasource for the slave one. 

There are 2 main ways to link data:

- when data in master component changed - slave control gets new data; // **syncing**
- when selection in master component changed - slave control gets new data. // **binding**

In both cases, based on configuration

- slave can take new data from master component;
- slave can take new data from server side.

####Binding and Syncing - Difference

When you **bind** data to any component it means that when you **select** an item from one component, this item will be the datasource for another component.
Most typically, binding is used with some data-presenting component and a [form](desktop/form.md) / [htmlform](desktop/htmlform.md). 

When you **sync** data, it means that the whole visible data from one component is at once **copied** to the other. 

##Data Binding

Data binding is implemented with the help of the **bind** function that is called from the slave component and has a master component as parameter. 

~~~js
$$('htmlform1').bind($$('list1'));
~~~

In this case, selection of any list item will result in the form filling with data from the list. Be careful to specify **name** property for input fields in the form/htmlform. Its values must coincide with template items of 
the master component (in case of [datatable](datatable/index.md) look at column ID-s): 

- component template item =  field **name** in a  form;
- datatable column ID =  field **name** in a  form.


Changes in the slave component will affect master one, which means that if you edit the info in the form, then save it (click sumbit button), the list item will have 
this new data. 

~~~html
<input type="button" name="submit" value="Submit" onclick='$$("htmlform1").save()'/>
~~~

<img src="desktop/data_binding.png" />

{{sample 11_htmlform/05_htmlform_binding.html }}

More info on Component and Form integration via binding is in the [corresponding article](desktop/binding_details.md).

Slave can  as well be **unbound** from the master by the opposite method: 

~~~js
$$('htmlform1').unbind();
~~~

From now on, list changes cannot affect form data and vice versa. 

##Syncing Data of Two Components

Data syncing allows making a full or partial copy of data from one data-presenting component and pass it to the other one. Any change in the master component results in the 
same change in the slave one. 

There can be more than one slave component. In this case, all slaves change simultaneously on master component change. 

{{note
Note that this functionality works with components datastores, that's why **data** property is used everywhere.
}}

####Full Syncing: 

The datasets of the two components are absolutely identical. 

~~~js
$$('slave_component').data.sync('master_component');
~~~

####Partial (Filter-Based) Syncing

Slave view shows only the data items that comply to a certain criterion defined by the function. Here only the films shot after 1994 will be shown. 

~~~js
$$('dview2').data.sync($$('listA'), function(){
	    this.filter(function(data){
		return data.year > 1994;
	});
}); 
~~~

####Unsyncing 

If the syncing functionality is no longer needed, you can call the [unsync](api/datastore_unsync.md) command for the component that was previously synced with another one: 

~~~js
$$('dview2').data.unsync();
~~~

[Related into on data filtering](desktop/filter_sort.md). 

##Simultaneous Operations within Synced Componens

In case of two and more component synced to one datasource (either a visible component or [non-visible dataCollection](desktop/nonui_objects.md)), it seems nice to **synchronize user operations** as well. 

For instance, if an item is selected in one of components, the same item should be selected in the synced one. This is easily done programmatically. 

Take for instance we have a [dataview](desktop/dataview.md) and [datatable](datatable/index.md), both synched with the same dataCollection. 

~~~js
var data = new webix.DataCollection({
    url:"../my_data.json" //load data from an external file
}); 

$$("dataview_1").sync(data); 
$$("datatable_1").sync(data);
~~~

The event system for [selection](desktop/selection.md) offer the **onAfterSelect** event. The function that is fired on this event takes the **ID of selected item** as parameter: 

~~~js
$$("dataview_1").attachEvent("onAfterSelect", function(id){
	$$("datatable_1").select(id); 
}); //item ID of dataview coincides with that of datatable  row
        
$$("datatable_1").attachEvent("onAfterSelect", function(id){
	$$("dataview_1").select(id.row);
}); //item ID of datatable row coincides with that of dataview item
~~~

{{sample 80_docs/data_binding.html }}

[Data Binding and Syncing with Non-UI objects](desktop/nonui_objects.md)

##One-Time Syncing 

One-time syncing allows for synchronizing the data of two components (one of them can be [DataCollection](desktop/nonui_objects.md)) at a chosen time of the application flow **without tracking data changes afterwards**.

Such syncing presupposes populating one component with the data of another one and is done with api/datastore_importdata.md method:

~~~js
$$("listB").data.importData($$("listA"));
~~~

Note that it's a [DataStore](api/refs/datastore.md) method, so it should be called for component **data**.

@index: 
  - desktop/nonui_objects.md
  - desktop/binding_details.md
  
@complexity:2