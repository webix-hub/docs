onAfterSelect
=============


@short:
	fires after a cell is selected

@params:
- data        object    the selected object
- preserve    boolean      indicates whether the previous selection state should be saved

@example: 

some.attachEvent("onAfterSelect", function (data, preserve){
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

If api/ui.datatable_multiselect_config.md mode is enabled, the event will fire:

- Each time you select an item with Ctrl+click;
- Once for each selected item in the group during Shift+click selection. 

In each case, the ID of the newly selected item be passed to the event.

To get the IDs of currently selected items, you can use a combination of api/ui.datatable_onselectchange_event.md
and the api/ui.datatable_selectrange.md method.


@seolinktop: [widget library](https://webix.com)
@seolink: [datatable](https://webix.com/widget/datatable/)