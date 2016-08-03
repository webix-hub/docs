Adding Subviews
====================

Besides [simple subrows](datatable/subrows.md) it's also possible to render subviews in a datatable. Below you can see the details on how to insert a sub-grid or a sub-form into Datatable. 
If necessary, any Webix component can be used as a subview.

Sub-Grid in a DataTable
---------------------

<img src="datatable/subgrid.png">

To add a subview into Datatable, use the api/ui.datatable_subview_config.md property. 
In the case of datatable, you should specify a Datatable configuration with all the necessary parameters as value of this property.

In the columns configuration of the Datatable you should specify the **template** property with the value like *{common.subrow()} #title#*, where:

- {common.subrow()} - renders "+" and "-" icons to open/close subviews
- #title# - defines the data that should be rendered in the columns next to the icon
 
{{snippet
Subgrid with static data
}}
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

To populate a subview with data, you can either 

- specify a static dataset in the datatable configuration (as shown above);
- use the api/link/ui.proto_load.md or api/link/ui.proto_parse.md methods to populate the subgrid with "item-related" data.

###Using inline data 

To load inline data into the sub-grid when a subview is created, use the api/ui.datatable_onsubviewcreate_event.md event with two parameters:

- view - the created subview;
- item - the item for which a subgrid is created.

In the event handler apply the api/link/ui.proto_parse.md method 
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

###Loading data from an external source

To load data from an external source, use the api/link/ui.proto_load.md method that 
takes the path to the necessary file or script that will return data for a subgrid.

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

You need to initialize a form view inside of the **subview** property and define the configuration of form elements. Note that *name* attributes of the form fields 
should coincide with data item properties to ensure a simple and clear way of two-way binding.

To add values into the sub-form when a subview is created, use the api/ui.datatable_onsubviewcreate_event.md event with two parameters:

- view - the created subview;
- item - the item for which a subview is created.

And in the event handler use the api/link/ui.form_setvalues.md method with the item object as a parameter.

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

@edition:pro