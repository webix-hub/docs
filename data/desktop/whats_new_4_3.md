Version 4.3
==============

<span class="release_date">released on April 26, 2017</span>

See also What's New of complex widgets:

- [SpreadSheet](spreadsheet/whats_new.md)
- [Pivot](pivot/whats_new.md) 
- [File Manager](file_manager/whats_new.md) 


Breaking Changes
-----------------

Integration adapters for [Angular](https://github.com/webix-hub/webix-angular), [Backbone](https://github.com/webix-hub/webix-backbone)
and [JQuery](https://github.com/webix-hub/webix-jquery) are extracted from *webix.js* to separate repositories on GitHub. 
Check the [Migration Guide](migration.md#webix4243) for more details.


New Features
---------------

- [Double List](desktop/double_list.md) control with extended selection possibilities and customizable buttons
- [Bullet Graph](desktop/bullet_graph.md) as a compact version of Gage to show more information in a limited space (PRO edition)
- [Form Input](desktop/forminput.md) control that allows rendering form components in the common style
- [Webix+React Integration](desktop/react.md)
- [webix.stringify](api/_stringify.md) helper


Updates
-------

- ability to [define columns as plain array in export options](desktop/data_components_export.md) 
- ability to set and get milliseconds while [parsing dates](helpers/date_formatting_methods.md) with webix.Date helper
- ['shift+enter' support for popup editor](desktop/editing.md#popup) to enter multiline text
- ability to use [custom map source for Googlemap](desktop/googlemap.md#usingcustommapsource)
- [autoheight for Datatable header lines](datatable/headers_footers.md#autoheightforheaderandfooter)
- ability to use built-in validation rules in [forms with complexData](desktop/form.md#settinginitialvalues)
- ability to [add custom icons into the Daterange widget](desktop/daterange.md#todayandclearicons)
- Webix debug version warns about non-numeric sizes for widgets
- visual update of the cursor for Datatable resizing (n-resize and e-resize cursor properties are replaced with row-resize and col-resize correspondingly)
- FontAwesome updated to version 4.7

Fixes
------

- invalid message for several inputs in a row does not show 
- .clear call for Form with Uploader
- calling sync second time in Datastore results in an error 
- global event handler leak in Tooltip
- focus processing for ActiveContent elements 
- key navigation: shift+tab doesn't open previous editor 
- regression in object coping for sync operations in Datastore
- using add in dynamic loading callback of tree-like views
- removeView in isolated Layout
- block selection in Datatable doesn't work on any page but first 
- IE9 compatibility for Ajax requests
- regression in hidden layout sizing
- incorrect onBlur behaviour with select controls
- regression in handling multiple loading calls at once
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
