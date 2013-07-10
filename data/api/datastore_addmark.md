addMark
=============

@short: allows setting custom flag for a data item. 
	

@params:
- id	string	the id of a data item to mark
- name	string	the flag name 
* css	bool	if set to <i>true</i> than the css style with the name equal <br> to the <b>name</b>  parameter value will be applied to the marked item
* value	any	the value of the flag

@returns:
- value  any 	the flag value
	

@example:
//adds flag 'invaid = true' for the item with 'id=2'. 
//applies to this item css style ".invalid" 

$$("dtable").addMark(2,	"invalid", true, true); // returns 'true'

@relatedapi:
	api/datastore_removemark.md
    api/datastore_clearmark.md
    api/datastore_getmark.md

@template:	api_method
@descr:
The method adds some info (as a key/value pair) related to a data item, marking the item thereby. 
The added information is stored separately from main data. So if you, for example, 
load data from one data store to multiple components, the mark will exist just 
for a data item of the calling component.

The method can be called in 3 ways:

1. <code>addMark(id, name)        //-> 'css' is set to <i>false</i>, 'value' - to <i>true</i></code>
2. <code>addMark(id, name, css)      //-> 'value' is set to <i>true</i></code>
3. <code>addMark(id, name, css, value)</code>
