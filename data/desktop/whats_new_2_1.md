Version 2.1
=================================

<span class="release_date">released on November 26, 2014</span>

##Major features

- Better compatibility with Bootstrap and [jQuery](desktop/jquery.md)
- Icon font contains 479 icons now ( Font Awesome updated to 4.2 )
- ["strict" mode](api/env_strict_other.md) for Webix
- [Datatable and treetable math](datatable/formulas.md) can be extended with custom functions
- [Uploader](desktop/uploader.md) can work in Internet Explorer 8-9

If you are updating from Webix 1.x - please check the migration.md

##Minor features

- ability to [send extra data](desktop/configuring_uploader.md#definingadditionaldatatosend) with file upload
- [addView() and removeView() methods](desktop/tabs_options.md#usingtabview) can be used to add and remove tabs in [tabview](desktop/tabview.md)
- [find API](api/link/ui.datatable_find.md) for all data components
- [addOption()](api/link/ui.tabbar_addoption.md) method supports option object as argument
- [addDropZone()](desktop/apionly_uploader.md#usingapiolyuploaderfordragndrop) method for uploader to allow file upload by drag-n-drop on html area
- [webix.ui.animate to animate view creation](desktop/animation.md#animatingviewinitialization)
- tabview can have custom width for different cells
- [tab close](api/ui.tabbar_onbeforetabclose_event.md) and [tab/segment remove](api/ui.segmented_onoptionremove_event.md) events
- [separator for multiselect](api/ui.multiselect_separator_config.md)

##Fixes

- dataprocessor doesn't use scheme serializer before data sending to the server side
- view.show works correctly for tabview
- richfilter styling
- styling for invalid radio button
- dblclick events in the list
- unfiltering multi-select filter
- colspans in case of many datatables per page
- validation and third-party elements in the form
- destroy component in the tab after tab closing
- non-existent hours in specific time zones (Brazil for example)
- incorrect sizing for adjust command in datatable
- scroll config option for datatable
- sorting datatable in filtered state
- using markSorting against hidden grid
- error in math results in empty cell
- edit events in liveEdit mode
- htmlbutton template typo
- segment button display on iOS
- treestore filtering
- regression in the carousel view
- sorting of hidden column
- adjustColumn against the hidden column
- multiple multiselects per page
- column d-n-d and rotated headers
- incorrect parsing of width in complex menu while loading config from xml
- export of data with special characters
- reloading data in menu with hidden items
- ungroup API inconsistence
- ie mobile animation
- mouse-wheel other custom scrolls
- pie chart map clearing
- invalid this reference in webix.require callback
- addView can't be used with accordion
- eachColumn works incorrect after column's reconfiguration

