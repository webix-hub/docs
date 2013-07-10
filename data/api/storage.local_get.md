get
=============


@short:
	gets data from the storage
	

@params:
- name		string		the data key

@returns:
data		object	a data item from the storage associated with the key or <i>null</i>


@example:
view.parse(webix.storage.local.get("app_data"));

@template:	api_method
@defined:	storage.local	
@descr:

@relatedapi: 
	api/storage.local_put.md
@related:
	desktop/offline.md