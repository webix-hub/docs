Version 2.4
============

<span class="release_date">released on May 22, 2015</span>

## New features

- [Portlet](desktop/portlet.md) widget
- [MultiCombo](desktop/controls.md#multicombo) widget
- [Range Slider](desktop/controls.md#slider) widget
- [Advanced validation](desktop/data_validation.md#validationmessage) messages for forms

##Updates

- "button" config property
- "multicombo" control and onBeforeShow event
- "static" property for non-animated Multiviews
- event onBeforeEventShow for Scheduler
- getPopup method for combo editor
- ie9 support for progress bar
- invalid message and bottom label for form widget
- metaKey support (mac OS) for multiselection
- methods getCurrentFolder and getSelectedFile for FileManager
- noselect style for views in drag and multi-selection processes
- onPopup event for pivots (fires on popup creation)
- paging for TreeTable
- proxy is released after view destruction
- range slider
- read-only mode for pivot chart and table
- static mode for animation (multiview with iframes)
- webix ajax object to arguments of onBeforeAjax event
- addStyle reused previously created style tag
- headers as 5th argument of onBeforeAjax event
- updated FontAwesome to 4.3.0 version

## Fixes

- ActiveContent doesn't survive component repainting in IE
- adding new items in filtered branches of treetable
- buttons inside html form
- clipbuffer styling in IE8
- close all sub-windows on master popup closing
- closing of nested popups ignores windows
- colspans and split mode
- column drag-n-drop on touch devices
- combo accepts full data object as a value
- combo behavior in dyn. loading mode
- correct input width for inputs with no label (richselect-based filters of datatable)
- creating new branches in filtered state
- CSV parser ignores the trailing new-lines
- detach options handler after master component destruction
- disabling headermenu for hidden column
- events on SVG elements
- FileManager upload and Uploader in IE8
- focus() and blur() for buttons
- hidden:false and modal:true in window config
- hot keys and numpad
- IE GET requests
- IE9 doesn't allow setting custom properties on AJAX object
- incorrect rendering of first row in case of paging
- invalid math in newly added rows
- material skin detection
- message width and height
- missed onAfterFilter event for server side filtering - server side filtering with activ...:40 PM
- multitext with suggest
- onBeforeFileAdd in IE9
- onChange event in combo
- regression in data saving handling
- regression in tooltip for icon
- regression in treetable filtering
- resize last column in right-split mode
- responsive attribute doesn't work for clean and line layouts
- richselect filter in IE8
- richselect: setting an empty value clears list selection
- scroll definition for datatable on Touch devices
- scroll position on last row in paging mode
- serialization of data by webix.ajax
- serialization of Date object
- tabFocus doesn't work for icon view
- text positioning in datatable
- unnecessary scroll blocking by datatable
- using select api in datatable with complex id
- validation in dataprocessor breaks insert operations
- validation in hidden form
- value binding and dataFeed
- value formatting
- web skin active button color
