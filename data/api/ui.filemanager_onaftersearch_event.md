onAfterSearch
=============

    
@short:
	fires after filtering via the "search" input is finished

@params:
- text		string		text in the "search" field

@example:
$$("fmanager").attachEvent("onAfterSearch",function(text){
    // your code
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onbeforesearch_event.md
api/ui.filemanager_onbeforesearchrequest_event.md
api/ui.filemanager_onhidesearchresults_event.md
api/ui.filemanager_onshowsearchresults_event.md
api/ui.filemanager_hidesearchresults.md
api/ui.filemanager_showsearchresults.md

@related:
file_manager/loading_data.md#serversidesearchingforcontent