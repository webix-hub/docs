put
=============


@short:
	puts data into the storage
	

@params:
- name		string		the data key
- value	object		a data item that should be associated with the specified data key


@example:
//data that was just changed
view.attachEvent("onAfterEditStop", function(){
		webix.storage.local.put("app_data", this.serialize());
});


@template:	api_method
@defined:	storage.local	

@relatedapi: 
	api/storage.local_get.md
@related:
	desktop/offline.md
@descr:
