listFilter
=============

@short:
	a filter for items: defines which items will be included in a certain list

@type: function
@example:
webix.ui({
    view:"kanban", 
    listFilter:function(item, list){
        // some code
    }    
});



@template:	api_config
@descr:
The function's parameters:

- item - (object) a data item
- list - (object) a kanban list 

The function returns true, if the item is added into the list and false otherwise.