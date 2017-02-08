Adding and Deleting Items
==========================

Adding and deleting can be implemented in the form of events that fire on user actions. You can set handlers on button clicks that will call the corresponding methods: 
api/link/ui.proto_add.md or api/link/ui.proto_remove.md.

Adding new items
-------------------------

Basic syntax will look as follows:

~~~js
// get random id
var itemId = webix.uid();

// add an item to Kanban board
$$("myBoard").add({
	id: itemId,
    text: "Kanban docs",
    status: "new",
    ...     
});
~~~

An added item should contain the 'status' property in order to be added in one of Kanban lists. 

{{sample
63_kanban/03_data_operations/01_add.html
}}

You can add an empty item and then open the [edit](kanban/editing_items.md) form for it, giving a user the possibility to set necessary values.

Deleting items
----------------------------

To remove an item you should apply the remove() method to it:

~~~js
// delete an item
$$("myBoard").remove(itemId); 
~~~

An example of deleting a selected item is given below:

~~~js
var itemId = $$("myBoard").getSelectedId();
if(itemId)
   $$("myBoard").remove(itemId); 
else
   webix.message("No item is selected!");   
~~~

All items can be removed from Kanban board via the api/link/ui.proto_clearall.md method:

~~~js
$$("mylist").clearAll();
~~~


More information about adding and removing items you can find [here](desktop/add_delete.md).

{{sample
63_kanban/03_data_operations/01_add.html
}}
