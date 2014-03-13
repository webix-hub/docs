onLiveEdit
=============


@short: occurs when data was changed in the editor

@params:
- state		object		an object with 2 properties: 'value' - the new value of the cell, <br> 'old' - the old value of the cell
- editor	object		the editor's object

@example: 
	
some.attachEvent("onLiveEdit", function(state, editor, ignoreUpdate){
    webix.notice("Current value: " + state.value);
});


@template:	api_event
@descr:


Occurs only if liveEdit mode was used for the editor