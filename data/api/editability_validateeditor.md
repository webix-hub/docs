validateEditor
=============



@short: validates data in currently active editor
	

@params:
* id	id		id of editor


@returns:
- result		boolean		true if text in editor confirms to validation rules
	

@example:

var grid = webix.ui({
    view:"datatable",
    rules:{
       price:function(obj){ return obj>0; }
    }
    ...
})
...
grid.validateEditor();

@template:	api_method
@descr:

If id not provided - uses last opened editor

