bind
=============


@short:
	binds components

@params:
- target		object		an object that binds to the calling component
* rule			function	optional, sets the rule according which components will be bound
* format		string		optional, the format of bound data



@example:
$$('form1').bind($$('list1'));

gridb.bind(grida, function(slave, master){
		if (!master) return false;
	return master.id == slave.movie;
});		

@template:	api_method
@defined:	BaseBind	
@related:
	desktop/data_binding.md
    desktop/binding_details.md
@relatedapi:
	api/basebind_unbind.md
@relatedsample:
	13_form/02_api/10_binding.html
    15_datatable/15_api/02_link_grid.html
    80_docs/binding_rule.html
@descr:

Behavior of data binding differs for different components a lot. Basically, it fills component with data based on selection in the master component. 

The technique allows you to create complex data updates schemes, but you can ignore it
as the same use case can be implemented through events and custom logic. 

**Binding rule** defines a rule according to which records in the slave component are filtered. 
It can be defined only in case slave component is based on [DataStore](api/refs/datastore.md) 
(all data management components except for tree-like) or
[TreeStore](api/refs/treestore.md) (tree and treetable).





