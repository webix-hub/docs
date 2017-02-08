Version 4.1
===========

<span class="release_date">released on November 23, 2016</span>

Breaking Changes
------------------

Changes in Webix [Pivot](desktop/pivot.md):

- filter Date values are converted into timestamp {{sample 61_pivot/06_filters/03_datepicker.html}}
- Multiselect filter is replaced with the Multicombo filter (you need to check your locale files)

Check the [Migration Guide](migration.md#webix4041) for more details.

New Features
--------------

- [Dynamic mode](desktop/dynamic_chart.md) for Charts  
- [Gage](desktop/gage.md) widget (PRO edition)
- [RichText](desktop/richtext.md) control
- [splineArea](desktop/chart_types.md#splineareachart) type for Сhart  

Updates
---------

- Datatable api/ui.datatable_mincolumnwidth_config.md setting is used in column autosizing
- null parameter for DataTable api/ui.datatable_freezerow.md to unfreeze all rows
- REST proxy supports query string (for "delete" and "update" actions)
- $enterKey method for Suggest
- a border for Datatable frozen rows
- api/ui.pdfviewer_clear.md API for desktop/pdfviewer.md
- [pivot] ability to [define custom Filters](pivot/filters.md#changingfieldforfiltering)
- [pivot] ability to override structure (api/ui.pivot_onviewinit_event.md event)
- [pivot] ability to process data on the server-side {{sample 61_pivot/07_table_external/01_readonly.html}}


Fixes
-------

- series labels for Charts (ARIA-related)
- prevent event only for moving selection
- promise.all will reject, if any elements of promise were rejected
- blocked area adding in Datatable area selection 
- row id as a parameter of Datatable freezeRow method
- freezeRow and data filtering
- month calendar should select date after year change
- null values in line Chart (regression)
- Slider refresh
- scheme autoconfig for Datatable 
- scheme init with loaded config
- drawing sector with angle > 180 degrees in pie Chart for Datatable sparklines
- string values in pie Chart for Datatable sparklines
- responsive Layout and last cell in the row
- align-absolute and left, right paddings in FlexLayout
- Uploader inside of an isolated view
- regression in RichSelect control
- adding page styles via webix.html.addStyle() in IE8
- getValue() of Suggest
- loading an empty array into data components
- getText() for hidden RichSelect
- getValue() for an "empty" option in Suggest
- RangeChart last value
- RangeChart: mouseup outside the document.body
- no padding case for Charts
- Multicombo disabled
- performance of updateItem for DataLayout
- setState() doesn't work correctly for hidden DataTable
- rendering of hidden views in case of DataLayout
- rendering of very long DataViews
- cancel move selection for DateRange
- keys navigation and checkbox 'announcement' by screen readers in checksuggest
- keynav for Colorboard and ColorPicker
- hover and focus CSS for prev/next buttons
- issues with outline of HTML elements related to accessibility
- DateRange icons padding
- DateRange: set and correct values before triggering event
- DateRange 'today' CSS
- DateRange 'outside' CSS
- refreshing Window with a "position" defined after the window's been moved
- dragscroll for data components with custom item height
- 0-hour label for the "en" locale
- new navigation and areaselection in Datatable
