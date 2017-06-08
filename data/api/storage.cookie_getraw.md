getRaw
=============


@todo:
	check and complete

@short:
	checks whether the data under the given key exists and returns it

@params:

- check_name		string 			the data key to check

@returns:
data		object			a data item from the storage associated with the key or <i>null</i>

@example:
var weather = webix.storage.cookie.getRaw('weather');

@template:	api_method
@descr:
Note that *null* is also returned in the case if cookie is initialized but it has no value.
