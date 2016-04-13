setState
=============

@short:restores the specified state
	

@params:
- state	object	the state object



@example:
webix.storage.local.put("state", webix.UIManager.getState("mylayout", true));
...

var state = webix.storage.local.get("state");
if (state)
	webix.UIManager.setState(state);
                

@relatedapi:
	api/UIManager_getState.md
    api/refs/datastate.md
@template:	api_method
@descr:
The state object reflects UI configuration of the specified view.

<br>

The get/setState methods of the api/refs/uimanager.md class is similar to the same-name methods from the api/refs/datastate.md class.

The difference lies in the following: 

- the api/refs/uimanager.md methods allows you to save and restore outer visual scheme (layout) of the specified view (that allows restoring general view structure);
- the api/refs/datastate.md methods save and restore the information about inner configuration of the view (selection, sorting direction etc.).

@edition:pro