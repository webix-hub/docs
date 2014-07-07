TreeAPI 
=============


{{memo Implements common API for tree like components. }}




<div class='h2'>Methods</div>

{{api
- api/treeapi_close.md - closes the branch with the specified id
- api/treeapi_closeall.md - closes all branches in the tree
- api/treeapi_getopenitems.md - returns ids of the opened branches
- api/treeapi_getstate.md - returns the current state of the view
- api/treeapi_isbranchopen.md - checks whether the specified branch opened or closed
- api/treeapi_open.md - opens the branch with the specified id
- api/treeapi_openall.md - opens all branches in the tree
- api/treeapi_setstate.md - restores the specified state
}}


<div class='h2'>Events</div>


{{api
- api/treeapi_onafterclose_event.md - fires after the branch has been closed
- api/treeapi_onafteropen_event.md - fires after the branch has been opened
- api/treeapi_onbeforeclose_event.md - fires the moment you attempt to close the tree branch
- api/treeapi_onbeforeopen_event.md - fires the moment you attempt to open the tree branch
- api/treeapi_onitemcheck_event.md - called when checkbox inside the tree item was checked
}}


<div class='h2'>Properties</div>

{{api
- api/treeapi_threestate_config.md - enabled three-state checkboxes
}}





@index:
- api/refs/treeapi_methods.md
- api/refs/treeapi_props.md
- api/refs/treeapi_events.md

