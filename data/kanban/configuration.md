Configuring Kanban
===================

Kanban has a desktop/layout.md structure. It means that it consists of rows and columns that can be combined in different ways.

Thus, in order to specify rows on the board use the property **rows** and to define the columns use the **cols** property.
The columns have headers with their name and a body, where the name of the view and the status of a column is specified.

In this article we'll consider a couple of detailed examples of creating Kanban Board.

Adding columns and rows into a list
---------------------------

Let's imagine that you want to make a Kanban Board consisting of:

- 4 columns
- the 3rd column has two more columns inside, each of them have subheaders

The scheme of the board will look as:

<img src="kanban/kanban_layout_scheme.png"/>

<br>

To implement this scheme we'll use the code below:

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", type:"space",
		cols:[
			{ header:"Backlog",
				body:{ view:"kanbanlist", status:"new" }},
			{ header:"In Progress",
				body:{ view:"kanbanlist", status:"work" }},
			{ header:"Testing", gravity: 1.3,
				body:{

					cols:[{
							rows:[
								{ template:"Ready to test", height:40, css:"sub_header"},
								{ view:"kanbanlist", status:"ready"}
						]},
							{
							rows:[
								{ template:"In test", height:40, css:"sub_header"},
								{ view:"kanbanlist", status:"test"}
							]
						}
					]

					}},
			{ header:"Done",
					body:{ view:"kanbanlist", status:"done" }}
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

In case your working process consists of many stages, you may need to make a more complex Kanban board to reflect the full flow of work.

For example, you need to create the following Kanban board's structure:

- three lists
- the 2nd list will contain a row in the upper part and 3 columns under the row

The picture below illustrates the idea:

<img src="kanban/kanban_complex_scheme.png"/>


The code snippet below creates the Kanban Board described in the above-mentioned scheme:

~~~js
webix.ready(function(){
	webix.ui({
		view:"kanban", 
        type:"space",

			cols:[
				{ header:"Backlog",
					body:{ view:"kanbanlist", status:"new"}},
				{ header:"Ready", gravity: 3,
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
									{ header:"In Progress",
										body:{ view:"kanbanlist", status:"work"}},
									{ header:"Testing",
										body:{ view:"kanbanlist", status:"test"  }},
									{ header:"Done",
										body:{ view:"kanbanlist", status:"done"  }}
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