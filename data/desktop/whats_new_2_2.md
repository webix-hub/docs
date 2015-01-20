Version 2.2
=================================

## Breaking changes

 - width and height settings for all data components include size of scrollbar ( so component will always take exactly the same size as was defined by width and height properties )
 - ajax.header was deprecated in favor of [ajax.headers](api/ajax_headers.md)

If you are updating from Webix 1.x - please check the migration.md


## New features

- data binding for Tree, TreeTable and [TreeCollection](desktop/binding_details.md#bindingrules)
- optional [Today and Clear buttons](desktop/calendar.md#todayandclearbuttons) in the Calendar
- ability [to define file types](desktop/configuring_uploader.md#uploadingparticularfiletypes) for file uploader
- webix.ajax api can be used to [fetch binary data](helpers/ajax_operations.md#gettingbinarydata) ( file downloading by ajax )
- [optional hover for rows](datatable/styling.md#hover) in datatable
- horizontal and vertical [auto-scrolls during drag-n-drop](datatable/drag_and_drop.md#autoscroll) for data components
- extra [options for filtering](datatable/filtering.md#treetablespecificconfiguration) in tree and treetatable 
- improved scrolling on touch devices
- advanced [tooltip options for datatable](desktop/tooltip.md#datatabletooltip)
- all data components supports [object notatins for $css](desktop/styling.md#stylingseparateitemsinthecomponent) property
- onClick and other mouse handlers can use any css class, not only the first one
- [view.show](api/ui.baseview_show.md) can be used without animation
- [markup.init](api/markup_init.md) will return newly constructed ui
- size of columns and order of columns can be restored through [setState API](api/link/ui.datatable_setstate.md)
- [removeHotKey](desktop/uimanager.md#remove) accepts human readable key names


## Fixes

- addView for tabview doesn't support extended tab configuration
- assigning the same css class during layout reconstruction
- calendar is incompatible with bootstrap
- calendar: cellHeight support
- changing value in combo after focus out
- cick event handling in IE8
- css for collapsed accordion items in compact and flat skins
- custom and touch scroll in tree
- custom id in scheme.$init for tree and treetable
- datePickerFilter can't be combined with other filters
- double call for dynamic loading in the tree
- dynamic loading in filtered state for tree and treetable
- export to excell and null values in the datatable
- header menu and column hiding
- header sorting for clicks in rich-filters in the header
- headermenu for grid with auto-config and remote data loading
- hotkeys in ie8
- IE8 fixes and pair event handling (context menu)
- IE8 sorting fix (map method)
- IE8 xml parsing
- incorrect filter value preserving during datatable repainting
- incorrect id in the onDataRequest event
- incorrect menu sizing
- incorrect scroll state for the hidden datatable
- incorrect scroll state processing for grid with not-aligned rows
- incorrect size setting from dtable.setState
- incorrect state of headermenu after menu reloading
- invalid handling of 0 as the option value
- invalid result of hasEvent call after detaching event
- iOS fix for full-screen mode; uploader fix (status processing)
- minutes containers and browser zooming in calendar
- multiselect and idSpace fix
- not-numeric arguments in math formulas in the datatable
- popup closing delay
- popup doesn't adjust after inner content resize
- preserving value of multi-select filter after datatable refresh
- regression in addView for accordion
- regression in block selection in datatable
- regression in context handlers
- regression in input disabling from config
- regression in isolate tabbar handling
- repainting after removing item in the tree
- replacing hidden cell in multiview
- richSelectFilter and getFilter api
- scroll state in datatable after hide|show operations
- selection in dataview with dyn. loading
- setState in datatable will ignore columns with non-unique ids
- sorting ignores state set by markSorting API
- special chars handling by select filter
- spinner progress position
- styling of sparce datatable
- template breaks on "->" chars
- text vertical align for inputs inside toolbar
- uncheck for checkboxes in indeterminate state
- uncheck of initially enabled radio button
- unnecessary error message in case of ajax call canceling
- unwanted onclick reaction on buttons in IE
- uploader active area for macos
- x-scroll in autosized lists