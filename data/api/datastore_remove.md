remove
=============


@short:
	removes the specified item/items from datastore

@params:
- id		string/number/array     the item id or an array of items' ids




@example:
$$("my_list").remove(1); //removes the item with ID=1
$$("my_list").remove($$("data").getSelectedId()); //removes the selected item

$$("my_list").remove([1,3,5]); // removes multiple items
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


