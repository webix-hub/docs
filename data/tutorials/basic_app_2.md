Interaction Between App Elements
======================

As soon as you've learned how to [create a basic app](tutorials/basic_app.md), let's go on and enable the app's functionality with the help of attached 
events and functions.

In the previous step we made a [form](desktop/form.md) and a [list](desktop/list.md). Now we want to **add items** to the list by filling the form as well as to **delete items** from list.

<img src="tutorials/list_selected.png"/>

At the same time, here we'll additionally create an **update** [button](desktop/button.md) on toolbar to update existing records in the list and a **clear form** button to delete values from the form before inputting new values. 

##Setting IDs, attaching event handlers

We need to attach functions to the buttons so that they can implement **adding**, **updating** and **deleting** operations stated by their values.

An event handler can be attached to the components in two ways: 

- using native [attachEvent()](api/eventsystem_attachevent.md) method;
- using components properties such as [click](api/renderstack_click_config.md) and [on](api/eventsystem_on_config.md).

All the native methods (including the one that attaches event handlers) are called from the component object that can be received using the following construct: 

~~~js
var obj = $$("component_id");
~~~

And then call any native method, e.g.: 

~~~js
$$("component_id").attachEvent(...);
$$("component_id").clear();
~~~

To attach functions to buttons, you need to specify the event that will trigger their execution and the functions (function names). Here, dedicated functions are called by button **click**. 

~~~js
{ view:"button", value:"Add", width:70, click:"add_row"},
{ view:"button", value:"Delete", width:70, click:"delete_row"},
{ view:"button", value:"Update", width:70, click:"update_row"},
{ view:"button", value:"Clear Form", width:70, click:"$$('myform').clear())"}
~~~

Then, let's set **IDs** to the needed components. We will work with **form** to **get values** from it as well as with **list** to **add** and **update records** there.

~~~js
{view:"form", id:"myform", elements:[...]},
{view:"list", id:"mylist", template:"..."}
~~~

Apart from ID, components and controls have another identifier, **name.** It's a read-only component property. In the case of the form component, we need element **names** to derive **form values**. 

~~~js
{ view:"text", name:"title", placeholder:"Title"},  
{ view:"text", name:"year", placeholder:"Year"} 
~~~

Now, let's describe the functions:

##"Delete" button to delete a row

To delete a row from the list, we need to get the selected item and them pass it to the **remove();** function as parameter. 

~~~js
function delete_row(){
	var id = $$("mylist").getSelectedId(); //returns the ID of selected item
	$$("mylist").remove(id);
}
~~~

##"Add" button to add a new record

To add an item, we need to get text values from the form and assign them to list according to its template values. 

Form values are derived with the **getValue()** function called from the form using its ID. To get to the necessary value, specify its **name**. 

~~~js
function add_row() {
	$$("mylist").add({
		title: $$("myform").getValues().title,
		year: $$("myform").getValues().year,
	})
}
~~~

##"Update" button to update existing records

Item update is a **two-step** process. 

- Firstly, you need to transmit data from selected list item to form fields;
- Secondly, you need to push the changed data into the list so that it replaces old values.

1 . Here we use **setValues();** method to set selected data as values for the form fields. The function fires on list item selection and takes this item ID as argument. List values are set to the fields 
with specified names:

~~~js
$$("mylist").attachEvent("onAfterSelect", function(id){
	$$("myform").setValues({
		title: $$("mylist").getItem(id).title,
		year: $$("mylist").getItem(id).year 
	});
});
~~~

2 . The core of a custom **update_row()** function is the **getValues()** method that gets values from form fields. Finally, the list is updated with the **updateItem()** function:

~~~js
function update_row() {
	var sel = $$("mylist").getSelectedId(); //checks whether the item is selected
	if(!sel) return; // if not, function execution is stopped
				
    var value1 = $$('myform').getValues().title; 
	var value2 = $$('myform').getValues().year;
				
	var item = $$("mylist").getItem(sel); //selected item object
	item.title = value1;
	item.year = value2;
	$$("mylist").updateItem(sel, item);
}
~~~

##Confirmation window

To avoid accidental deletion of an important item, you need to safeguard user actions with a "confirm" window:

~~~js
function delete_row() {
	var id = $$("mylist").getSelectedId();
	webix.confirm({
		title: "Delete",
		text: "Are you sure you want to delete the selected item?",
		callback: function(result) { 
			if (result) {
				$$("mylist").remove(id);
			} 
		}
	});
}
~~~
Confirmation window is initialized by the webix.confirm constructor. It includes 

- **title** (string) - text header of the window;
- **text** (string) - text message to the user;
- **callback** - the function that will be called on button click. The **result** parameter is *true* or *false* depending on your choice (yes or no). If 
result is positive, the **remove();** function is executed. 

Read more about message boxes in the [corresponding chapter](desktop/message_boxes.md).

{{sample
80_docs/02_basic_app.html
}}

####Related articles: 

- [Event Handling](desktop/event_handling.md)
- [Data Update](desktop/update.md)
- [HTML form and Form Treatment](desktop/form_tasks.md)

 
Go to the previous page - [Creating a Basic  App](tutorials/basic_app.md)

Go further to [Server-Side Integration](tutorials/basic_app_3.md)

@metadescr: Learn how to set IDs for app's elements and attach events to them, how to implement adding, deleting and updating of items and how to use the confirmation window.
@doctitle: How interaction between app elements works. 

@complexity:1
