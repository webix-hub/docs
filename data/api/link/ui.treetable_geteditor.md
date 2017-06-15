@link: api/editability_geteditor.md

@params:
* row	string, number, object	row id
* column	string, number	column id

@example:
//return last opened editor
var editor = view.getEditor();

//return specific editor 
var editor = view.getEditor(3, "year");
//or
var editor = view.getEditor({row:3, column:"year"});

@descr:

###Editor object
~~~js
{
	column: column id,
	config: editor configuration object,
	focus: method that sets focus for an editor,
	getInputNode: method that return the input node of an editor,
	getValue: method that return editor value	,
	node: HTML node of the editor,
	render: method that renders the editor,
	setValue: method that sets value for an editor,
	value: current editor value,
}    
~~~
You can access all methods of editor through this object

~~~js
//get value
var value = some.getEditor().getValue();
//set value
some.getEditor().setValue( new_value );
//set focus
some.getEditor().focus();
~~~

@seolinktop: [lightweight js framework](https://webix.com)
@seolink: [javascript tree grid](https://webix.com/widget/treetable/)