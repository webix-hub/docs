getEditor
=============



@short:
	returns editor object	

@params:
* id	string		record id	

@returns:
- editor	object		object with editor state and info

@example:

var editor = view.getEditor(row_id);

@template:	api_method

@related:
	desktop/editing.md
    datatable/editing.md
@relatedapi:
	api/link/ui.datatable_geteditstate.md
    api/link/ui.datatable_geteditorvalue.md
@descr:

If id not provided - returns info about last opened editor

### Editor object

~~~
{
	node: html_node_of_editor,
    value: initial_value_of_editor
    config: configuration_of_editor
}
~~~

You can access all methods of editor through this object

~~~
//get value
var value = some.getEditor().getValue();
//set value
some.getEditor().setValue( new_value );
//set focus
some.getEditor().focus();
~~~