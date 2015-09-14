Adding Subviews
====================

Besides simple subrows it's also possible to add a whole subview into a datatable. Below you can the details on how to insert a sub-grid or a sub-form into Datatable. 
However, any other component can be added, if necessary.

Sub-Grid in a DataTable
---------------------

<img src="datatable/subgrid.png">

To add a subview into Datatable, use the **subview** property. In the case of grid, you should specify a Grid configuration with all the necessary parameters
and static data inside of this property.

In the columns configuration of the Datatable you should specify the **template** property with the value 
*{common.subrow()} #title#*,

where:

- {common.subrow()} - renders "+" and "-" icons to open/close subviews
- #title# - defines the data that should be rendered next to the icon
 
~~~js
webix.ui({
	view:"datatable",
    // subgrid configuration
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
    // datatable configuration
	columns:[
		{ id:"title",	header:"Title", sort:"string",
			template:"{common.subrow()} #title#", width:220 },
		{ id:"year",	header:"Year", 	width:100, sort:"int"},
		{ id:"votes",	header:"Votes", width:100,	sort:"int"}
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790 },
		...
	]
});
~~~


{{sample 60_pro/01_datatable/07_sub/04_sub_grid.html}}

##Loading data into a subview

To populate a subview with data, you can either specify a dataset in the datatable configuration, 
or use the api/link/ui.proto_load.md or api/link/ui.proto_parse.md methods.

###Using inline data 

To load inline data into the sub-grid when a subview is created, use the onSubViewCreate() event with two parameters:

- view - the created subview
- item - the item that a subgrid is created for

Inside of this event apply the api/link/ui.proto_parse.md method 
and pass the data item property with sub-grid's data into it: 

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
      	...
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

###Loading data from a script


To load data from an external source, use the api/link/ui.proto_load.md method that 
takes the path to the necessary file or script and will be called on a subrow's creation as well.

~~~js
{
	view:"datatable",
	subview:{
		view:"datatable",
		columns:[
			...
		],
	},
	on:{
		onSubViewCreate:function(view, item){
		  view.load("../../../15_datatable/16_dyn_loading/data/data_dyn.php?for="+item.id);
		}
	},
	columns:[
    	...			
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790 },
	]
}
~~~

{{sample 60_pro/01_datatable/07_sub/06_sub_grid_url.html}}


Sub-Form in a Datatable
---------------------------

<img src="datatable/subform.png">

The same as with a Sub-Grid, you can add a Sub-Form into Datatable. 

You need to initialize a form view inside of the **subview** property and define the configuration of form elements.

To add values into the sub-form when a subview is created, use the onSubViewCreate() event with two parameters:

- view - the created subview
- item - the item that a subview is created for

And inside of this event use the api/link/ui.form_setvalues.md method with the item object as a parameter.

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
					var form = this.getFormView();
					var values = form.getValues();
					var changed = form.getDirtyValues();
                    // get master datatable
					var master = form.getMasterView();

					master.updateItem(values.id, changed);
                    // close the subgrid
					master.closeSub(values.id)
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
		...
	],
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790 },
		...
	]
});
~~~

{{sample 60_pro/01_datatable/07_sub/07_sub_form.html}}
