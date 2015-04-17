Loading and Saving Data
========================

Data can be [loaded](desktop/data_loading.md) from different sources. However, Kanban stores data items as json objects:

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

Each data item possesses a unique **id** property and a set of other properties:

- status - {string} the item's status, defines the list in which an item will be shown (obligatory)
- text - {string} the item's (task's) title
- tags - {string} a comma-separated list of tags
- $index - {numeric} the task's position in the list that the item relates to

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
		data: [												/*!*/
        	{ id:1, text:"Task 1", status: "new"},						/*!*/
            { id:2, text:"Task 2", status: "new"}   						/*!*/
        ]								    				/*!*/
	});
});
~~~

Loading from a data file
--------------------------

To load data from a file, you can use the api/link/ui.tree_url_config.md property. The url refers to the JSON object that will be loaded into the board after its initialization. 

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", 
        type:"space",
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

For example, in the case of using DataProcessor you can set the  property: 

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

{{sample
63_kanban/03_data_operations/03_server.html
}}

More information about Kanban data loading you can find in [DataStore](api/refs/datastore.md) docs.