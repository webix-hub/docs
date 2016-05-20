onBeforeEditStop
=============

@short:
	fires before editing is finished

@params:

- id		string		the id of the edited item
- state		object		contains two properties: old - the old value and value - the new value
- editor	object		editor object
- view		string		the view where editing occurs

@returns:
- result		boolean			returning false will prevent editing

@example:
$$("fmanager").attachEvent("onBeforeEditStop",function(id,state,editor,view){
    var newValue = state.value
    if(...){
        return false;
    }
    return true;
});

@template:	api_event
@descr:

@relatedsample:
64_file_manager/02_events/04_rename.html
