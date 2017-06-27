get
=============


@short:
	gets JSON data from the storage 
	

@params:
- name		string		the data key

@returns:
- data		object			a data item from the storage associated with the key or <i>null</i>


@example:
var weather = webix.storage.cookie.get('weather');

@template:	api_method
@defined:	storage.cookie	
@descr:

The cookie string is returned unescaped and parsed to a JSON object. If you need to get the escaped raw string, use the api/storage.cookie_getraw.md method.

