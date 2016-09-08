Version 3.3
===============

<span class="release_date">released on April 26, 2016</span>

##Breaking Changes

- *header* and *headerImage* properties were renamed to *docHeader* and *headerImage* in [PDF export](desktop/export_pdf.md#customizingexporttopdf) configuration. 
Additionally, the *header* property was introduced to [tune the appearance](desktop/export_pdf.md#stylingtheexporteddata) of an exported table.
- the last argument of [webix.event](api/_event.md) helper was modified. Now it awaits a context object with *master*, *id* and *capture* properties while before it indicated an object to which *this*
keyword refers (master).
- [collectValues](api/ui.datatable_collectvalues.md) method of the DataTable and TreeTable doesn't return an empty option any more.

Check the [Migration Guide](migration.html#webix3233) for more details. 

##New Features

- [AbsLayout](desktop/absolute_layout.md) widget (PRO edition)
- [DataLayout](desktop/data_layout.md) widget (PRO edition)
- [sparklines](datatable/sparklines.md) for DataTable and TreeTable (PRO edition)
- ability to send json in Webix Ajax calls via: 
	- ["json" proxy](desktop/server_proxy.md) for Ajax calls within data components
    - passing "Content-Type":"application/json" header in the [webix.onBeforeAjax](desktop/server_customload.md#modifyingbackgroundajaxrequests) event
- [drag-n-drop](desktop/dnd.md) of component items on touch devices


##Updates


- enhanced [FileManager](desktop/file_manager.md) appearance 
- [liveEditor](spreadsheet/math.md#formulaeditor) input in Spreadsheet
- [pointerevents](api/env_pointerevents_other.md) flag to webix.env helpers
- new positioning for dragged [Kanban](desktop/kanban_board.md) items
- [export API](desktop/exporting_components.md) returns promise
- shift key support for DataTable/TreeTable [areaselection](datatable/area_selection.md)
- [onBeforeAreaRemove](api/ui.datatable_onbeforearearemove_event.md) and [onAfterAreaRemove](api/ui.datatable_onafterarearemove_event.md) events for DataTable and TreeTable
- [onBefore/AfterColumnHide](api/ui.datatable_onaftercolumnhide_event.md) and [onBefore/AfterColumnShow](api/ui.datatable_onaftercolumnshow_event.md) events for DataTable and TreeTable
- DataTable and TreeTable multiline header and padding for TreeTable in [Excel](desktop/data_components_export.md) export 
- [extended configuration](desktop/export_pdf.md#stylingtheexporteddata) for PDF export
- DataTable footer is included into [Excel](desktop/data_components_export.md) and [PDF](desktop/data_components_export.md) exports
- ["$empty" property support](desktop/suggest.md#loadingdatatosuggestlist) for items in suggest lists
- [onBeforeApply](pivot/customization.md#changingpivotstructure) event for Pivot Table
- [keepText](api/ui.multicombo_keeptext_config.md) property for MultiCombo
- [setContext()](api/link/ui.contextmenu_setcontext.md) method for Context and ContextMenu
- sorting for options in select filters in [Pivot Table](desktop/pivot.md)
- support for missed values in [Pivot Table](desktop/pivot.md)
- default color range for Charts changed
- "drag over" background during item drag-n-drop changed

##Fixes

- always suggest the first record if no items are selected in select inputs
- option selection by typing its exact text in select inputs
- vertical radio size calculation
- possibility to configure header image of the exported PDF document
- hiding columns from selected areas in Pivot
- "light" gradient for bar Chart with small radius
- changing month on day click in Calendar with disabled navigation
- fix areaselection with column hide and show
- Multiselect shows placeholder only during first rendering 
- filtering and optionslist in multiSelectFilter in DataTable
- Chart destruction
- history track in case of dynamic loading in FileManager
- custom templates with links (link click fires "onfocus" event) in File Manager
- onpaste should not be called with opened editor
- multiSelectFilter and multiple options in data cells
- tabs ordering
- multiple views with ActiveContent
- webix.toPNG can't be used with ID of HTML element
- parameters for server side filtering and sorting
- Html Form with clean/dirty values
- escape url parameters with server filtering and sorting
- inputs lost focus after paste on pages with clipboard enabled
- add document footer to base locales in PDF export
- Portlet events
- drag position for custom drag text
- Portlet Drag-n-drop on touch devices
- touch events call for views with no scroll
- correction for "illegal" characters in sheet names in Excel export 
- adding for collapsed Accordion item
- cancel Window move at runtime
- disabled Checkbox
- removeAllSeries for RangeChart
- columns reset in Pivot Table
- add footer into onBeforeRender event for Pivot Table
- stopEvent in File Manager
- uploading and readonly mode in File Manager
- counter as ActiveContent (blur handler is not called for buttons)
- keeping selection color for invalid items
- disabled style for buttons
- hiding covered popup on modal area click
- RangeChart throws errors in case of no data
- setting the first value in Multiselect
- per-grid subview storage to avoid clearing it for nested subviews
- export DataTable columns with templates that require a column config
- calculate Button autowidth on resize
- bug with hideColumn and header colspan
- tag navigation and disabled Checkbox
- resizing of DataTable subviews works one way 
- masterCheckbox with dynamically loaded data
- destructor() call for a modal Window
- download and upload in File Manager
- styling of DataTable icons
- undo and changeId
- calling changeId for same IDs
- hide/show series in a Chart with no legend
- scrolling of a DataTable with spans
- corrected height of Calendar icons
- focus in forms with complex  structure
- German locale
