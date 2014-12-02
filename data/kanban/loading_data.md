Loading and Saving Data
========================

Kanban board is based on [DataStore](api/refs/datastore.md), non-hierarchical (inline) store. Its data items are grouped by their **status** value to be displayed in the corresponding list. 

Loading data into Kanban Board
-----------------------------

Data can be [loaded](datatree/loading_data.md) from different sources. However, Kanban stores data items as json objects:

~~~js
{
    id: 1,
    status: "new",
    text: "Kanban board documentation",
    tags: "kanban,webix",
    $index: 0,
    ...
}
~~~

Each data item possesses unique **id** property and set of other properties:

- status - {string} item status, defines the list in which an item will be shown
- text - {string} item/task title
- tags - {string} comma separated list of tags
- $index - {numeric} the task position in the list that the item relates to

Kanban Board supports all [data formats](desktop/data_types.md) of the Webix library.

There are 2 main ways you can specify data source for Kanban Board:

1. To define the data set in the object constructor. 

2. To use the api/link/ui.tree_url_config.md property.

Both ways lead to one and the same result and don't have any specificity.

Loading from inline dataset
-------------------------------

If you want to specify the data set directly on the page, you can use
the api/link/ui.tree_data_config.md property.


~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", type:"space",
		cols:[
			{ header:"Backlog",
				body:{ view:"kanbanlist", status:"new" }},
		    ...
		],
        //data collection									/*!*/
		data: base_task_set								    /*!*/
	});
});
~~~

Loading from a data file
--------------------------

To load data from a file, you can use the api/link/ui.tree_url_config.md property.

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", type:"space",
		cols:[
			{ header:"Backlog",
				body:{ view:"kanbanlist", status:"new" }},
		    ...
		],
		//url to the file with data collection			/*!*/
        url: "tasks.php"								/*!*/
	});
});
~~~

Saving data
------------

There are a lot of ways to save data in Webix. You can find the detailed description in the [Data Saving](desktop/serverside.md#datasaving) article.

For example, in the case of using DataProcessor you can set the api/link/ui.proto_save_config.md property: 

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", type:"space",
		cols:[
			{ header:"Backlog",
				body:{ view:"kanbanlist", status:"new" }},
		    ...
		],
        url: "tasks.php",								/*!*/
        save: "../tasks_save.php"						/*!*/
	});
});
~~~


