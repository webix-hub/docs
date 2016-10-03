onEditorChange
=============

@short:
	fires when the native onchange event occurs for an HTML input (select, text)

@params:

- id		string,number		the cell id
- value		string				the new value typed into the editor

@example:
$$("datatable").attachEvent("onEditorChange",function(id, value){
	// some code
});

@template:	api_event
@descr:

@relatedsample:

15_datatable/04_editing/09_inline_editors.html
