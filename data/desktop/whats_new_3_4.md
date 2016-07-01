Version 3.4
===========

<span class="release_date">released on July 25, 2016</span>


New Features
-----------

- ['Month' and 'year' types](desktop/calendar.md#monthandyeartypes) for Calendar
- [Webix Remote](desktop/webix_remote.md) is now available as a part of Webix UI 
- [Formatted text inputs](desktop/formatted_text_inputs.md)
- [Area, Spline, Pie and Bar](datatable/sparklines.md#sparklinestypes) types for DataTable and TreeTable sparklines
- Ability to set [a custom size for an area where "resize" is detected](datatable/sizing.md#resizing) 
- The [color](datatable/sparklines.md#settingsparklinescolors) property for Sparklines, [negativeColor](datatable/sparklines.md#neg_color) option for Bar-sparkline
- showOption and hideOption for [Segmented](desktop/segmented.md#showingandhidingoptions) and [Tabbar](desktop/tabbar.md#showingandhidingoptions) controls
- Ability for sorting creation


Updates
---------
- split support for AreaSelect


Fixes
-------

- regression in the offline proxy
- Richselect and Datepicker return a span with placeholder as gettext in case of no value
- filtering and hidden columns in IE11
- data export to ignore empty rows of a dynamically loaded set
- regression in Tree data bind
- reusing the same config for DataTable view
- temporary fix for the sizing issues in Chrome
- empty Multicombo returns undefined as a value
- invalid calls for columnGroup helper objects (close triggers open, and vice versa)
- hidden Combo
- loading new data into an existent branch
- creating export scheme with multiple headers/footers and extra columns
- no-axis rendering in chart
- SVG content: className is an object for svg
- Chart legend
- incorrect paging in the DataView
- Datalayout and hierarchical components
- setting next visible tab when the last tab is removed
- keep master input focused after click in Suggest
- keepViews and addView in Multiview
- border-radius of ContextMenu
- dynamic adding of nested items into a Tree
- compressed lib and custom properties on data objects
- getting child views of a submenu
- check whether an item exists while locating item in a mouse event in DataTable
- resizeColumn and dragColumn
- show-hide header after DataTable initialization
- refresh scroll state for a DataTable inside a portlet
- adjusting sub-layouts in DataTable subviews
- columnGroup feature and colspans