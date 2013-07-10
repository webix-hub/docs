fixedRowHeight
=============


@short: 
	defines whether the height should be fixed for all rows or can vary

@type: bool
@example:

webix.ui({
    view:"datatable",
    fixedRowHeight:false,
    data:[
      {id:1, name:"Row with default height" }
      {id:1, name:"Row with custom height", $height:200 }
    ]
});

@template:	api_config
@defined:	ui.datatable	
@descr:

The default value of the parameter is <i>true</i> - the height of rows is fixed. 

When the parameter is set to <i>false</i>, each row can have the **$height** property to define a custom height. 

@relatedsample:
    15_datatable/07_resize/08_custom_size_auto.html
@related:
	datatable/sizing.md
    datatable/columns_configuration.md
@relatedapi:
	api/ui.datatable_headerrowheight_config.md
    api/link/ui.datatable_height_config.md

