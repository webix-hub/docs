Interaction Between App Elements
======================

As soon as you've learned how to [create a basic app](tutorials/basic_app.md), let's go on and enable the app's functionality with the help of attached 
events and functions.

In the previous step we made a [form](desktop/form.md) and a [list](desktop/list.md). Now we want to **add items** to the list by filling the form as well as to **delete items** from list.

<img src="tutorials/list_selected.png"/>

At the same time, here we'll additionally create an **update** [button](desktop/controls.md#button) on toolbar to update existing records in the list and a **clear form** button to delete values from the foorm before inputting new values. 

##Setting IDs, attaching events

We need to attach functions to the buttons so that they can implement **adding**, **updating** and **deleting** operations stated by their values. 

Functions are attached to components and controls either by using their **IDs** or specifying the necessary event within the component / control view. In fact, component **ID** is needed each time you want to 
perform an operation it. 

To attach functions to buttons, you need to specify the event that will trigger their execution and names of the fucntions. Here, dedicated functions are called by button **click**. 

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

Apart from ID, components and controls have another identifier, **name.** It's a read-only component property. In case with form, we need element **names** to derive **form values**. 

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

2 . The core of a custom **update_row()** function is the **getValues()** method that gets values from form fields. Finally, the list is updated with the function of the same name - **update()**

~~~js
function update_row() {
	var sel = $$("mylist").getSelectedId(); //checks whether the item is selected
	if(!sel) return; // if not, function execution is stopped
				
    var value1 = $$('myform').getValues().title; 
	var value2 = $$('myform').getValues().year;
				
	for (var i = 0; i < sel.length; i++){
		var item = $$("mylist").getItem(sel[i]); //for every selected item
		item.title = value1; //setting values for list item
		item.year = value2;
		$$("mylist").updateItem(sel[i], item); //updating
	}
}
~~~

##Confirmation window

To avoid accidental deletion of an important item, you need to safeguard user actions with a "confirm" window:

~~~js
function delete_row() {
	var id = $$("mylist").getSelectedId();
	webix.confirm({
		title: "Delete",
		text: "Are you sure you want to delete the selected contact?",
		callback: function(result) { 
			if (result) {
				$$("mylist").remove(id);
			} 
		}
	});
}
~~~
Confirmation window is inited by the webix.confirm constructor. It inlcudes 

- **title** (string) - text header of the window;
- **text** (string) - text message to the user;
- **callback** - the function that will be called on button click. The **result** parameter is *true* or *false* depending on your choice (yes or no). If 
result is positive, the **remove();** function is executed. 

Read moew about messabe boxes in the [corresponding chapter](desktop/message_boxes.md).

{{sample
80_docs/02_basic_app.html
}}

####Related articles: 

- [Event Handling](desktop/event_handling.md)
- [Data Update](desktop/update.md)
- [HTMLform and Form Treatment](desktop/form_tasks.md)

 
Go to the previous page - [Creating a Basic  App](tutorials/basic_app.md)

Go further to [Server-Side Integration](tutorials/basic_app_3.md)

@complexity:1
