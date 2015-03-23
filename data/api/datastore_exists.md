exists
=============



@short:
	checks whether an item with the specified id exists

@params:
- id		id		the id of an item


@returns:
- result     boolean         returns <i>true</i> if the item exists. Otherwise, <i>false</i>

@example:
if(!$$("my_dataview").exists())// -> returns boolean value
    var dataview = new webix.UI({
        view:"dataview",
        id:"my_dataview",
        ..config
    });

@template:	api_method
@related: 
	tutorials/start_coding.md
    desktop/data_object.md
@defined:	DataStore	
@descr:


