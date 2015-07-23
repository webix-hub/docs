Customizing Kanban's structure
===================

Kanban Board has a [layout](desktop/layout.md) structure. It means that it consists of rows and columns that can be combined in different ways.

A column has a header with its name and a body which can contain either a KanbanList view or other rows- or cols-layouts (to create a more complex structure).

In order to specify rows on the board the property **rows** is used and the **cols** property is used to define columns.

A simple Kanban Board may look as:

<img src="kanban/kanban_front.png"/>


In case your working process consists of many stages, you may need to make a more complex Kanban board to reflect the full flow of work.


Splitting columns
---------------------------

Let's imagine that you want to make a Kanban Board consisting of 4 columns, besides:

- the 1st, 2nd and 4th columns contain KanbanLists
- the 3rd column has a cols-layout inside (2 columns) 
- each of the columns has 2 rows:
	- the upper rows contain subheaders
	- the lower rows have lists inside

The scheme of the board will look as:

<img src="kanban/kanban_layout_scheme.png"/>

<br>

To implement this scheme we'll use the code below:

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", type:"space",
		cols:[
			{ 
            	header:"Backlog",
				body:{ view:"kanbanlist", status:"new" }
            },
			{ 
            	header:"In Progress",
				body:{ view:"kanbanlist", status:"work" }
            },
			{ 
            	header:"Testing", gravity: 1.3,
				body:{

					cols:[
                    		{
                            	rows:[
										{ template:"Ready to test", height:40},
										{ view:"kanbanlist", status:"ready"}
								]
                            },
							{
								rows:[
										{ template:"In test", height:40},
										{ view:"kanbanlist", status:"test"}
								]
                            }
                         ]
                }},
			{ 
            	header:"Done",
				body:{ view:"kanbanlist", status:"done" }
            }
		],
			data:base_task_set
	});
});
~~~
<br>

The result will be the following: 

<img src="kanban/kanban_layout_columns.png"/>

{{sample
63_kanban/04_layouts/01_columns.html
}}

Creating a complex structure
-----------------------------

For example, you need to create a Kanban board's structure consisting of 3 columns, besides:

- the 1st and the 3rd columns contain lists
- the 2nd column has a rows-layout:
	- the upper row has a list inside
    - the lower row contains three columns with lists

The picture below illustrates the idea:

<img src="kanban/kanban_complex_scheme.png"/>


The code snippet below creates the Kanban Board described in the above-mentioned scheme:

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", 
        type:"space",

			cols:[
				{ 
                	header:"Backlog",
					body:{ view:"kanbanlist", status:"new"}
                },
				{ 
                	header:"Ready", gravity: 3,
					body:{
						type: "wide",
						rows:[
							{
                            	view:"kanbanlist", 
                                status:"ready", 
                                xCount: -1, 
                                type:{ width: 150 },  
                                gravity: 0.3 
                            },
							{
								cols:[
									{ 
                                    	header:"In Progress",
										body:{ view:"kanbanlist", status:"work"}
                                    },
									{ 
                                    	header:"Testing",
										body:{ view:"kanbanlist", status:"test"  }
                                    },
									{ 
                                    	header:"Done",
										body:{ view:"kanbanlist", status:"done"  }
                                    }
								]
							}
						]
					}
				},
				{ header:"Done",
					body:{ view:"kanbanlist", status:"complete" }}
			],
			data:task_set
	});
});
~~~

You can see the result of the code's work in the following picture:

<img src="kanban/kanban_complex_layout.png"/>

As you can see, tasks in the upper row of the 2nd column are placed next to each other. 

The following section of the article gives the details on creating such a configuration.

{{sample
63_kanban/04_layouts/02_complex_layout.html
}}

Changing structure of Kanban lists
----------------------------------

By default, all kanban lists have items that are aligned one by one in a column. 

However, in some cases we need to show more than one item per row (like in the above example).

Such a configuration can be created by means of setting a fixed width for list items and resetting the **xCount** property (-1 value).

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", 
        type:"space",
        	{ 
            	header:"Ready", gravity: 3,
                body:{
                	type: "wide",
        			rows:[
						{
                			view:"kanbanlist", 
                            status:"ready", 
                            xCount: -1, 				/*!*/
                            type:{ width: 150 }  		/*!*/
                		}
            		]
                }
             },
  			data:task_set
	});
});
~~~

Creating swimlanes
-------------------

It is possible to assign a complex value to a **status** property of a Kanban list. That will allow to implement swimlanes in your Kanban board.

For example, lets take a Kanban board with *To Do*, *In Progress* and *Done* columns containing lists with *new*, *work* and *done* statuses.
The *In Progress* column should contain tasks for *development* and *design* teams. So, instead of one list we may set two lists with 
**complex statuses** that consist of two properties: **status** and **team**.

~~~js
webix.ui({
    view:"kanban",
    cols:[
   	 {
   		 header:"To Do",
   		 body:{ view:"kanbanlist", status:"new"}
   	 },
   	 {
   		 header:"In progress",
   		 body:{
   			 rows:[
   				 { template: "Development", height: 27},
   				 { view: "kanbanlist", status: { status: "work", team: 1 }},
   				 { template: "Design", height: 27},
   				 { view: "kanbanlist", status: { status: "work", team: 2 }}
   			 ]
   		 }
   	 },
   	 {
   		 header:"Done",
   		 body:{ view:"kanbanlist", status:"done" }
   	 }
    ],
    data:[
   	 	{ id:1, status:"work", team: 1, text:"SpreadSheet NodeJS" },
    	{ id:1, status:"work", team: 2, text:"New skin" }
    ]
});
~~~

Each loaded data item (task) will be placed into a list the "status" values of which correspond to "status" and "team" properties of the task.

{{sample 
63_kanban/04_layouts/03_swimlanes.html
}}

You can use any names of data properties within the complex **status** of a Kanban list and these names will be used to filter data items. 

But it is advised to have a *status* name among them and use a *status* property in item data. It ensures correct work of a Kanban board when moving the task into another Kanban list with a simple status.

