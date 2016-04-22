hideColumn
=============


@short: hides the specified column
	

@params:
- id  id  the column id


@example:
dtable.hideColumn("price");


@template:	api_method
	
@descr: 

While data of the hidden column still can be accessed, api calls against it will result in error. 

@relatedapi:
	api/ui.datatable_showcolumn.md
    api/ui.datatable_onbeforecolumnhide_event.md
    api/ui.datatable_onaftercolumnhide_event.md
@related:
	datatable/columns_configuration.md#hidingshowingcolumns

	