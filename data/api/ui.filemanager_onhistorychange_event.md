onHistoryChange
=============

@todo:
	add parameters

@short:
	fires when the browser history changes (the currently selected folder is changed)

@params:

- path		string		the path to the currently selected folder
- ids		array		an array of ids
- cursor	object		cursor

@example:
$$("fmanager").attachEvent("onHistoryChange",function(path, ids, cursor){
    // your code
});

@template:	api_event
@descr:

