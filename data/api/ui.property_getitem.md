getItem
=============


@short:
	gets the data object for related property

@params:
- id		string		name of property


@returns:
-obj  object	the data object for the property

@example:

var record = property.getItem("width");
var title = record.value;

@template:	api_method
@defined:	DataStore	
@descr:


Each data object has id, value, label attributes, it also will contain all extra data which was defined during configuration. 

