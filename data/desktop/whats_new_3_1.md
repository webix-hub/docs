Version 3.1
=====================

<span class="release_date">released on November 24, 2015</span>

##New Features

- [Sidemenu](desktop/sidemenu.md) widget
- [TreeMap](desktop/treemap.md) (PRO edition)
- [Sidebar](desktop/sidebar.md) extension
- autowidth for desktop/menu.md#autowidth and desktop/button.md

##Updates

- [listMarginX and listMarginY](organogram/configuration.md#creatinglistblocks) settings for organogram
- [open()](api/link/ui.organogram_open.md) and [close()](api/link/ui.organogram_close.md) methods for organogram
- [newValues](api/ui.multicombo_newvalues_config.md) for multiselect
- [eachLeaf()](api/treestore_eachleaf.md) for TreeStore
- support for numPad keys UIManager
- [onSubViewOpen](api/ui.datatable_onsubviewclose_event.md) event handler for DataTable
- api/ui.uploader_inputname_config.md parameter for uploader
- "multiselect" support for KanbanLists
- [setStructure()](desktop/pivot.md#api) for PivotTable
- ["root" batch](file_manager/configuration.md#actionsmenu) for File Manager
- animateView method and "month" view animation for Scheduler on touch devices
- error message on init non-GPL views with Webix GPL
- api/ui.multicombo_tagmode_config.md property for multicombo
- [load() method](desktop/pdfviewer.md#pdfviewerapireference) for PdfViewer
- [toFront](api/ui.window_tofront_config.md) property for windows and popups
- api/html_gettextsize.md() method for html helper

##Fixes


- nested isolated scopes
- refreshColumn correctly removes filters
- clipboard: clicks on selected item/cell
- subrow opening in TreeTable
- Multicombo and bottomPadding
- numberFilter to accept 0 and fractional numbers
- remove sub items with parent in tree
- accordion doesn't resize the header panel
- progressBar in window
- disabled Resizer
- json format in php files
- scrolling DataTable with span(s) on touch devices
- Fieldset vertical padding
- handling mouseup outside browser window
- pager update on data count change
- focus() method for checkbox and radio
- Carousel navigation z-index
- regression in windows focus handling
- regression in form focus handling
- data corrupting by counter in the footer
- size of editors in case of sub-forms, sub-rows
- sub-rows and precise scroll
- double-rendering from onchange handler in Chrome
- handling mouseup outside browser window
- DataProcessor in updateFromResponse mode doesn't trigger update events
- checkbox doesn't trigger onDataUpdate event
- JSON date parser doesn't recognize dates without milliseconds
- IE8 compatibility for uploader
- size of fillspace columns for very small grids
- Fieldset vertical padding
- export to Excel and Webix Jet (RequireJS)
- progressBar in window
- disabled Resizer
- date-time shifting in export to Excel
- webix.copy correctly process Date objects
- parsing bolean values from HTML markup
- blockDates in Calendar
- totalColumn in Pivot Table
- custom columns in Excel export
- format property in DatePicker can accept a function
- hiding columns in a DataTable, those were added dynamically
- export to Excel, dates processing
- FireFox: customCheckbox and customRadio
- regression in DataTable click processing
- regression in form.setValues api