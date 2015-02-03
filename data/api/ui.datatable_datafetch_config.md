datafetch
=============


@short:	defines the number of records that will be loaded into datatable during the next dynamic loading call
	

@type: number
@example:

webix.ui({
	view:"datatable",
	columns:[],
	datafetch:30,
	..		
});

@template:	api_config

	
@relatedsample:
	15_datatable/16_dyn_loading/04_db_dyn_loadahead.html

@relatedapi:
	api/link/ui.datatable_datathrottle_config.md
	api/ui.datatable_loadahead_config.md

@related:
	datatable/loading_data.md#dynamicloading
    desktop/dynamic_loading.md

@descr:

The value defaults to **50**. 

