onAfterSelect
=============


@short:
	fires after a cell is selected

@params:
- data		object		the selected object
- preserve    bool    indicates whether the previous selection state should be saved

@example: 
	
some.attachEvent("onAfterSelect", function(data, preserve){
    //... some code here ... 
});

@template:	api_event

@related:
	datatable/selection.md
@relatedapi:
	api/ui.datatable_onbeforeselect_event.md
    api/ui.datatable_onselectchange_event.md
	api/ui.datatable_selectrange.md
	api/ui.datatable_getselectedid.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md
	
	
@descr:

In case of a api/ui.datatable_multiselect_config.md mode enabled, the event will fire: 

- Each time you select an item with Ctrl+click;
- Once for each selected item in the group during Shift+click selection. 

Every time the ID of a newly selected item will come into the event. 

To get the IDs of currently selected items, you can use a combination of api/ui.datatable_onselectchange_event.md
and api/ui.datatable_selectrange.md method. 



