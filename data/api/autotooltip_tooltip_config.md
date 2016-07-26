tooltip
=============


@short: sets a popup message appearing on pointing a mouse cursor over the dedicated item 
	

@type: string/boolean
@example:

// specifiying a tooltip for a dataview
webix.ui({
     view:"dataview",
     tooltip:"Rating: #rating#<br/> Votes: #votes#",
     ...
});

// enabling auto tooltip for a datatable
webix.ui({
    view:"datatable",
    tooltip:true,
    columns:[
        {id:"name", header:"Name"},
        {id:"age", header:"Age"}
    ],
    data:[
        {id:1, name:"Ann", age:25},
        {id:2, name:"Tom", age:27}
    ]
});


@template:	api_config
@related: 
	desktop/tooltip.md
    desktop/html_templates.md
@relatedsample:
	06_dataview/02_templates/06_tooltip.html
    
@descr:  

In the first example there are values transmitted from the dataset in the tooltip template ([read the details](desktop/tooltip.md)).

In the second example an automatic tooltip is enabled for a datatable (see the [details on the Datatable tooltip](desktop/tooltip.md#datatabletooltip)).

There is also an independent view desktop/tooltip_component.md in the Webix library that can have custom positioning.



