Version 2.3
============

## Breaking changes

- form and toolbar provides consolidated [onChange](api/values_onchange_event.md) event 
while after setValues call [onValues](api/values_onchange_event.md) event will fire instead;
- [getSubMenu()](api/ui.menu_getsubmenu.md) method is renamed to [getMenu()](api/ui.menu_getmenu.md) with the following differencies:
	- **getMenu()** returns object of menu or submenu where an item is located; 
	- **getSubMenu()** method returns submenu object by the ID of its parent item;
- Default parse format is changed for datepicker and calendar controls from **"%Y-%m-%d",** to **"%Y-%m-%d %H:%i",**  parseTimeFormat is added as **"%H:%i"** by default.
Both of them can be altered within current locale. 

## New features

- [pro] [barcode](desktop/barcode.md) widget
- [pro] [organogram (organization chart)](desktop/organogram.md) widget
- [pro] multiselect and datepicker filters to pivots
- [pro] header sorting and value formatting in Pivot 
- [pro] processing of equal file names in File Manager
- badges and icons for list and menus (and views based on them)
- placeholder for richselect
- spacer element in menu view
- ability to subclass menu and submenu ( configuration from config and submenuConfig overrides default one )
- ability to trigger onReady in sync. way
- today and clear buttons are added to the default date editor
- editor can receive full data item
- touch skin
- upload for IE9

Check [migration guide](migration.md) for more details


##Updates

- DataCollection has getCursor and setCursor methods by default
- second click on a button with popup property will close the popup
- autoConfig can be reused for datatable, e.g. after clearAll() call
- $touchCapture flag for touch.limited mode
- before sending to server side all dates are serialized 
- error handlers of webix.remove calls will receive the text of response
- treestore has ability to serialize all data or filtered one
- calendar icons hidden by default
- scrollable "Month" view in Scheduler
- better default styling, ability to customize layout configuration

## Fixes

- fix regression in data loader init
- correct values for onChange event in slider
- using TreeDataLoader instead of DataLoader
- unfiltering doesn't affect not filtered view
- getActiveId for empty carousel
- correct rendering of buttons after changing visibility state
- removeView doesn't remove related value from form values
- onChange event in form triggers only on edit operations in form
- readonly mode for datepicker and colorpicker
- onChange event for slider
- using template.escape with null or undefined values
- realing toolbar and form samples
- fixed item height
- key navigation in empty combo, http://forum.webix.com/discussion/4080/combo-box#latest
- incorrect adding of hidden views, https://github.com/webix-hub/tracker/issues/208
- using quotas in button's text https://github.com/webix-hub/tracker/issues/209
- id usage
- onChange handlers for text and select controls used as ActiveContent
- tooltip for inputs, progress in IE8
- x-scroll in tree
- tree horizontal scroll
- borders in top level ( and borderless ) space layout
- scrolling: a list view > a datatable > the view
- using removeView to remove current view in the multiview
- active content in popups
- special chars handling in text inputs
- progress bar positioning (scrolling offset for "icon" type only)
- removeView for multiview control
- special chars handling in text inputs
- top and bottom positioning
- layout uses fixed height and width without alterations
- progress bar positioning (scrolling offset for "icon" type only)
- layout uses fixed height and width without alterations
- recurring editStop calls
- tree horizontal scroll
- slider fix for Touch in limited mode
- webix.ajax(url) call returns promise
- promiz will not occur if error was catched
- promiz throw an error only in debug version
- fonts for compact skin
- hiding columns with colspan
- clipboard breaks focus in the editor
- dynamic loading on touch devices
- scrolling to the last row index in case of scroll overflow
- IE8 fixes: preventing default actions and mouse event handling
- borders in top level ( and borderless ) space layout
- hiding columns with colspan
- regression in skin mapping
- hiding columns with colspan
- borders in grid when bootstrap used
- borders in grid when bootstrap used
- clipboard breaks focus in the editor
- drag-n-drop for columns in the datatable, header with colspans
- dynamic loading on touch devices
- fixing promize functionality which can export self to external structure when global "module" is defined
- maximum tab number calculation
- TreeStore: each method and filtered branches
- TreeStore: each method and filtered branches
- maximum tab number calculation
- drag-n-drop for columns in the datatable, header with colspans
- IE8 fixes: preventing default actions and mouse event handling
- applying new configuration after config reloading in datatable
- multiselect ignores non-existing values
- tabs rendering (border-box sizing)
- tabs rendering (border-box sizing)
- multiselect ignores non-existing values
- set optionHeight for skins
- checkAll and uncheckAll methods
- configuration of richselect with options from HTML
- inputHeight in case of labelPositon top
- tree ignores open call for already opened items
- checkAll and uncheckAll methods
- regression in getValue of colorpicker
- configuration of richselect with options from HTML
- tree ignores open call for already opened items
- attribute checking in block-selection for datatable
- value property in tabview
- applying new configuration after config reloading in datatable
- inputHeight in case of labelPositon top
- fixed datathrottle usage; updated dynamic loading samples
- Date serialization during ajax operations
- resetting uploader after file choosing
- focusing checkbox editor in Crome
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
- getValue, "editable" value
- setLocale and arrays extend
- setValue and getValue of Datepicker
- setLocale extend for complex properties
- remove icons from Scheduler's calendars
- calendar with no buttons, timepicker position
- FileManager locale: confirmation popups; collisions resolving without url handler
- conflicts between native navigation keys and navigation hotkeys
- server side filter reacts on navigation keys
- object id for gridsuggest
- solve request collisions (delete+rename/move/create)
- createFolder
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