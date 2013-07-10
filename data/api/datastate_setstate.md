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
	17_datatree/18_state/01_basic.html
@related:
	datatree/nodes_manipulations.md#savingthestateofnodes


@template:	api_method
@descr:


