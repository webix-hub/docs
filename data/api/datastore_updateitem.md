updateItem
=============



@short:
	updates the data item with new properties

@params:
- id		id		the item id
- data		object		the hash of properties

@example:
var id = dtable.getSelectedId(); 
var item = dtable.getItem(id.row);
item[id.column] = "some_new_value";

dtable.updateItem(id.row, item);

@relatedsample:
	14_dataprocessor/01_datatable.html

@related: 
	desktop/update.md
    datatree/nodes_manipulations.md#updatingthetree
      

@template:	api_method
@defined:	DataStore	
@descr:


