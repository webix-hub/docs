Items Selection
====================
Tree provides an ability to select leaves and branches within it.

Single-item selection
---------------------------
By default, selection is disabled in Tree. To activate it you should set the api/link/ui.treetable_select_config.md parameter to *true*.

{{snippet
Enabling selection in Tree
}}
~~~js
tree = new webix.ui({
  view: "tree",
  ...
  select: true
})
~~~

{{sample
	17_datatree/04_api/01_selection.html
}}

Multiple selection 
-------------------
To enable multiple selection in Tree, you should set parameter api/link/ui.treetable_select_config.md to *multiselect*.

{{snippet
Enabling multi-selection in Tree
}}
~~~js
tree = new webix.ui({
  view: "tree",
  ...
  select: "multiselect"
})
~~~

{{sample
	17_datatree/04_api/04_multi_select.html
}}


Related methods
--------------------

{{apitable

- api/link/ui.tree_getselectedid.md		method		returns the selected cells
- api/link/ui.tree_moveselection.md		method		moves selection in the specified direction 	
- api/link/ui.tree_select.md			method		selects the specified item 
- api/link/ui.tree_selectall.md			method		selects all items 	
- api/link/ui.tree_isselected.md		method		checks whether the specified item is selected or not 	
- api/link/ui.tree_unselect.md			method		cancels selection of the specified item 
- api/link/ui.tree_unselectall.md		method		removes selection from all items

}}


Related events
-------------------


{{apitable

- api/link/ui.tree_onafterselect_event.md 		event 		fires after a cell is selected
- api/link/ui.tree_onbeforeselect_event.md		event		fires before a cell is selected
- api/link/ui.tree_onselectchange_event.md		event		fires when selection is changed in DataTable 

}}