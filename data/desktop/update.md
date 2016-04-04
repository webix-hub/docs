Data Updating
===================

Component items can be [edited](desktop/edit.md) within the component itself, within its rows and cells, provided that the component is switched to **editable** mode. 

Data updating allows for editing info in dedicated **input fields** like [UI text](desktop/text.md). It works regardless of the component's editability state. 

###Updating data for selected items can be implemented in two ways:

- one by one - with the help of **updateItem()** function;
- in groups - by pushing data from **bound** form / htmlform.  [Data Binding](desktop/data_binding.md)

##UpdateItem() Function

Updating process happens in two stages: 

1 . Placing selected data to some editor (ui-related text or dedicated HTML input field) with the help of an attached event.  

~~~js
<input type="text" id="value" style='width:300px' value="new value" />
...
$$('mylist').attachEvent("onAfterSelect", function(id) {
	var value = this.getItem(id).title;
	document.getElementById("value").value = value;
}); // as a result, the item title from the dataset appears in the text field
~~~ 

<img src="desktop/update_field.png"/>

2 . Saving the edited data back to the component. It is implemented with an update function that takes ID of selected 
item as argument. Called from component object, it is included into the complex update function. 

~~~js
function update_item() {
	var data = $$('data'); // ID of the data-presenting component
	var sel = data.getSelectedId(true); 
	if (!sel) return;  //if nothing is selected, there's nothing to update!
	var value = document.getElementById("value").value; //deriving new value from the input
	for (var i = 0; i < sel.length; i++) {
		var item = data.getItem(sel[i]);
		item.title = value; //setting the new value for the item 
		data.updateItem(sel[i], item); //the dataset is updated!
	}
}
~~~

{{editor http://webix.com/snippet/be92cf44	Server-side Integration:Dataview }}

##Form / HTMLform binding 

Data binding helps greately simplify the process and makes editing of several item values convenient. It ensures that a data component ([dataview](desktop/dataview.md), [list](desktop/list.md), etc.) 
transmits data to a [form](desktop/form.md) / [htmlform](desktop/htmlform.md) each time an item there is selected.  

[More info](desktop/data_binding.md) on Data Binding

~~~js
$$('htmlform1').bind($$('listA'));
~~~

The function above makes list a datasource for form, so when an item in the list is selected, the form is filled. Input names in the form must coincide with item 
properties from teh initial dataset (those you include into #hash signs# within data [template](desktop/html_templates.md)) for the list. 

<img src="desktop/form_binding.png" />

Having finished editing data in form fields, call the **save** function to push new data into the list. 

~~~html
<input type="button" value="Submit" onclick='$$("htmlform1").save()'/>
~~~

{{editor http://webix.com/snippet/0a85d055	Data Binding}}

The same functionality is used when updating data items loaded from the database. Read about [Server-side Integration](desktop/serverside.md) in the corresponding 
chapter of the documentation. 

@complexity:2

