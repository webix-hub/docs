Version 1.9
================

### Major new features

- Hotkey for inputs
- HTML links in menu

###Full list of changes and fixes

**New functionbality**

- webix.onAjaxError event
- ability to set default calendar sizes in skin
- bind can be be used to add new item into collection
- dayTemplate property
- focus style for buttons in flat and compact skins
- getHeaderNode method
- hotkey for controls
- menu links
- refreshFilter api


**Updated functionality**

- calendar sizes in touch skin
- eachColumn for visible and all columns 
- eachRow and data each can loop through hidden elements
- form.focus() will focus first focusable item in the form
- strToDate will not break when incoming parameter is already a Date


**Fixes**


- async data loading in IE
- better handling of server side sorting and server side filtering
- data updates for checkbox in grid
- dnd in treegrid on header
- event for master checkbox
- hidden column in datatable with colspans
- incorrect work of date, combo, richselect editors
- label height
- labels reset
- lint semicolon error fix
- menu link width
- next/prev toggle buttons
- option width support
- placeholder in datepicker
- regression in reloading layout content with webix.ui
- select editors in property
- showColumn against initially hidden columns
- sync webix.require without callback
- validation css for non-input controls
- webkit transitionEnd prefix (scroll was not disappeared in Chrome)
- standalone pager
