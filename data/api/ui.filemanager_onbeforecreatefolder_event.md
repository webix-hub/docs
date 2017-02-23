onBeforeCreateFolder
=============

@short:
	fires before a new folder has been created


@params:

- id		string			the id of the target folder/file (where a new folder is going to be created)

@returns:

- result		boolean		returning false will prevent folder creation

@example:
$$("fmanager").attachEvent("onBeforeCreateFolder",function(id){
    // your code
    return true;
});


@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_createfolder.md