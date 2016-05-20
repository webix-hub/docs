onBeforeShowTree
=============

@todo:
	check

@short:
	fires before the tree is expanded

@params:

@returns:

- result		boolean			returning false will prevent tree expanding

@example:
fmanager.attachEvent("onBeforeShowTree", function(){
	// some code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onbeforeshowtree_event.md
api/ui.filemanager_showtree.md
