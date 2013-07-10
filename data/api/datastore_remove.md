remove
=============



@short:
	removes the specified item from datastore

@params:
- id		id     the item id




@example:
$$("my_list").remove(1); //remove the item with ID=1
$$("my_list").remove($$("data").getSelectedId()); //removes selected item

@related:
	desktop/add_delete.md
    
@relatedsample:
	06_dataview/04_manipulations/01_adding.html
@relatedapi:
	api/datastore_add.md
	api/datastore_clearall.md


@template:	api_method
@defined:	DataStore	
@descr:


