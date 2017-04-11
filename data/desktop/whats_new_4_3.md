Version 4.3
==============

<span class="release_date">released on April 26, 2017</span>

Breaking Changes
-----------------

Integration adapters are extracted to separate repositories


New Features
---------------

- DoubleList widget with customizable buttons
- [Bullet Graph](desktop/bullet_graph.md) as a combination of a chart(gage?) and a progress bar (PRO edition)
- Form Input control that allows rendering form components in the common style
- Webix+React integration demo
- [webix.stringify](api/_stringify.md) helper


Updates
-------

- ability to define columns as plain array in export options
- ability to set and get milliseconds while parsing dates with webix.Date helper
- 'shift+enter' support for popup editor to enter multiline text
- ability to use custom map source for Googlemap
- autoheight for Datatable header lines
- ability to use built-in validation rules in forms with complexData

Fixes
------

- tooltip position near view borders
- context menu position near view borders
- adjusting Datatable column width to rotated headers
- adjust column width to headers in empty Datatable 
- UIManager cannot set focus after hiding/disabling/collapsing
- unselect invisible Datatable items
- sorting events for 'server' Datatable sorting
- file downloading in Chrome on Mac
- sync of TreeStore-s with filtering
- labels in dynamic Chart
- incorrent animation during fast clicking
- resizing of Fieldset child views
- Fieldset ignores fixed sizes without container
- Chart animation inside of a hidden page
- grouping "count" mode ignores missed values
- Gage tries to process incorrect values
- Richtext tries to apply operations if text is not selected
- export of multiline data (strings with '< br >' element)
- apply column format during Datatable export
- export of multiline header to CSV
- memory leak in Datastore destruction
- destruction logic of resizer
- setting fixed dimensions for Daterange
- CSS for disabled image button 
- more precise compare of old and current values for editors
- incorrect label for Calendar year view
- validation rule processes emails with spaces incorrectly
- Datatable richselectFilter has rendering issues  in IE11
- Datatable scroll logic will fire events if scroll was really changed
- changes in Chinese locale
- aria labels for editors fails in case of numeric value
- hasEvents incorrectly detects mapped events
- parameters of rest proxy and insert operations
- PDF viewer renders pages of a non-existent PDF document
- IE8 regression with webix inner events
- check selection when sync is applied
- consider empty values as equal for date controls
- drag-n-drop in Datatable with colspans
- regression in Suggest navigation
- regression in DateRangepicker