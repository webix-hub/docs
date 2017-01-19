Specific API Reference
================

Kanban board is a view based on Layout and DataStore and it supports their methods, properties and events. However, there are two specific methods in Kanban:

- <a href="#getownerlist">getOwnerList</a> - gets List that displays an item
- <a href="#eachlist">eachList</a> - calls a function for each list in Kanban board

###<span id='getownerlist'>getOwnerList</span>

Method returns KanbanList view that displays an item

~~~js
var list = $$("myBoard").getOwnerList("task1");
~~~

parameters:

- itemId - {string} the item's id

###<span id='eachlist'>eachList</span>

Iterates over all lists in Kanban and calls a function for them

~~~js
$$("myBoard").eachList(function(list,status){
   if(list){
   	  list.define("type","edit");
      list.render();
   } 
});
~~~

parameters:

- function - a function that will be called for each kanban list, takes two arguments:  
 - list - KanbanList object
 - status - the list's status
