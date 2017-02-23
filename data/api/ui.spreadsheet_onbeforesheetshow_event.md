onBeforeSheetShow
=============

@short:
	fires before a sheet is opened

@params:

- name		string		the sheet's name

@example:
$$("ssheet").attachEvent("onBeforeSheetShow", function(name){
    // some code here
});


@template:	api_event
@descr:

Returning *false* in the handler function will block the operation.


@relatedapi:
api/ui.spreadsheet_onaftersheetshow_event.md