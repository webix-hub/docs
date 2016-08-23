onBeforeDeleteFile
=============

@short:
	fires when the Delete action is chosen in the popup menu

@params:	
  
- id		string			the id of the item to delete

@returns:
- result		boolean		if an event handler returns false, the onBeforeDeleteFile handler will not be called

   
@example:
$$("fmanager").attachEvent("onBeforeDeleteFile",function(id){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_deletefile.md

