Editing Items
===========

Changing an item's properties
----------------------------------------
To change properties of an item, you should use the following technique:

~~~js
// get item data by item id
var task = myBoard.getItem("task1");
// set new values
task.text = "Ticket 225";
task.status = "work";
task.color = "red";
...
// apply changes
myBoard.updateItem("task1", task);
~~~

You can read the details on the api/datastore_getitem.md and api/datastore_updateitem.md methods.

Editing via a Form
----------------------------------

###Webix Form and Board Binding

[Form](desktop/form.md) and Kanban Board can be bound to each other to ensure select-based **synchronous changing** of their **data**,
which allows editing data on the Board:

- select a kanban's item the data of which you want to show in Form (use api/collectionbind_setcursor.md method);
- form will be filled with the item's data that you can edit;
- form [saving](desktop/binding_details.md#data_saving) will send changed data back to the component. 

~~~js
// binding Form to Kanban data
$$("myForm").bind($$("myBoard"));

// select an item for editing
function editItem(itemId){
   $$("myBoard").setCursor(itemId);
}

// data saving
function saveData(){
   $$("myForm").save();
}
~~~

{{sample
63_kanban/03_data_operations/03_server.html
}}


You can [study data binding separately](desktop/data_binding.md).
