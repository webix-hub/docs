Version 1.0.2
==============

### New functionality

- getText method for datatable	
- lineMaxLimit parameter that cuts a line in "non-item" position
- ui.fullScreen solution for FF
- default size of resizer changed
- xml parse can recognize arrays	
- addView adds to the end of layout if index was not defined	
- skin updates, important flags removed where possible
- csrf key now sent through HTTP headers

### Fixes

- IE ignores hotkeys
- IE8 doesn't generated dblClick events	
- IE8 sets invalid value after changing cell value with select editor
- minWidth and maxWidth settings from xml
- loading tree-like data from XML
- datatable do not allow to define order of columns during export to PDF and Excel
- incorrect remove action for local and session storage
- regression in layout rendering when views are added through addView
- dataprocessor and id change during binding	
- label align in segmented button 
- incorrect in-layout positions after showBatch call
- invalid animations in FF and Chrome
