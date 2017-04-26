onBeforeCreateFolder
=============

@short:
	fires before a new folder has been created


@params:

- id		string			the id of the target folder/file (where a new folder is going to be created)

@example:
$$("fmanager").attachEvent("onBeforeCreateFolder",function(id){
    // your code
    return true;
});


@template:	api_event
@descr:

Returning false within the handler function will prevent the execution of the further logic and the folder will not be created.

@relatedapi:
api/ui.filemanager_createfolder.md
api/ui.filemanager_onaftercreatefolder_event.md

