ui.resizearea 
=============


{{memo Visualization and handling resize movements. }}

Not purposed for direct initialization. Check desktop/resizearea.md article for more detailed description.



<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/settings.md">Settings</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.resizearea_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.resizearea_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.resizearea_callevent.md - calls an inner event
- api/link/ui.resizearea_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.resizearea_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.resizearea_hasevent.md - checks whether the component has the specified event
- api/link/ui.resizearea_mapevent.md - routes events from one object to another
- api/link/ui.resizearea_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.resizearea_onresize_event.md - occures when the user moves the 'resize' cursor
- api/ui.resizearea_onresizeend_event.md - occures when the user ends moving the 'resize' cursor (releases the mouse button)
}}


<div class='h2'>Properties</div>

{{api
- api/ui.resizearea_border_config.md - enables border around resize area
- api/ui.resizearea_container_config.md - html element to which area will be attached
- api/ui.resizearea_cursor_config.md - which cursor to show during resize
- api/ui.resizearea_dir_config.md - sets the direction of resizing
- api/ui.resizearea_eventpos_config.md - the top (vertical resizing) or left (horizontal resizing) absolute event position
- api/ui.resizearea_height_config.md - vertical size of resizing area
- api/link/ui.resizearea_id_config.md - the component ID
- api/link/ui.resizearea_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.resizearea_start_config.md - sets the top (vertical resizing) or left (horizontal resizing) initial relative position of the 'resize' marker
- api/ui.resizearea_width_config.md - horizontal size of resizing area
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.resizearea_config_other.md - all options from initial component configuration
- api/link/ui.resizearea_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.resizearea_methods.md
- api/refs/ui.resizearea_props.md
- api/refs/ui.resizearea_events.md
- api/refs/ui.resizearea_others.md

