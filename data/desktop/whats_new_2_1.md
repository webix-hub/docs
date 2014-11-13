Version 2.1
=================================

##Major features

- ["strict" mode](api/env_strict_other.md) for Webix
- [Datatable and treetable math](datatable/formulas.md) can be extended with custom functions
- compatibility with Bootstrap
- [Uploader](desktop/uploader.md) can work in Internet Explorer 8-9
- Custom components can be [initialized via JQuery](desktop/jquery.md)


##Minor features

- ability to [send extra data](desktop/configuring_uploader.md#definingadditionaldatatosend) with file upload
- [addView() and removeView() methods](desktop/tabs_options.md#usingtabview) can be used to add and remove tabs in [tabview](desktop/tabview.md)
- [find API](api/ui.datatable_find.md) for datatable and treetable
- [addOption()](api/link/ui.tabbar_addoption.md) method supports option object as argument
- [addDropZone()](desktop/apionly_uploader.md#usingapiolyuploaderfordragndrop) method for uploader to allow dnd with apiOnly uploader
- [webix.ui.$freeze](api/ui_$freeze_other.md) blocks all resizing
- [webix.ui.animate to animate view creation](desktop/animation.md#animatingviewinitialization)
- bold fonts for default theme
- tabview can have custom width for different cells
- [tab close](api/ui.tabbar_onbeforetabclose_event.md) and [tab/segment remove](api/ui.segmented_onoption_remove_event.md) events
- removed "!important" where it is possible and other unnecessary styles
- [separator for multiselect](api/ui.multiselect_separator_config.md)

##Fixes

- Font Awesome updated to 4.2
- dataprocessor do not use scheme serializer before data sending to the server side
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
- reloding data in menu with hidden items
- ungroup API inconsistence
- IE Mobile and fullScreen (must be disabled)
- ie mobile animation
- mouse-wheel other custom scrolls
- pie chart map clearing
- invalid this reference in webix.require callback
- addView can't be used with accordion
- eachColumn works incorrect after column's reconfiguration

