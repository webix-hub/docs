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
The property function takes 3 parameters:

- **newdata** - (*object*) the data item to move;
- **id** - (*string*) the item id in the source element;
- **data** - (*object*) original data of the moved data item;

The function is called when a data item is about to be moved to the target component. 

When you drag a data item to another component, it preserves its id unless the target component contains an item with such id. Then the item will receive a random id. 
The changed item is **newdata**. The second parameter, **id**, stores the initial id of the item and **data** stores the initial data object.  
