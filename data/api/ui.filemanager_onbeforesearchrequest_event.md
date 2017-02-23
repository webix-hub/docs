onBeforeSearchRequest
=============


@short:
	fires before a search request is sent to the server-side (see details <a href="file_manager/loading_data.md#serversidesearchingforcontent">here</a>)

@params:
- id			string		the id of the folder to search in
- params		string		the request parameters

@returns:

- result		boolean			returning false will prevent the operation


@example:
$$("fmanager").attachEvent("onBeforeSearchRequest",function(id, params){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedapi:

api/ui.filemanager_showsearchresults.md
api/ui.filemanager_hidesearchresults.md
api/ui.filemanager_onaftersearch_event.md
api/ui.filemanager_onbeforesearch_event.md
api/ui.filemanager_onhidesearchresults_event.md
api/ui.filemanager_onshowsearchresults_event.md

@related:
file_manager/loading_data.md#serversidesearchingforcontent