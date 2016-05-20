onBeforeHideTree
=============

@todo:
	check

@short:
	fires before the tree is hidden

@params:

@returns:

- result		boolean			returning false will prevent tree collapsing


@example:
fmanager.attachEvent("onBeforeHideTree", function(){
    // some code
    return true;
});

@template:	api_event
@descr:

@relatedapi:

api/ui.filemanager_onafterhidetree_event.md
api/ui.filemanager_hidetree.md
