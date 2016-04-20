ui.spreadsheet 
=============


{{memo A component for organizing, working with and storing data in tabular form. }}

Webix SpreadSheet allows creating tables online, while keeping data locally. It's possible to import a ready table into
an Excel document or export a table from Excel. The tables' appearance can be easily changed: you can customize the styles of colors, fonts and borders, set the necessary vertical and horizontal aligns, merge cells, rows and columns.

The component provides a built-in functionality for mathematical expressions and supports resizing and localization of tables.

Check desktop/spreadsheet.md documentation for more information.

###Constructor 

~~~js
var spreadsheet = webix.ui({
	view:"spreadsheet",
	data: base_data
});
~~~

### Where to start

- [Overview of the SpreadSheet Widget](desktop/spreadsheet.md)
- [Samples](http://docs.webix.com/samples/65_spreadsheet/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/idspace.md">IdSpace</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.spreadsheet_addview.md - add new view to layout-like component
- api/link/ui.spreadsheet_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.spreadsheet_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.spreadsheet_bind.md - binds components
- api/link/ui.spreadsheet_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.spreadsheet_callevent.md - calls an inner event
- api/ui.spreadsheet_combinecells.md - merges several adjacent cells
- api/link/ui.spreadsheet_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.spreadsheet_destructor.md - destructs the calling object
- api/link/ui.spreadsheet_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.spreadsheet_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.spreadsheet_eachselectedcell.md - iterates over all selected cells in the table
- api/link/ui.spreadsheet_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.spreadsheet_getcellvalue.md - returns the value of the cell
- api/link/ui.spreadsheet_getchildviews.md - returns child views of the calling component
- api/ui.spreadsheet_getcolumn.md - returns the configuration object of the specified SpreadSheet column
- api/link/ui.spreadsheet_getformview.md - returns master form for the input
- api/link/ui.spreadsheet_getnode.md - returns the main HTML container for the calling object
- api/link/ui.spreadsheet_getparentview.md - returns the parent view of the component
- api/ui.spreadsheet_getrow.md - returns the row data by its id
- api/ui.spreadsheet_getselectedid.md - returns the ids of all cells in the select area
- api/ui.spreadsheet_getstyle.md - returns the style set for the cell
- api/link/ui.spreadsheet_gettopparentview.md - returns top parent view
- api/link/ui.spreadsheet_hasevent.md - checks whether the component has the specified event
- api/link/ui.spreadsheet_hide.md - hides the view
- api/link/ui.spreadsheet_index.md - returns the cell index in the layout collection
- api/link/ui.spreadsheet_innerid.md - returns the unique inner ID of an item
- api/link/ui.spreadsheet_isenabled.md - checks whether the view is enabled
- api/link/ui.spreadsheet_isvisible.md - checks whether the view is visible
- api/link/ui.spreadsheet_load.md - loads data from an external data source.
- api/link/ui.spreadsheet_mapevent.md - routes events from one object to another
- api/link/ui.spreadsheet_parse.md - loads data to the component from an inline data source
- api/link/ui.spreadsheet_reconstruct.md - rebuilds the layout
- api/ui.spreadsheet_redo.md - remakes the action that was reverted by the undo action
- api/ui.spreadsheet_refresh.md - repaints spreadsheet
- api/link/ui.spreadsheet_removeview.md - removes view from layout-like component
- api/ui.spreadsheet_reset.md - resets the SpreadSheet settings to the initial state
- api/link/ui.spreadsheet_resize.md - adjusts the view to a new size
- api/link/ui.spreadsheet_resizechildren.md - resizes all children of the calling component
- api/ui.spreadsheet_savecell.md - saves changes made in the cell
- api/ui.spreadsheet_serialize.md - serializes SpreadSheet data to a JSON object
- api/ui.spreadsheet_setcellvalue.md - sets a value for the cell
- api/ui.spreadsheet_setstyle.md - sets a style for a cell
- api/link/ui.spreadsheet_show.md - makes the component visible
- api/link/ui.spreadsheet_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/ui.spreadsheet_splitcell.md - splits the cells' span that was made by merging several cells
- api/link/ui.spreadsheet_ui.md - allows creating new ui, the id of which will be locked in the parent id space
- api/link/ui.spreadsheet_unbind.md - breaks "bind" link
- api/link/ui.spreadsheet_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/ui.spreadsheet_undo.md - undo operation in SpreadSheet
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.spreadsheet_onafterload_event.md - fires after data loading is complete
- api/ui.spreadsheet_onafterselect_event.md - fires after a cell has been selected
- api/link/ui.spreadsheet_onbeforeload_event.md - occurs immediately before data loading has been started
- api/ui.spreadsheet_onbeforespan_event.md - fires before cells' are merged
- api/ui.spreadsheet_onbeforesplit_event.md - fires before merged cells are splitted
- api/link/ui.spreadsheet_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.spreadsheet_oncellchange_event.md - fires when a cell is changed
- api/ui.spreadsheet_oncomponentinit_event.md - fires when spreadsheet is initialized
- api/ui.spreadsheet_ondataparse_event.md - fires when data parsing is started
- api/ui.spreadsheet_ondataserialize_event.md - fires when serialization of data is started
- api/link/ui.spreadsheet_ondestruct_event.md - occurs when component destroyed
- api/link/ui.spreadsheet_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/ui.spreadsheet_onreset_event.md - fires when the settings of SpreadSheet are reset to the initial state
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.spreadsheet_animate_config.md - defines or disables view change animation.
- api/link/ui.spreadsheet_borderless_config.md - used to hide the component borders
- api/ui.spreadsheet_buttons_config.md - contains the names of buttons blocks with arrays of buttons' names
- api/link/ui.spreadsheet_cols_config.md - array of views objects arranged horizontally
- api/ui.spreadsheet_columncount_config.md - the number of columns in the SpreadSheet
- api/link/ui.spreadsheet_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.spreadsheet_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.spreadsheet_data_config.md - JavaScript array containing data for the component
- api/link/ui.spreadsheet_datatype_config.md - the type of loaded data
- api/link/ui.spreadsheet_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.spreadsheet_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.spreadsheet_height_config.md - sets the height of the component
- api/link/ui.spreadsheet_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.spreadsheet_id_config.md - the component ID
- api/link/ui.spreadsheet_isolate_config.md - masks IDs of all inner element
- api/ui.spreadsheet_liveeditor_config.md - 
- api/link/ui.spreadsheet_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/ui.spreadsheet_math_config.md - enables the math functionality in the spreadsheet
- api/link/ui.spreadsheet_maxheight_config.md - sets the maximum height for the view
- api/link/ui.spreadsheet_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.spreadsheet_minheight_config.md - sets the minimal height for the view
- api/link/ui.spreadsheet_minwidth_config.md - sets the minimal width for the view
- api/link/ui.spreadsheet_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.spreadsheet_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.spreadsheet_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.spreadsheet_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/ui.spreadsheet_readonly_config.md - sets readonly mode for SpreadSheet
- api/ui.spreadsheet_resizecell_config.md - defines whether cells of spreadsheet will be resized
- api/link/ui.spreadsheet_responsive_config.md - enables responsive mode for horizontal layout
- api/ui.spreadsheet_rowcount_config.md - the number of rows in the SpreadSheet
- api/link/ui.spreadsheet_rows_config.md - array of views objects arranged vertically
- api/ui.spreadsheet_subbar_config.md - adds a view between the toolbar and the datatable
- api/link/ui.spreadsheet_type_config.md - defines the layout borders
- api/link/ui.spreadsheet_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.spreadsheet_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.spreadsheet_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.spreadsheet_$$_other.md - locates sub-item by id
- api/link/ui.spreadsheet_$getsize_other.md - returns the current size of the component
- api/link/ui.spreadsheet_$height_other.md - current height of the view
- api/link/ui.spreadsheet_$setsize_other.md - sets the component size
- api/link/ui.spreadsheet_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.spreadsheet_$view_other.md - reference to top html element of the view
- api/link/ui.spreadsheet_$width_other.md - current width of the view
- api/link/ui.spreadsheet_config_other.md - all options from initial component configuration
- api/link/ui.spreadsheet_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.spreadsheet_methods.md
- api/refs/ui.spreadsheet_props.md
- api/refs/ui.spreadsheet_events.md
- api/refs/ui.spreadsheet_others.md

