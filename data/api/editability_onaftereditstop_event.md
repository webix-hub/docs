onAfterEditStop
=============


@short:
	fires after edit operation finished

@params:
- state		object		an object with 2 properties: 'value' - the new value of the cell, <br> 'old' - the old value of the cell
- editor	object		the editor's object
- ignoreUpdate	boolean	specifies whether the cell was updated after editing

@example: 
	
some.attachEvent("onAfterEditStop", function(state, editor, ignoreUpdate){
    if(state.value != state.old){
        webix.notice("Cell value was changed")
    }  
});

@template:	api_event
@defined:	EditAbility

@related:
	datatable/editing.md
    desktop/edit.md
    desktop/editing.md
@relatedapi:
	api/editability_onaftereditstart_event.md
@descr:


