getRaw
=============


@short:
	gets string data from the storage

@params:

- name		string 			the data key

@returns:
data		string			a data item from the storage associated with the key or <i>null</i>

@example:
var weather = webix.storage.cookie.getRaw('weather');

@template:	api_method
@descr:

The cookie is returned as a raw string. If you need to get the unescaped JSON data, use the api/storage.cookie_get.md method.
