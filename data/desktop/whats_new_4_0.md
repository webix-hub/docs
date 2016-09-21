Version 4.0
===========

<span class="release_date">released on September 27, 2016</span>


New Features
--------------------

- SpreadSheet complex widget to replace the previous one
- Accessibility: 
	- High contrast "contrast" skin
	- Specific markup for screen reading software
	- Full keyboard navigation
- Angular 2 compatibility
- DateRangePicker and related controls (DateRange, DateRangeSuggest, DateRangeFilter)
- GoogleMap as data component

Updates
-------------------

- [PDF Viewer](desktop/pdfviewer.md): 
	- navigation and zooming on touch devices
    - scale property and ability to dynamically change it
- Export to PDF: ability to set a [custom font file](desktop/export_pdf.md#exportingdataoffline)
- urlData parameter for Uploader
- MultiText allows customizing sub fields with subConfig property
- DataDriver: getInfo properties changed to public
- Better control over data move (drag-n-drop): [externalData](api/datamove_externaldata_config.md) property function receives the original data as a third parameter

Fixes
------------------

- line-height in Datatable subviews
- MultiCombo: do not show additional line if tagMode is disabled
- rendering value for combo in ActiveContent
- autosizing for Dataview items
- Suggest show selection after it is rendered
- style of focused Select box
- Organogram lines styling
- issues with .addView() in isolated Layout 
- PDF viewer events (onAfterLoad, onPageRender) trigger in the correct time 
- Tree and TreeTable: adding items in closed branch
- memory leaks for form controls
- config.text for combo with rich html options
- scroll in DataTable on Safari
- prevent from "undefined" class in Calendar day css
- dragColumn and onBeforeColumnDropOrder
- dragscroll and topSplit
- clearing "mousemove" timeout
- collect options in built-in filters by ID not value
- white background of paging animation removed
- remove for TreeStore supports an array of IDs
- tab navigation and disabled Richselect  and controls based on it
- Uploader sets status 'client' for file which uploading was aborted
- DataTable frozen rows and drag-n-drop
- "order" drag-n-drop in scrollable Tree and TreeTable
- values of activeContent
- destruct activeContent views on master destruction
- Uploader check icon 