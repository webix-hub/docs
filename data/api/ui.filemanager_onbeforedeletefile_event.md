onBeforeDeleteFile
=============

@short:
	fires when the Delete action is chosen in the popup menu

@params:	
  
- id		string			the id of the item to delete

@returns:
- result		boolean		if an event handler returns false, the onBeforeDeleteFile handler will not be called

   
@example:
$$("fmanager").attachEvent("onBeforeDeleteFile", function(id){
    // your code
});

@template:	api_event
@descr:

Returning false within the handler function will prevent the execution of the further logic and the file/folder will not be deleted.

@relatedapi:
api/ui.filemanager_deletefile.md
api/ui.filemanager_onafterdeletefile_event.md


