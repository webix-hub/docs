onPathComplete
=============


@short:
	fires when a path to a folder is completely shown in the related control

@params:

- id 	string		id of the folder in  question

@example:
$$("fmanager").attachEvent("onPathComplete",function(id){
    // your code
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onpathlevel_event.md
api/ui.filemanager_setpath.md

@related:
file_manager/configuration.md#path