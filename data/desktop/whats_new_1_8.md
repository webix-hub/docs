Version 1.8
================

###Responsive Layouts and Tabbar

- Layout view can be hidden or moved if there's not enough space for them on the screen. [Check details](desktop/responsive_layout.md).
- Tabbar tabs can be moved to a related popup if there are not enough space for them on the screen. [Check details](desktop/responsive_tabbar.md).

###Disabling dates in Calendar

Calendar dates can be disabled to prevent their selection. [Check details](desktop/calendar.md#blockdates).

### Breaking changes
 - webix.proxy.$callback was replaced with webix.ajax.$callback
 - adjustHeaders deprecated

###Full list of changes and fixes

**New functionality**

- limited width for tabs and popup with additional tabs
- onClick handler accepts names from $scope
- server side filtering and sorting for datatable
- template@type = clean
- template@onClick handler
- predefined webixbutton css class
- getChildViews(), getBody() methods to scrollview
- "local" proxy for working with localstore
- hide/show of top level views
- tooltip option for inputs

**Updated functionality**

- popup in tabbar refactoring
- adjust property accepts "data" and "header" values, adjustHeaders deprecated
- show and hide refactoring
- min|max date refactoring
- direction top and bottom for animation in multiview
- attributes, placeholder and readonly works for all inputs
- datastore importData can work with primitive sources
- data@save = true, works the same as @save = @url
- cssFormat receives 4th parameter - column id

**Fixes**

- regression with popup rendering
- tabview operations in hidden state
- _refresh_scroll for boolean "scroll" config;  padding for popup
- hiding popup on resize; better popup style
- popupTemplate customization, size calculation
- scroll for contextmenu or submenu
- closing of nested popups
- position of centered window in case of fullpage scroll
- sizing of horizontal accordion
- clipboard operations on macos
- scrolling in datatable on macos
- clipboard operations and dyn. grid
- pager initialized after master component doesn't work correctly
- datatable blocks global page scrolling
- regression in dataprocessor url handling
- drag column over split area
- obj.open can be any positive value to mark branch open
- webix.require doesn't trigger callback for already loaded files
- regression in suggest for plain text fields
- collections and options for editors
- double-rendering in case of fillspaces
- collections and options in datatable
- webix.extend and webix.EditAbility
- math operations with complex keys
- webixEvent doesn't allow to block event
- using Webix with requireJs
- initial toggle state must be defined by "value"
- updateItem overwrite target instead of updating
- processing proxy callback
- tab id can't contain a single quote
- IE8 and list autosizing
- empty cell in math formulas
- column.minWidth has lesser priority than grid.minColumnWidth
- calendar doesn't reset zoom level on hide
- touch scroll for datatable
- onChange event for counter view