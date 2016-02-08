onBeforeEditStop
=============


@short:
	fires before stop edit command is received

@params:
- values		object			an object with two parameters: the new value and the old one
- editor		object			the editor object	

@example: 
	
grid.attachEvent("onBeforeEditStop", function(state, editor){ return false; });

grid.attachEvent("onEditorChange", function(id, value){
	this.getItem(id.row)[id.column] = value;
	this.refresh(id.row);
});;

@template:	api_event
@defined:	EditAbility

@related:
	datatable/editing.md
    desktop/edit.md
    desktop/editing.md
@relatedapi:
	api/editability_onbeforeeditstop_event.md
@relatedsample:
	15_datatable/04_editing/09_inline_editors.html
@descr:

Events starting from **"before"** are **blockable**, which means that if they return *false* the action is blocked. 

In the above sample **editing is not finished** when the edit stop command is received 
(it happens when you leave the editor body) and **editing continues** with setting 
the new value to the item and refreshing it. 
It is done to display the new value outside the field where editor opens. 
