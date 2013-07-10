put
=============



@short:
	puts data into the storage
	

@params:
- name		string		the data key
- value	object		a data item that should be associated with the specified data key

@example:
webix.storage.session.put('weather', { temperature: 23, rain: false });

@template:	api_method
@defined:	storage.session	
@descr:
