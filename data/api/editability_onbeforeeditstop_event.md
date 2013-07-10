onBeforeEditStop
=============


@short:
	fires before stop edit command is received

@params:
- id		id		the item id

@example: 
	
grid.attachEvent("onBeforeEditStop", function(){ return false; });

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

In the sample above **editing is not finished** when the edit stop command is received (it happens when you leave the editor body) and
**editing continues** with setting the new value to the item and resreshing it. It is done to display the new value outside the field where editor opens. 
