externalData
=============


@short:allows defining custom 'move' logic for the component.


@type: function
@example:
var dtable = {
		view:"datatable",
		...
        drag:true,
		externalData: function (data, id){
				data.rank = data.rank || -1;
				data.title = data.title || data.value;
				return data;
		}
};

@template:	api_config
@related:
	desktop/dnd_external_data.md
@relatedsample:
	22_dnd/01_basic_dnd.html
@descr:
The property function takes 2 parameters:

- **data** - (*object*)	the data item to move.
- **id** - (*string*) the item id in the source element.

When you drag an item to another element, it will be moved to the target element with the same id it has in the source element. If the target element already contains an item with such id, 
the id for the item will be set randomly. At the same time, the second parameter of **externalData** will store the initial id of the item (the id in the source element).  
