TreeStore 
=============


{{memo Hierarchical store.. }}

Can't be initialized directly; must be extended from [DataStore](api/datastore.md).

~~~js
var store = new webix.DataStore();
webix.extend(store, webix.TreeStore, true);
~~~


<div class='h2'>Methods</div>

{{api
- api/treestore_add.md - adds a new item to the tree
- api/treestore_changeid.md - changes the id of a data item
- api/treestore_clearall.md - removes all items from the component
- api/treestore_count.md - returns the number of currently visible items (counts both parent and child nodes)
- api/treestore_each.md - iterates through the collection of tree data items
- api/treestore_eachchild.md - iterates through the first-level childs of the specified branch
- api/treestore_eachopen.md - iterates through opened nodes of the tree (both parent and child)
- api/treestore_eachsubitem.md - iterates through all childs (of any level) of the specified branch
- api/treestore_getbranch.md - returns dataset from some branch in the tree-like component
- api/treestore_getbranchindex.md - gets index of the node in a specific branch
- api/treestore_getfirstchildid.md - gets the ID of the first child of the specified branch
- api/treestore_getnextsiblingid.md - returns the id of the next sibling of the specified node
- api/treestore_getparentid.md - get the ID of the parent node of the specified item
- api/treestore_getprevsiblingid.md - returns the id of the previous sibling of the specified node
- api/treestore_gettoprange.md - returns an array of the top tree nodes
- api/treestore_isbranch.md - checks whether the node has any children
- api/treestore_provideapi.md - assigns methods (and events) of DataStore to an object
- api/treestore_remove.md - removes the specified item from datastore
- api/treestore_serialize.md - serializes data to a JSON object
}}


<div class='h2'>Events</div>


{{api
- api/treestore_onafterdelete_event.md - fires after item deleting
- api/treestore_onbeforedelete_event.md - fires before item deleting
- api/treestore_onstoreupdated_event.md - fires after data is changed in datastore
}}


<div class='h2'>Properties</div>

{{api
- api/treestore_filtermode_config.md - defines the pattern for tree item filtering
}}





<div class='h2'>Other</div>


{{api
- api/treestore_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/treestore_methods.md
- api/refs/treestore_props.md
- api/refs/treestore_events.md
- api/refs/treestore_others.md

