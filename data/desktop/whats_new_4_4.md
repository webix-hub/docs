Version 4.4
======================

<span class="release_date">released on June 27, 2017</span>

Breaking Changes
---------
To avoid ambiguity, Google-map  has been completely removed from the [Components repository](https://github.com/webix-hub/components), 
but its [advanced version](https://docs.webix.com/desktop__googlemap.html) stays in package and is available in both GPL and PRO editions.  

New Features 
---------

- Query Builder widget
- webix.print() API to adjust any Webix view for printing
- export of hierarchical structures to Excel and CSV
- serverMultiComboFilter

Updates
---------

- ability to define disabled items in menu from json
- templateCopy for Datatable and Treetable
- scale and origin options for Datatable sparklines
- autodecting options sorting logic for filter in Datatable
- getRaw method for cookie storage
- addView() and removeView() methods for Carousel
- webix.history.track can be disabled
- Datatable's adjustRowHeight() can adjust the row to the highest cell if column id is not specified
-  ability to create rejected and resolved promises with webix.promise interface


Fixes
---------

- Datatable onBefore/AfterUnSelect events fire only for CTRL+click unselecting
- Datatable colspan in footer and columnGroup in header result in crash on collapsing
- Multicombo getText returns empty data
- Datatable with editMath: editor opens the formula only once
- prevent from an attempt to locate item in a destructed view
- Google-map: prevent from multiple including of api files into the document
- Tooltip does not fit into screen size
- Window with fixed header width
- asynchronous data with richSelectFilter and column fillspace in Datatable
- hidden series in Chart preserve active areas
- soft clearAll for TreeStore and Google-map
- Portlet inside Scrollview
- animate:false in Carousel view
- get formatted date for ExcelViewer instead of raw number
- Datatable scroll position after hiding columns on touch devices
- Datatable scroll with rowspan and leftsplit on touch devices 
- clearing Colorboard value does not work
- check for readonly options in plain HTML input as suggest master
- Datatable activeContent: calling locate() returns null
- grouped columns In Datatable: expanding also triggers sorting in the first column
 -Double List and Form Input can display validation messages
- locate dragged item over empty area
- drag-n-drop fails when mouse leaves document body
- loading subviews using Webix Jet menu on touch devices
- incorrect auto-loading calls for datatable with custom row height
- dynamic loading may ignore second call for the same data range
- add tag when separtor is  entered in Multicombo input
- deteling tags on Backspace in Multicombo 
- keepText property lets the data stay in input with newValues enabled in Multicombo
- hide columns in a fully x-scrolled Datatable
- i18n translation for Calendar and Richtext
- toggle's ambiguity with string values
- returning false from onBeforeLoad doesn't prevent loading data
- encoding fix in CSV export
- text controls should display numeric 0 value
- regression in biult-in editors on touch devices
- Datatable subrows  cause row rendering issue during scrolling
- readonly Combo: keydown invokes a suggest popup
- incorrect escape template in strict mode
- overflow CSS for modal Window
- Datatable shift+key multiselection fails in case of string row ids
- text of header menu items for groupped columns in Datatable
- bar-sparklines with origin lesser than values
- correct scroll after column size changing in Datatable
- remove space prefix for CSV export of hierarchical components
- saving state for Datatable with fillspace
- duplicate generation of the empty option for richSelectFilter with custom options
- loadBranch method ignores url parameter
- CSV export regression: the output file has two header lines
- Sidemenu positioning: wrong padding value
- call to a non-existent $init method in Select filter
- style for editable Datepicker as a filter

