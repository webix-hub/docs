updateItem
=============



@short:
	sets properties of the data item

@params:
- id		id		the item id
- data		object		the hash of properties

@example:
var sel = dtable.getSelectedId();
var row = dtable.getItem(sel.row);
row[sel.column] = "some_new_value";

dtable.updateItem(sel.row, row);

@relatedsample:
	14_dataprocessor/01_datatable.html

@related: 
	desktop/update.md
    datatree/nodes_manipulations.md#updatingthetree
      

@template:	api_method
@defined:	DataStore	
@descr:


