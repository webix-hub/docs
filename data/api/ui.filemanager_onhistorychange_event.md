onHistoryChange
=============


@short:
	fires when path in the <a href="file_manager/configuration.md#path">Path view</a> changes

@params:

- path		string		the path to the currently selected folder
- ids		array		an array of folders' ids in a path
- cursor	number		index of the folder in the path

@example:
$$("fmanager").attachEvent("onHistoryChange", function(path, ids, cursor){
    // your code
});

@template:	api_event
@descr:

