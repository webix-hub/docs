Adding and Deleting Items
==========================


Here you should make use of api/link/ui.proto_add.md and api/link/ui.proto_remove.md methods included into your custom functions.

Adding and deleting is implemented in the form of event taking place on user action. Normally, it is done on clicking the button with a corresponding label.

Basic Adding and Deleting
-------------------------

Basic syntax here looks as follows:

~~~js
$$("myview").add({
         id:"item_id",  //adding  an item with two properties
         property:"some_value"
})
$$("myview").remove("item_id"); //to delete a single item
 
$$("myview").remove(["idA","idB","idC","idD"]); //to delete multiple items
~~~

Adding User Data from Form
----------------------------

To add an item which is a string entered by user in a desktop/form.md, 
you need to derive this string from the input area and then add data to the desired component. 
Again, specify everything by their ID. It's a common rule for all methods and event handlers.

desktop/form.md and desktop/htmlform.md components have different code for input fields - look for the library's [text](desktop/controls.md#text) 
control and standard html input respectively.
It means that different methods are used to get data from them:

{{snippet
Adding Data from JS Form
}}

~~~js
function addData(){
	$$("data_1").add({
        user:$$('form1').getValues().user, 
        email:$$('form1').getValues().email,
    }, 0);
} //'user' and 'mail' are ID-s of the dedicated text fields
~~~
<br>
{{snippet
Adding data from [HtmlForm]
}}
~~~js
function addData() {
    $$("data_2").add({
        title: document.getElementById("title").value, //data users enter into input field 
        year: document.getElementById("year").value 
    },0)
}
~~~

Deleting Selected Items
-----------------------

Since only [selected](desktop/selection.md) items can be deleted, set the select parameter to true (**select: true**) 
during the initialization of the component.
Before removal let's check whether an item is selected with the help of the simpliest **if-else** statement.

###Deleting one item

~~~js
function removeData(){ 
    if(!$$("data").getSelectedId()){
    webix.message("No item is selected!");
    return; //'data' is an ID of the needed component
}
$$("data").remove($$("data").getSelectedId());
}}
~~~

{{sample 06_dataview/04_manipulations/01_adding.html }}

###Deleting several items

In **multiselect** mode several items can be selected from the dataset. To remove all selected items, make use of a for-loop:

~~~js
function remove_item(){
    var list = $$('mylist');
    var sel = list.getSelectedId(true);
    if (!sel) return;
    for (var i = 0; i < sel.length; i++)
    list.remove(sel[i]);
};
~~~

All the items can be removed from the component with the help of the following code:

~~~js
$$("mylist").clearAll();
~~~
