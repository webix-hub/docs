Undo for Data Components 
========================

While working with Webix data components, you can enable the undo functionality that allows reverting changes in case server returns an error message. 

The undo operation can be applied to any api/refs/datastore.md-based component. 

To enable undo, you need to set the api/undo_undo_config.md parameter to true in the configuration of the component:

~~~js
webix.ui({
	view:"list",
    id:"mylist",
  	template:"#title#",	
  	data:dataset
    undo:true
});
~~~

The undo API includes three methods:

- api/undo_undo.md - reverts the previously made change in the component.

~~~js
$$("mylist").undo();
~~~

For example, if you add an item into the component, then change it and finally decide to delete it, a call of the undo() method will revert just the result of the delete operation.

If you want to delete all the changes made to an item and set it to the initial state, you should pass the id of this item to the undo() method.  

- api/undo_removeundo.md - removes history about all the operations made to an item.

~~~js
$$("mylist").removeUndo(id);
~~~

As a parameter the method takes the id of an item.

- api/undo_ignoreundo.md - calls a function that will be ignored in the undo history track. The method is useful if you want the applied changes not to be reverted by the undo() method in future.

~~~js
$$("mylist").ignoreUndo(function(){
	$$("mylist").addItem({...});
});
~~~

The ignoreUndo() method takes as a parameter the function for which undo history track should be disabled. 

