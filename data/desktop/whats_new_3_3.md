Webix 3.3
===============

<span class="release_date">released on April 26, 2016</span>

##Breaking Changes

- *header* and *headerImage* properties were renamed to *docHeader* and *headerImage* in [PDF export](desktop/export_pdf.md#customizingexporttopdf) configuration. 
Additionaly, the *header* property was introduced to [tune the appearance](desktop/export_pdf.md#stylingtheexporteddata) of an exported table.
- the last argument of [webix.event](api/_event.md) helper was modified. Now it awaits an object with *master*, *id* and *context* properties while before it indicated an object to which *this*
keyword returns (master).

##New features

- [AbsLayout](desktop/absolute_layout.md) widget
- [DataLayout](desktop/absolute_layout.md) widget
- [sparklines](datatable/sparklines.md) for DataTable and TreeTable
- ability to send json in Webix Ajax calls via: 
	- "json" proxy for Ajax calls within data components
    - passing "Content-Type":"application/json" header in the [webix.onBeforeAjax](desktop/server_customload.md#modifyingbackgroundajaxrequests) event
- [drag-n-drop](desktop/dnd.md) support for touch devices


##Updates


- enhanced [FileManager](desktop/file_manager.md) appearance 
- [liveEditor](spreadsheet/math.md#formulaeditor) input in Spreadsheet
- [pointerevents](api/env_pointerevents_other.md) flag to webix.env helpers
- new positioning for dragged [Kanban](desktop/kanban_board.md) items
- [export API](desktop/exporting_components.md) returns promise
- shift key support for DataTable/Treetable [areaselection](datatable/area_selection.md)
- onBeforeAreaRemove and AfterAreaRemove events for DataTable and TreeTable
- onBeforeColumnShow/Hide onAfterColumnShow/Hide events for DataTable and TreeTable
- DataTable and TreeTable multiline header and paddings for TreeTable in [Excel](desktop/data_components_export.md) export 
- [extended configuration](desktop/export_pdf.md#stylingtheexporteddata) for PDF export
- DataTable footer is included into [Excel](desktop/data_components_export.md) and [PDF](desktop/data_components_export.md) exports
- ["$empty" property support](desktop/suggest.md#loadingdatatosuggestlist) for items in suggest lists
- [add] onBeforeApply event for Pivot Table
- [add] keepText property for multiselect
- [add] setContext()
- [add] sorting for options in select filters
- [add] support for missed values 

##Fixes

- correction for sheet names in [Excel](desktop/data_components_export.md) export 
- "light" gradient for bar charts with small radius
- changing month on day click in calendar with disabled navigation
- Fix areaselection columnhide
- miltiselect shows placeholder only during first rendering 
- filtering and optionslist
- webix._events collection for editors, filters and suggest controls
- chart destruction
- history track in case of dynamic loading; 
- custom templates with links (link click fires "onfocus" event)
- onpaste should not be called with opened editor
- multiSelectFilter and multiple options in data cells
- tabs ordering
- multiple views with ActiveContent
- toPNG can't be used with ID of HTML element
- parameters for server side filtering and sorting
- htmlform with clean/dirty values
- escape url params with server filtering and sorting
- inputs lost focus after paste on pages with clipboard enabled
- add document footer to base locales
- portlet events
- drag position for custom drag text
- portlets dnd on touch devices
- touch events call for views with no scroll
- correction for "illegal" characters in sheet names
- adding for collapsed accordion item
- cancel window move at runtime
- disabled checkbox
- removeAllSeries for Range chart
- columns reset in Pivit Table
- add footer into onBeforeRender event for Pibot Table
- stopEvent in File Manager
- uploading and readonly mode in File Manager
- counter as ActiveContent (blur handler is not called for buttons)
- keeping selection color for invalid items
- buttons disabled style
- hiding covered popups on modal area click
- rangechart throws errors in case of no data
- setting the first value in multiselect
- per-grid subview storage to avoid clearing it for nested subviews
- export columns with templates that require a column config.
- calculate button autowidth on resize
- bug with hideColumn and header colspans
- tag navigation and disabled checkbox
- resize subview works one way
- masterCheckbox with dynamically loaded data
- destructor() call for a modal Window
- download in File Manager
- filemanager upload
- icons
- undo and changeId
- calling changeId for same ids
- hide/show series in a chart with no legend
- scrolling a datatable with spans
- correcting height of calendar icons
- focus in forms with complex  structure
- de locale
