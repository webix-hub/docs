Version 2.3
============

<span class="release_date"> released on March 24, 2015</span>

## Breaking changes

- Default [parse format](api/i18n_parseformat_other.md) is changed for datepicker and calendar controls from *"%Y-%m-%d"* to *"%Y-%m-%d %H:%i"*. Both of them can be altered within current locale. 

- Sizing of layouts changed. In Webix 2.2 and earlier height and width on layout were not including padding and margins. Starting from Webix 2.3 height and width of layout is a full size of layout, including all margins and paddings.

Check [migration guide](migration.md) for more details.

## New features

- new [material skin](https://github.com/webix-hub/material-design-skin)
- [pro] [barcode](desktop/barcode.md) widget
- [pro] [organogram (organization chart)](desktop/organogram.md) widget
- [pro] multiselect and datepicker filters to Pivot
- [pro] header sorting and value formatting in Pivot 
- [pro] processing of equal file names in File Manager
- [pro] file upload for IE9 in File Manager
- [onChange](api/values_onchange_event.md) event for toolbar and form to capture user changes
- [onValues](api/values_onchange_event.md) event for toolbar and form 
- [getMenu](api/ui.menu_getmenu.md) method for menu to get current menu/submenu object
- [parseTimeFormat](api/i18n_parsetimeformat_other.md) is added as **"%H:%i"** by default to parse "time" strings
- badges and icons for list and menus (and views based on them)
- badges for buttons
- placeholder for richselect
- [spacer element](desktop/menu.md#initialization) in menu view
- ability to provide [submenu configuration](desktop/menu.md#workingwithmenuitems) in submenuConfig property of the topmost menu
- ability to trigger [onReady](desktop/event_handling.md#globalwebixevents) in a synchronous way
- "Today" and "Clear" buttons are added to the [date editor](api/editors_date_other.md). They are hidden by default.
- [editor object](desktop/editing.md) can receive full data item

##Updates

- DataCollection has api/link/datacollection_getcursor.md and api/link/datacollection_setcursor.md methods by default
- second click on a [button with popup property](desktop/popup.md#creatingapopupmenu) will close the popup
- [autoConfig](api/ui.datatable_autoconfig_config.md) can be reused for datatable, e.g. after clearAll() call
- [$touchCapture](api/ui.slider_$touchcapture_other.md) flag in component configuration for [touch limited mode](api/touch_limit.md). Used for [slider](api/refs/ui.slider.md) control. 
- before sending to server side all dates are serialized
- error handlers of webix.remote calls will receive the text of response
- treestore has ability to serialize all data or filtered one
- scrollable "Month" view in Scheduler
- better default styling, ability to customize layout configuration

## Fixes

- fix regression in data loader initialization
- correct values for onChange event in slider
- using TreeDataLoader instead of DataLoader
- unfiltering to affect not filtered view
- getActiveId() for empty carousel
- correct rendering of buttons after changing visibility state
- removeView() to remove related value from form values
- onChange event in form triggers only on edit operations in form
- readonly mode for datepicker and colorpicker
- onChange event for slider
- using template.escape with null or undefined values
- key navigation in empty combo
- incorrect adding of hidden views in accordion
- using quotas in button's text
- onChange handlers for text and select controls used as ActiveContent
- tooltip for inputs, progress in IE8
- x-scroll in tree
- tree horizontal scroll
- borders in top level (and borderless) space layout
- using removeView() to remove current view in the multiview
- special chars handling in text inputs
- progress bar positioning (scrolling offset for "icon" type only)
- top and bottom positioning
- layout uses fixed height and width without alterations
- recurring editStop() calls
- tree horizontal scroll
- slider fix for Touch in limited mode
- webix.ajax(url) call returns promise
- promiz will not occur if error was caught
- promiz throws an error only in debug version
- fonts for compact skin
- hiding columns with colspan
- clipboard breaks focus in the editor
- dynamic loading on touch devices
- scrolling to the last row index in case of scroll overflow
- IE8 fixes: preventing default actions and mouse event handling
- hiding columns with colspan
- regression in skin mapping
- borders in datatable when Bootstrap used
- clipboard breaks focus in the editor
- drag-n-drop for columns in the datatable, header with colspans
- dynamic loading on touch devices
- fixing promize functionality which can export self to external structure when global "module" is defined
- maximum tab number calculation
- TreeStore: each method and filtered branches
- applying new configuration after config reloading in datatable
- tabs rendering (border-box sizing)
- multiselect ignores non-existing values
- set optionHeight for skins
- checkAll() and uncheckAll() methods
- configuration of richselect with options from HTML
- inputHeight in case of labelPositon top
- tree ignores open call for already opened items
- regression in getValue() of colorpicker
- attribute checking in block-selection for datatable
- value property in tabview
- fixed datathrottle usage
- Date serialization during ajax operations
- resetting uploader after file choosing
- focusing checkbox editor in Chrome
- disabled counter in IE10
- options with quote in multi-select
- regression in getValue of colorpicker
- resetting text filter value after reloading data from the server side
- filters in treestore
- autoheight in templates
- tabbar "more" icon styling
- blockselection and custom scroll
- blockselecting and dbl-click events
- blockselection in scrolled state
- blockselection in the empty datatable
- getValue(), "editable" value
- setLocale() and arrays extend
- setValue() and getValue() of datepicker
- setLocale() extend for complex properties
- remove icons from Scheduler's calendars
- timepicker position
- FileManager locale: confirmation popups; collisions resolving without url handler
- conflicts between native navigation keys and navigation hotkeys
- server side filter reacts on navigation keys
- object id for gridsuggest
- solve request collisions (delete+rename/move/create)
- createFolder for fileManager
- default hotkeys for windows
- treestore serialize (filtering)
- provideAPI
- moving items in tree and tree table while in the filtered state
- missed methods in TreeCollection
- "format" of datepicker and filemanager fixes
- processing setState with empty filter value
- select filter in FF
- regression in click handling inside of multi-level popup
- incorrect filter processing during setState call