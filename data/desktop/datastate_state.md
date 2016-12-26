Saving and Restoring Component State
===========================

UIManager helps save and restore only the outer view parameters while inner ones like selection and scrolling direction are saved within the [DataState](api__refs__datastate.html) module. 

Webix components that use this module feature the saving and restoring functionality as well: 

- [datatable](datatable/index.md);
- [treetable](desktop/treetable.md);
- [datatree](datatree/index.md).

##Saving Datatable State

Webix [datatable](datatable/index.md)  provides a possibility to store/restore the state of the tree to cookie, local or session storage.

The state object will contain information about current datatable state:

- properties (keys) of each data item;
- column sizes;
- IDs of currently selected items (each ID is an object with *row, column* and *id* properties);
- scroll position;
- values of built-in filters;
- IDs of currently hidden data items.

~~~js
{
    ids: ["id", "value", "chapter"],
    size:[50, 250, 200], 
    select:[{"row":217,"column":"title","id":"217_title"}],
    scroll:{ x:0, y:0},
	filter:{"year":"1924"},
    hidden:["votes"]
}    
~~~

- To save the current tree state to the local storage you should call the api/link/ui.datatable_getstate.md method as in:

~~~js
var state = grid.getState();
webix.storage.local.put("state", state);
~~~

- To restore the saved state you should call the api/link/ui.datatable_setstate.md method:

~~~js
var state = webix.storage.local.get("state");
if (state)
    grid.setState(state);
~~~

{{sample 60_pro/01_datatable/05_state/03_session_state.html}}

##Saving Treetable State

Webix [treetable](desktop/treetable.md)  provides a possibility to store/restore the state of the tree to cookie, local or session storage.

The state object will contain information about current treetable state:

- IDs of currently hidden data items;
- properties (keys) of each data item;
- open treetable nodes;
- scroll position;
- IDs of currently selected items (each ID is an object with *row, column* and *value* properties);
- column sizes.

~~~js
{
	hidden:[], 
    ids: ["id", "value", "chapter"], 
	open:["1", "1.2"],
	scroll:{ x:0, y:0},
	select:[{"row":"1.2","column":"value","id":"1.2"}],
	size:[50, 250, 200]
}    
~~~

- To save the current tree state to the local storage you should call the api/link/ui.treetable_getstate.md method as in:

~~~js
var state = grid.getState();
webix.storage.local.put("treetable_state", state);
~~~

- To restore the saved state you should call the api/link/ui.treetable_setstate.md method:

~~~js
var state = webix.storage.local.get("treetable_state");
if (state)
	grid.setState(state);
~~~

{{sample 60_pro/01_datatable/05_state/05_treetable_state.html}}

##Saving Tree State

Webix [tree](datatree/index.md)  provides a possibility to store/restore the state of the tree to cookie, local or session storage.

The tree state object will contain information about opened and selected nodes:

~~~js
{
	open:['1', '2', 'root'],
    select: ['1.3']
}
~~~
*where '1', '2', 'root' and '1.3' are the ids of the related nodes.*

- To save the current tree state to the local storage you should call the api/link/ui.tree_getstate.md method as in:

{{snippet
Saving the tree state to the local storage
}}
~~~js
var state = $$("tree").getState();
webix.storage.local.put("state", state);
~~~

- To restore the saved state you should call the api/link/ui.tree_setstate.md method:
	
{{snippet
Restoring the tree state from the local storage
}}
~~~js
var state = webix.storage.local.get("state");
if (state)
    $$("tree").setState(state);
~~~

{{sample
	60_pro/06_tree/03_session_state.html
}}


