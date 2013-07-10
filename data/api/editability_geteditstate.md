getEditState
=============



@short:
	returns info about active editor object	


@returns:
- editor	object		object with editors state and info

@example:

var editor = view.getEditState();

@template:	api_method

@related:
	desktop/editing.md
    datatable/editing.md
@relatedapi:
	api/link/ui.datatable_geteditorvalue.md
    api/link/ui.datatable_geteditor.md
@descr:

If there are many active objects - returns info about last opened editor

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
var value = some.getEditState().getValue();
//set value
some.getEditState().setValue( new_value );
//set focus
some.getEditState().focus();
~~~