onBeforeSelect
=============

@short:
	fires before a cell is selected

@params:
- data        object    the selected object
- preserve    bool      indicates whether the previous selection will be saved

@returns:
- result  bool  returning `false` will prevent item selection

@example: 
	
some.attachEvent("onBeforeSelect", function (data, preserve){
  // ... some code here ...
  // return false to block operation
  return true;
});

@template:	api_event

@related:
    datatable/selection.md
@relatedapi:
    api/ui.datatable_onafterselect_event.md
    api/ui.datatable_selectrange.md
    api/ui.datatable_getselectedid.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md

@descr:
