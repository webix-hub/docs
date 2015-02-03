setState
=============
@short:
	restores the specified state


@params:
- state	object	the state object
	

@example:
webix.storage.local.put("state", tree.getState());
...

var state = webix.storage.local.get("state");
if (state)
	tree.setState(state);
                

@relatedapi:
	api/treeapi_getstate.md
@related:
	datatree/nodes_manipulations.md
    
@edition:pro

@template:	api_method
@descr:


