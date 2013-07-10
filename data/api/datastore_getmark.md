getMark
=============


@short:
	returns mark value by record id and mark name
	

@params:
- id	string		record id
- mark_name		string		mark name

@returns:
- value		any		mark value
	

@example:

var value = view.getMark(152, "extra_info");

@template:	api_method
@descr:

If marks is not set - returns false   
If mark set but value was not specified - returns true

@relatedapi:
	api/datastore_addmark.md
    api/datastore_removemark.md
    api/datastore_clearmark.md

