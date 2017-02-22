ui.filemanager 
=============


{{memo A handy widget for navigation and manipulation of files and folders.. }}

File Manager is a powerful tool for working with different hierarchical data. It allows easily navigating through items, moving them, performing CRUD operations and uploading new elements.

Check desktop/file_manager.md documentation for more information.

###Constructor 

~~~js
var filemanager = webix.ui({
    view:"filemanager",
    id:"files"
});
$$("files").load("files.php");
~~~

### Where to start

- [Overview of the File Manager Widget](desktop/file_manager.md)
- [Samples](http://docs.webix.com/samples/64_file_manager/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/progressbar.md">ProgressBar</a>, <a href="api/refs/idspace.md">IdSpace</a>, <a href="api/refs/ui.layout.md">ui.layout</a>, <a href="api/refs/ui.baselayout.md">ui.baselayout</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/treedatamove.md">TreeDataMove</a>, <a href="api/refs/treedataloader.md">TreeDataLoader</a>, <a href="api/refs/treestore.md">TreeStore</a>, <a href="api/refs/datastore.md">DataStore</a>, <a href="api/refs/dataloader.md">DataLoader</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.filemanager_add.md - adds an item to the store
- api/link/ui.filemanager_addview.md - add new view to layout-like component
- api/link/ui.filemanager_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.filemanager_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.filemanager_bind.md - binds components
- api/link/ui.filemanager_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.filemanager_callevent.md - calls an inner event
- api/link/ui.filemanager_clearall.md - removes all items from the component
- api/link/ui.filemanager_copy.md - makes a copy of an item
- api/ui.filemanager_copyfile.md - copies a selected file/folder
- api/link/ui.filemanager_count.md - returns the number of currently visible items
- api/ui.filemanager_createfolder.md - creates a new folder
- api/link/ui.filemanager_define.md - redefines a single configuration property (or a hash of properties)
- api/ui.filemanager_deletefile.md - deletes items by their ids
- api/link/ui.filemanager_destructor.md - destroy datastore
- api/link/ui.filemanager_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.filemanager_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/ui.filemanager_download.md - downloads a selected file
- api/ui.filemanager_editfile.md - opens editor for a certain item in the active view (Tree or Files view)
- api/link/ui.filemanager_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.filemanager_exists.md - checks whether an item with the specified id exists
- api/link/ui.filemanager_filter.md - filters the component
- api/link/ui.filemanager_find.md - returns rows that match the criterion
- api/ui.filemanager_getactive.md - gets ids of active items
- api/ui.filemanager_getactiveview.md - gets the reference to the active view (Tree or Files view)
- api/link/ui.filemanager_getbranchindex.md - gets index of the node in a specific branch
- api/link/ui.filemanager_getchildviews.md - returns child views of the calling component
- api/ui.filemanager_getcurrentfolder.md - gets the name of the folder selected in Tree
- api/link/ui.filemanager_getfirstchildid.md - gets the ID of the first child of the specified branch
- api/link/ui.filemanager_getfirstid.md - returns the ID of the first item
- api/link/ui.filemanager_getformview.md - returns master form for the input
- api/link/ui.filemanager_getidbyindex.md - returns the id of the item with the specified index
- api/link/ui.filemanager_getindexbyid.md - returns the index of the item with the specified id
- api/link/ui.filemanager_getitem.md - gets the object of the data item with the specified id
- api/link/ui.filemanager_getlastid.md - returns the id of the last item
- api/ui.filemanager_getmenu.md - gets the popup menu object
- api/link/ui.filemanager_getnextid.md - returns the ID of an item which is positioned the specified step after the specified item
- api/link/ui.filemanager_getnextsiblingid.md - returns the id of the next sibling of the specified node
- api/link/ui.filemanager_getnode.md - returns the main HTML container for the calling object
- api/link/ui.filemanager_getparentid.md - get the ID of the parent node of the specified item
- api/link/ui.filemanager_getparentview.md - returns the parent view of the component
- api/ui.filemanager_getpath.md - gets an array of folders' ids in a path
- api/ui.filemanager_getpathnames.md - gets an array of folders' names in a path
- api/link/ui.filemanager_getprevid.md - returns the ID of an item which is positioned the specified step before the specified item
- api/link/ui.filemanager_getprevsiblingid.md - returns the id of the previous sibling of the specified node
- api/ui.filemanager_getsearchdata.md - gets an array of items (files, folders) that contain text in their names
- api/ui.filemanager_getselectedfile.md - gets a string or an array with file (folder) name(s) selected in the "table" view
- api/link/ui.filemanager_gettopparentview.md - returns top parent view
- api/ui.filemanager_getuploader.md - gets the uploader object
- api/ui.filemanager_goback.md - goes back in the navigation history
- api/ui.filemanager_goforward.md - goes forward in the navigation history
- api/link/ui.filemanager_hasevent.md - checks whether the component has the specified event
- api/link/ui.filemanager_hide.md - hides the view
- api/link/ui.filemanager_hideprogress.md - hides a progress bar/icon
- api/ui.filemanager_hidesearchresults.md - hides search results
- api/ui.filemanager_hidetree.md - hides the Tree panel
- api/link/ui.filemanager_index.md - returns the cell index in the layout collection
- api/link/ui.filemanager_innerid.md - returns the inner ID of an item by its public (real) ID
- api/link/ui.filemanager_isbranch.md - checks whether the node has any children
- api/link/ui.filemanager_isenabled.md - checks whether the view is enabled
- api/link/ui.filemanager_isvisible.md - checks whether the view is visible
- api/ui.filemanager_levelup.md - selects the parent folder
- api/link/ui.filemanager_load.md - loads data from an external data source.
- api/link/ui.filemanager_loadbranch.md - loads data to the specified branch, as direct children of the node with the id provided
- api/link/ui.filemanager_loadnext.md - sends a request to load the specified number of records to the end of the clientside dataset or to the specified position
- api/link/ui.filemanager_mapevent.md - routes events from one object to another
- api/ui.filemanager_markcopy.md - preselectes files/folders for the Copy operation
- api/ui.filemanager_markcut.md - preselectes files/folders for the Move operation
- api/link/ui.filemanager_move.md - moves the specified item to the new position
- api/ui.filemanager_movefile.md - moves a selected file/folder
- api/ui.filemanager_openfolders.md - opens folders in case of dynamic loading
- api/link/ui.filemanager_parse.md - loads data to the component from an inline data source
- api/ui.filemanager_pastefile.md - pastes files/folders that were selected for copying or moving
- api/link/ui.filemanager_reconstruct.md - rebuilds the layout
- api/link/ui.filemanager_refresh.md - repaints the whole view or a certain item
- api/link/ui.filemanager_remove.md - removes the specified item/items from datastore
- api/link/ui.filemanager_removeview.md - removes view from layout-like component
- api/ui.filemanager_renamefile.md - renames a folder/a file
- api/link/ui.filemanager_resize.md - adjusts the view to a new size
- api/link/ui.filemanager_resizechildren.md - resizes all children of the calling component
- api/link/ui.filemanager_serialize.md - serializes data to a JSON object
- api/ui.filemanager_setpath.md - selects a certain folder and sets path values for it
- api/link/ui.filemanager_show.md - makes the component visible
- api/link/ui.filemanager_showbatch.md - makes visible those elements which parameter 'batch' is set to the specified name
- api/link/ui.filemanager_showprogress.md - displays a progress bar/ progress icon
- api/ui.filemanager_showsearchresults.md - searches text and displays results on the screen
- api/ui.filemanager_showtree.md - shows the Tree panel
- api/link/ui.filemanager_sort.md - sorts datastore
- api/link/ui.filemanager_sync.md - allows syncing two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.filemanager_ui.md - allows creating new ui, the id of which will be locked in the parent id space
- api/link/ui.filemanager_unbind.md - breaks "bind" link
- api/link/ui.filemanager_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.filemanager_updateitem.md - updates the data item with new properties
- api/ui.filemanager_uploadfile.md - opens the file upload dialog
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.filemanager_onafteradd_event.md - fires after adding item to datastore
- api/ui.filemanager_onafterback_event.md - fires after the Back button has been clicked
- api/link/ui.filemanager_onafterdelete_event.md - fires after item deleting
- api/ui.filemanager_onafterdrop_event.md - fires after drag-n-drop has been finished
- api/ui.filemanager_onafterdynparse_event.md - fires after the data loaded from the server-side script will be parsed into the widget
- api/ui.filemanager_onaftereditstop_event.md - fires after the editor is closed
- api/ui.filemanager_onafterhidetree_event.md - fires after the tree has been hidden
- api/ui.filemanager_onafterleveldown_event.md - fires after selection has been moved to the child folder
- api/ui.filemanager_onafterlevelup_event.md - fires after the [LevelUp](file_manager/configuration.md#levelup) button has been clicked (selection has been moved to the parent folder)
- api/link/ui.filemanager_onafterload_event.md - fires after data loading is complete
- api/ui.filemanager_onaftermenu_event.md - fires after the Actions menu is opened on clicking [the Menu button](file_manager/configuration.md#menubutton)
- api/ui.filemanager_onaftermodechange_event.md - fires after the mode of viewing files has been changed on clicking [the Modes button](file_manager/configuration.md#modes)
- api/ui.filemanager_onafterpathclick_event.md - fires after the folders' path has been clicked
- api/ui.filemanager_onafterrun_event.md - fires after a selected file has been downloaded
- api/ui.filemanager_onaftersearch_event.md - fires after search is finished
- api/ui.filemanager_onaftershowtree_event.md - fires after the tree has been shown
- api/link/ui.filemanager_onaftersort_event.md - fires after sorting dataset
- api/link/ui.filemanager_onbeforeadd_event.md - fires before adding item to datastore
- api/ui.filemanager_onbeforeback_event.md - fires before the Back button has been clicked
- api/ui.filemanager_onbeforecreatefolder_event.md - fires before a new folder has been created
- api/link/ui.filemanager_onbeforedelete_event.md - fires before item deleting
- api/ui.filemanager_onbeforedeletefile_event.md - fires when the Delete action is chosen in the popup menu
- api/ui.filemanager_onbeforedrag_event.md - fires before drag-n-drop has started
- api/ui.filemanager_onbeforedragin_event.md - fires before a dragged item is moved over the droppable area
- api/ui.filemanager_onbeforedrop_event.md - fires before a dragged item is released over the droppable area
- api/ui.filemanager_onbeforedynload_event.md - fires before a request for data loading is sent to the server-side script
- api/ui.filemanager_onbeforedynparse_event.md - fires before the data loaded from the server-side script will be parsed into the widget
- api/ui.filemanager_onbeforeeditfile_event.md - fires when the Rename action is chosen in the popup menu
- api/ui.filemanager_onbeforeeditstop_event.md - fires before editing is finished
- api/ui.filemanager_onbeforefileupload_event.md - fires on the Upload action click
- api/ui.filemanager_onbeforehidetree_event.md - fires before the tree is hidden
- api/ui.filemanager_onbeforeleveldown_event.md - fires before selection is moved to the child folder
- api/ui.filemanager_onbeforelevelup_event.md - fires before the [LevelUp](file_manager/configuration.md#levelup) button is clicked (before selection is moved to the parent folder)
- api/link/ui.filemanager_onbeforeload_event.md - occurs immediately before data loading has been started
- api/ui.filemanager_onbeforemarkcopy_event.md - fires before an item has been marked for copying
- api/ui.filemanager_onbeforemarkcut_event.md - fires before an item has been marked for cutting
- api/ui.filemanager_onbeforemenu_event.md - fires before the Actions menu is opened on clicking [the Menu button](file_manager/configuration.md#menubutton)
- api/ui.filemanager_onbeforemodechange_event.md - fires before the mode of viewing files is changed on clicking [the Modes button](file_manager/configuration.md#modes)
- api/ui.filemanager_onbeforepastefile_event.md - fires when the Paste action is chosen in the popup menu
- api/ui.filemanager_onbeforerequest_event.md - fires before any request is sent to the server-side script
- api/ui.filemanager_onbeforerun_event.md - fires before a selected file is downloaded
- api/ui.filemanager_onbeforesearch_event.md - fires before search is started
- api/ui.filemanager_onbeforesearchrequest_event.md - fires before a search request is sent to the server-side script (see details [here](file_manager/loading_data.md#serversidesearchingforcontent))
- api/ui.filemanager_onbeforeshowtree_event.md - fires before the tree is expanded
- api/link/ui.filemanager_onbeforesort_event.md - fires before sorting dataset
- api/link/ui.filemanager_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/ui.filemanager_oncomponentinit_event.md - fires when File Manager is initialized
- api/ui.filemanager_oncopyerror_event.md - fires if an error occurred during a file/folder copying
- api/link/ui.filemanager_ondatarequest_event.md - fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading
- api/link/ui.filemanager_ondataupdate_event.md - fires when data item is in update process
- api/link/ui.filemanager_ondestruct_event.md - occurs when component destroyed
- api/ui.filemanager_ondynloaderror_event.md - fires if a request to the server-side script returns an error
- api/ui.filemanager_onerrorresponse_event.md - fires if an error has occured during some operation
- api/ui.filemanager_onfolderselect_event.md - fires when a folder is selected in the Tree view
- api/ui.filemanager_onhidesearchresults_event.md - fires when search results are hidden
- api/ui.filemanager_onhistorychange_event.md - fires when path in the [Path view](file_manager/configuration.md#filemanagerlayout) changes
- api/ui.filemanager_onitemrename_event.md - fires when an item is renamed
- api/ui.filemanager_onitemselect_event.md - fires when a folder is selected in the "Files" or "Table" views
- api/link/ui.filemanager_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/ui.filemanager_onmoveerror_event.md - fires if an error occurred during a file/folder moving to another folder
- api/ui.filemanager_onpathcomplete_event.md - fires when a path to a folder is complete
- api/ui.filemanager_onpathlevel_event.md - ?
- api/ui.filemanager_onshowsearchresults_event.md - fires when search results are displayed
- api/ui.filemanager_onsuccessresponse_event.md - fires on successful save response
- api/ui.filemanager_onviewinit_event.md - fires during the initialization of an object with the mode configuration
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.filemanager_animate_config.md - defines or disables view change animation.
- api/link/ui.filemanager_borderless_config.md - used to hide the component borders
- api/link/ui.filemanager_cols_config.md - array of views objects arranged horizontally
- api/link/ui.filemanager_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.filemanager_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.filemanager_data_config.md - JavaScript array containing data for the component
- api/link/ui.filemanager_datathrottle_config.md - sets the polling interval (the time period between the completion of a network request and the next request for data)
- api/link/ui.filemanager_datatype_config.md - the type of loaded data
- api/link/ui.filemanager_disabled_config.md - indicates whether an item is enabled or not
- api/ui.filemanager_disabledhistory_config.md - disables the tracking history ("false" by default)
- api/link/ui.filemanager_filtermode_config.md - defines the pattern for tree item filtering
- api/link/ui.filemanager_gravity_config.md - sets the view gravity (1 by default)
- api/ui.filemanager_handlers_config.md - specifies the collection of server scripts for action handling
- api/link/ui.filemanager_height_config.md - sets the height of the component
- api/link/ui.filemanager_hidden_config.md - defines whether the view will be hidden initially
- api/ui.filemanager_icons_config.md - defines icons for File Manager
- api/link/ui.filemanager_id_config.md - the component ID
- api/link/ui.filemanager_isolate_config.md - masks IDs of all inner elements
- api/link/ui.filemanager_margin_config.md - defines the space around elements (applies the specified value to all elements)
- api/link/ui.filemanager_maxheight_config.md - sets the maximum height for the view
- api/link/ui.filemanager_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.filemanager_minheight_config.md - sets the minimal height for the view
- api/link/ui.filemanager_minwidth_config.md - sets the minimal width for the view
- api/ui.filemanager_mode_config.md - defines the id of the initially selected mode ("table" by default)
- api/ui.filemanager_modes_config.md - specifies an array of modes in the File view
- api/ui.filemanager_nofilecache_config.md - defines whether files' caching is enabled
- api/link/ui.filemanager_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.filemanager_padding_config.md - defines the space between the element borders and content (applies the specified value to all sides).
- api/link/ui.filemanager_paddingx_config.md - sets the right and left padding (applies the specified value to both sides)
- api/link/ui.filemanager_paddingy_config.md - sets the top and bottom padding (applies the specified value to both sides)
- api/ui.filemanager_readonly_config.md - sets File Manager into readonly mode ("false" by default)
- api/link/ui.filemanager_ready_config.md - event handler called just after the component has been completely initialized
- api/link/ui.filemanager_removemissed_config.md - defines how to treat items in case of reloading
- api/link/ui.filemanager_responsive_config.md - enables responsive mode for horizontal layout
- api/link/ui.filemanager_rows_config.md - array of views objects arranged vertically
- api/link/ui.filemanager_save_config.md - defines URLs for data saving
- api/link/ui.filemanager_scheme_config.md - defines schemes for data processing
- api/ui.filemanager_structure_config.md - sets the configuration of File Manager views
- api/ui.filemanager_templatecreate_config.md - defines the template for a newly created folder
- api/ui.filemanager_templatedate_config.md - defines a template applied for the format of folder/file's date of modification
- api/ui.filemanager_templateicon_config.md - a customizable template for icons in "Files" and "Table" view modes
- api/ui.filemanager_templatename_config.md - defines a template applied for the folder/file's name
- api/ui.filemanager_templatesize_config.md - defines the template applied for the file size
- api/ui.filemanager_templatetype_config.md - specifies the template applied for the type of a file
- api/link/ui.filemanager_type_config.md - defines the layout borders
- api/ui.filemanager_uploadprogress_config.md - defines an object with configuration of progress bar that appears during the upload
- api/link/ui.filemanager_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.filemanager_visiblebatch_config.md - sets the batch that will be shown initially
- api/link/ui.filemanager_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.filemanager_$$_other.md - locates sub-item by id
- api/link/ui.filemanager_$dropallow_other.md - can be redefined, if you need custom drop rules
- api/link/ui.filemanager_$getsize_other.md - returns the current size of the component
- api/link/ui.filemanager_$height_other.md - current height of the view
- api/link/ui.filemanager_$setsize_other.md - sets the component size
- api/link/ui.filemanager_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.filemanager_$view_other.md - reference to top html element of the view
- api/link/ui.filemanager_$width_other.md - current width of the view
- api/link/ui.filemanager_config_other.md - all options from initial component configuration
- api/link/ui.filemanager_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.filemanager_waitdata_other.md - eventual result of an asynchronous operation ('promise' object) for the loaded data
}}


@index:
- api/refs/ui.filemanager_methods.md
- api/refs/ui.filemanager_props.md
- api/refs/ui.filemanager_events.md
- api/refs/ui.filemanager_others.md

