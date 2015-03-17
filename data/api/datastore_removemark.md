removeMark
=============
@short: removes a flag set for the specified item
	

@params:
- id	string	the id of a data item to mark
- name	string	the flag name 
- css	boolean	defines whether the css style with the name equal to the flag name (if such class was applied) should be removed as well


	

@example:
$$("dtable").addMark(2, "invalid", true, "incorrect format"); 
...
// removes the flag but keeps the css style ".invalid" applied to the item with 'id=2'
$$("dtable").getMark(2, "invalid", false);

@relatedapi:
	api/datastore_addmark.md
    api/datastore_getmark.md
    api/datastore_clearmark.md


@template:	api_method
@descr:
The method removes only flags set by the  api/datastore_addmark.md method.

