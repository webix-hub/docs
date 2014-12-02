Adding and Deleting Items
==========================


Here you should make use of api/link/ui.proto_add.md and api/link/ui.proto_remove.md methods included into your custom functions.

Adding and deleting is implemented in the form of event taking place on user action. Normally, it is done on clicking the button with a corresponding label.

Adding new item
-------------------------

Basic syntax here looks as follows:

~~~js
// get random id
var itemId = webix.uid();

// add an item in Kanban board
$$("myBoard").add({
	id: itemId,
    text: "Kanban docs",
    status: "new",
    ...     
});
~~~

Added item should contain 'status' property in order to be added in one of canban lists. 


Deleting items
----------------------------

To remove an item you should apply remove method to it:

~~~js
// delete an item
$$("myBoard").remove(itemId); 
~~~

And here is the example of deleting selected item:

~~~js
var itemId = $$("myBoard").getSelectedId();
if(itemId)
   $$("myBoard").remove(itemId); 
else
   webix.message("No item is selected!");   
~~~

All the items can be removed from Kanban board via clearAll() mehtod:

~~~js
$$("mylist").clearAll();
~~~


More information about adding and removing items you find [here](desktop/add_delete.md)


