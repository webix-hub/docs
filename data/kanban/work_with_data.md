Working with Data
===================

 
Kanban board is based on [DataStore](api/refs/datastore.md), non-hierarchical (inline) store. That's why it supports all the DataStore API, including methods, events and properties.

In this article you'll find the list of main Kanban features inherited from DataStore. The specific Kanban API is described in the articles kanban/api_reference.md and kanban/events.md.


Getting the item object
-------------------------------
To get the data item object, you should use the api/datastore_getitem.md method:

~~~js
webix.ui({
	view:"kanban",
    id: "myBoard",
	...
	data:[
		{id:"task1", text:"Drag-n-drop support", status: "new", $order: 0},
		{id:"task2", text:"Uploader for the form", status: "work", $order: 0},
        ...
	]
});     
 
//'task' variable will contain an object of the related kanban record
var task = $$("myBoard").getItem("task1");
 
//you can access data members directly
var title = task.text;//-> "Drag-n-drop support"
~~~



Checking the existence of an item
-------------------------------------------
To check whether a specific item exists in the data set, you should use the api/datastore_exists.md method:

~~~js
var myBoard = webix.ui({
	view:"kanban", 
	...
	data:[
		{id:"task1", text:"Drag-n-drop support", status: "new", $order: 0},
		{id:"task2", text:"Uploader for the form", status: "work", $order: 0}
	]
});      
 
myBoard.exists("task1");// -> true
myBoard.exists("task2222");// -> false
~~~



Changing data properties of an item
----------------------------------------
To change the current value of some item property, you should use the following technique:

~~~js
var task = myBoard.getItem("task1");
task.text = "Ticket 225";
 
myBoard.refresh();
//or
myBoard.updateItem("task1", task);
~~~
Methods api/datastore_refresh.md and api/datastore_updateitem.md lead to one and the same result and don't have any specificity.



Iterating data items
-------------------------------
To iterate through the collection of data items, you should use the  api/datastore_each.md method of the api/refs/datastore.md class.

~~~js
var myBoard = webix.ui({
	view:"kanban", 
	...
	data:[
		{id:"task1", text:"Drag-n-drop support", status: "new", $order: 0},
		{id:"task2", text:"Uploader for the form", status: "work", $order: 0},
        ...
	]
});

var titles =[];
myBoard.data.each(function(obj){ titles.push(obj.text); });
//-> titles=["Drag-n-drop support", "Uploader for the form"]
~~~

The code is equal to a standard 'for'-loop: 

~~~js
for(i = 0; i<data.length; i++ ){
	titles.push(obj.text);
}
~~~


Filtering 
-----------

If you need to show only a part of loaded data depending on a certain rule, you can apply the [filtering](desktop/filter_sort.md) technique to Kanban board. 

It is possible to filter data by a single property. Let's assume that we need to show only tasks assigned to a certain person:

~~~js
var myBoard = webix.ui({
	view:"kanban", 
	...
	data:[
		{id:"task1", text:"Drag-n-drop support", status: "new", personId: "1", ...},
		{id:"task2", text:"Uploader for the form", status: "work", personId: "2", ...},
        ...
	]
});

$$("myBoard").filter("#personId#","1");
~~~

Or you can set complex filtering rules. 
In this case you need to set a function that will return **true** or **false** value. If function returns **true** for an item, this item will be displayed:

~~~js
var myBoard = webix.ui({
	view:"kanban", 
	...
	data:[
		{id:"1", text:"Task 1", status: "new", personId: "1", projectId: "22", ...},
		{id:"2", text:"Task 2", status: "work", personId: "2", projectId: "22", ...},
        ...
	]
});

$$("myBoard").filter(function(task){
    return task.personId == "1" && task.projectId == "22";
});
~~~
