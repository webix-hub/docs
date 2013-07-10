getEditorValue
=============


@short: returns the value of the active (currently open) editor
	

@returns:
- value	 string		the editor value	

@example:
$$('mygrid').getEditorValue();

@template:	api_method

@relatedapi:
	api/link/ui.datatable_geteditstate.md
    api/link/ui.datatable_geteditor.md
    
@related:
	desktop/editing.md
    datatable/editing.md
    
@descr:

If no editors or several editors are open, the method returns the value of the last opened editor.
