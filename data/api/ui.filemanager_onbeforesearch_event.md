onBeforeSearch
=============

@todo:
	check 

@short:
	fires before search is started

@params:

- text			string			the searched text

@returns:

- result		boolean			returning false will prevent the operation



@example:
$$("fmanager").attachEvent("onBeforeSearch",function(text){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onaftersearch_event.md
api/ui.filemanager_onbeforesearchrequest_event.md
api/ui.filemanager_onhidesearchresults_event.md
api/ui.filemanager_onshowsearchresults_event.md
api/ui.filemanager_hidesearchresults.md
api/ui.filemanager_showsearchresults.md


@related:
file_manager/loading_data.md#serversidesearchingforcontent