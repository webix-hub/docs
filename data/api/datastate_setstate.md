setState
=============


@short: restores the specified state
	

@params:
- state	object	the state object

	

@example:
webix.storage.local.put("state", grid.getState());
...

var state = webix.storage.local.get("state");
if (state)
	grid.setState(state);
                

@relatedapi:api/datastate_getstate.md
@relatedsample:
	60_pro/06_tree/01_basic.html
@related:
	desktop/datastate_state.md


@template:	api_method
@descr:


