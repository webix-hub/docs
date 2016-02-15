Undo Functionality for Data Components
=======================================

While working with Webix data components, you can enable the undo functionality that allows reverting changes in case server returns an error message. 

The undo operation can be applied to any api/refs/datastore.md-based component. It writes all the changes into the inner collection and monitors for data on the server and on the client to be the same.
Thus, you won't have to do it yourself.

To enable undo, you need to include the *undo.js* file on the page.

The undo API includes three methods:

- api/ui.spreadsheet_undo.md - reverts the previously made change in the component.

~~~js
$$("ssheet").undo();
~~~

For example, if you add an item into the component, then change it and finally decide to delete it, a call of the undo() method will revert just the delete operation.

If you want to delete all the changes made to an item and set it to the initial state, you should pass the id of this item to the undo() method.  

- removeUndo(id) - removes the records about all the operations made to an item the id of which is passed to the method.

~~~js
$$("ssheet").removeUndo(id);
~~~

- ignoreUndo() - ignores the undo history track. The method is useful if you want the applied changes not to be reverted by the undo operation in future.

~~~js
$$("list").ignoreUndo(function(){
	$$("list").addItem({...});
});
~~~
