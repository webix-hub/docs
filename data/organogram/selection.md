Selecting Items
===============

You can select items within the Organogram component.

<img src="desktop/organogram_selection.png">

By default, selection is disabled in Organogram. To activate it you should set the api/link/ui.organogram_select_config.md parameter to *true*.

{{snippet
Enabling selection in Organogram
}}
~~~js
orgChart = new webix.ui({
  view: "organogram",
  ...
  select: true
})
~~~

{{sample
60_pro/07_organogram/01_basic.html
}}

Related methods
--------------------

{{apitable

- api/link/ui.organogram_getselectedid.md	method		returns the selected cells ids
- api/link/ui.organogram_select.md			method		selects the specified item 
- api/link/ui.organogram_selectall.md		method		selects all items 	
- api/link/ui.organogram_isselected.md		method		checks whether the specified item is selected or not 	
- api/link/ui.organogram_unselect.md		method		cancels selection of the specified item 
- api/link/ui.organogram_unselectall.md		method		removes selection from all items

}}


Related events
-------------------


{{apitable

- api/link/ui.organogram_onafterselect_event.md 		event 		fires after a cell is selected
- api/link/ui.organogram_onbeforeselect_event.md		event		fires before a cell is selected
- api/link/ui.organogram_onselectchange_event.md		event		fires when selection is changed in DataTable 

}}

@edition:pro

@spellcheck:apitable