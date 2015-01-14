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
	api/ui.datatable_selectrange.md
	api/ui.datatable_getselectedid.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md
	
	
@descr:

