Adding Subviews
====================

Besides simple subrows it's also possible to add the whole subview inside of a datatable. Below you can the details on how to insert a subgrid or a subform into Datatable.

Sub-Grid in a DataTable
---------------------

<img src="datatable/subgrid.png">

To add any subview into Datatable, use the **subview** property. Inside of this property you should specify a Grid configuration with all the necessary parameters:

~~~js
webix.ui({
	view:"datatable",
	subview:{
		view:"datatable",
		columns:[
			{ id:"Outlet", sort:"string", fillspace:true },
			{ id:"January" },
			{ id:"February" },
			{ id:"March" }
		],
		data:[
			{ Outlet:"North", January:100, February:230, March:180 },
			{ Outlet:"West", January:70, February:120, March:160 },
		],
   	},
	columns:[
		{ id:"title",	header:"Title", sort:"string",
			template:"{common.subrow()} #title#", width:220 },
		{ id:"year",	header:"Year", 		width:100, sort:"int"},
		{ id:"votes",	header:"Rating", 	width:100,	sort:"int"}
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790 },
		{ id:2, title:"The Godfather", year:1972, votes:511495 },
		{ id:3, title:"The Godfather: Part II", year:1974, votes:319352 }
	]
});
~~~

The *"{common.subrow()} #title#"* template is used to put a subgrid into a subrow of the column with the "title" id.

{{sample 60_pro/01_datatable/07_sub/04_sub_grid.html}}

##Loading data into a subview

There are three ways of loading data into a subview of Datatable:

1) loading data during the subrow initialization:

~~~js
view:"datatable",
subview:{
	view:"datatable",
	columns:[
		{ id:"Outlet", sort:"string", fillspace:true },
		{ id:"January" },
		{ id:"February" },
		{ id:"March" }
	],
	data:[
		{ Outlet:"North", January:100, February:230, March:180 },
		{ Outlet:"West", January:70, February:120, March:160 },
	],
}
~~~


2) loading inline data by means of the *parse* method that takes a set of data items as a parameter and will be called on a subrow's creation:

~~~js
webix.ui({
	view:"datatable",
	subview:{
    	view:"datatable",
        columns:[
           { id:"Outlet", sort:"string", fillspace:true },
           { id:"January" },
           { id:"February" },
           { id:"March" }
         ],
     },
	on:{
    	onSubViewCreate:function(view, item){
        	view.parse(item.outlets);
        }
	},
	columns:[
      { id:"title",	header:"Title", sort:"string",
         template:"{common.subrow()} #title#", width:220 },
      { id:"year",	header:"Year", 		width:100, sort:"int"},
      { id:"votes",	header:"Rating", 	width:100,	sort:"int"}
	],				
	data:[
      { id:1, title:"The Shawshank Redemption", year:1994, votes:678790, outlets:[
         { Outlet:"North", January:100, February:230, March:180 },
         { Outlet:"West", January:70, February:120, March:160 },
      ]},
      ...
	]
});
~~~

{{sample 60_pro/01_datatable/07_sub/05_sub_grid_data.html}}

3) using the *load* method that takes the path to the necessary file or script and will be called on a subrow's creation as well:

~~~js
on:{
	onSubViewCreate:function(view, item){
		view.load("../../../15_datatable/16_dyn_loading/data/data_dyn.php?for="+item.id);
	}
}
~~~

{{sample 60_pro/01_datatable/07_sub/06_sub_grid_url.html}}


Sub-Form in a Datatable
---------------------------

<img src="datatable/subform.png">

The same as with a Sub-Grid you can add a Sub-Form inside of Datatable. 
Initialize a form view inside of the subview property and define the configuration of form elements.

To specify form data, use the setValues() method with the item object as a parameter.

~~~js
webix.ui({
	view:"datatable",
	subview:{				
		view:"form",
		elements:[
			{ view:"text", name:"title", label:"Title"},
			{ view:"text", name:"year", label:"Year"},
			{ cols:[
				{ }, { view:"button", value:"Save", click:function(){
						...		
					}}
			]}
		]
	},
	on:{
		onSubViewCreate:function(view, item){
			view.setValues(item);
		}
	},
	columns:[
		{ id:"title",	header:"Title", sort:"string",
			template:"{common.subrow()} #title#", width:320 },
		{ id:"year",	header:"Year", 		width:100, sort:"int"},
		{ id:"votes",	header:"Rating", 	width:100,	sort:"int"}
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790 },
		{ id:2, title:"The Godfather", year:1972, votes:511495 },
		{ id:3, title:"The Godfather: Part II", year:1974, votes:319352 }
	]
});
~~~

{{sample 60_pro/01_datatable/07_sub/07_sub_form.html}}
