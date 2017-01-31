onHistoryChange
=============

@todo:
	check

@short:
	fires when path in the [Path view](file_manager/configuration.md#filemanagerlayout) changes

@params:

- path		string		the path to the currently selected folder
- ids		array		an array of folders' ids in a path
- cursor	object		?

@example:
$$("fmanager").attachEvent("onHistoryChange",function(path, ids, cursor){
    // your code
});

@template:	api_event
@descr:

