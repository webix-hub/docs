API Reference
================

Kanban board is a view that is based on Layout and DataStore and supports their methods, properties and events. However, there are two specific methods in Kanban:

- <a href="#getOwnerList">getOwnerList</a> - gets List that displays an item
- <a href="#eachList">eachList</a> - calls a function for each list in Kanban board

###<span id='getOwnerList'>getOwnerList</span>

Method returns Kanbanlist view that displays an item

~~~js
var list = $$("myBoard").getOwnerList("task1");
~~~

params:

- itemId - {string} the item id

###<span id='eachList'>eachList</span>

Iterates over all list in Kanban and calls a function for them

~~~js
$$("myBoard").eachList(function(list,status){
   if(list){
   	  list.define("type","edit");
      list.render();
   } 
});
~~~

params:

- func - a function that will be called for each kanban list, takes two arguments:  
 - list - KanbanList object
 - status - list status
