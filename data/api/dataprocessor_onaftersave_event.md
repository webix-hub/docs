onAfterSave
=============

@short: fires after serverside responce has been received and processed

@params:
- id		string			item ID before saving
- newid		string		item ID after saving	
- sid		string		item ID before saving
- status	string		operation name ("insert", "update", "delete")
- tid		string		item ID after saving
- type		string		operation name ("insert", "update", "delete")
	

@example:
dp.attachEvent("onAfterSave", function(id, newid, sid, status, tid, type){
	//code
});

@relatedapi:
	api/dataprocessor_onaftersave_event.md
@related:
	desktop/dataprocessor.md
    
@template:	api_event

@descr:
In case of an error during saving, the api/dataprocessor_onaftersave_event.md fires instead.

