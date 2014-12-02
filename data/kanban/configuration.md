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

The following section of the article gives the details of creating such a configuration.

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
