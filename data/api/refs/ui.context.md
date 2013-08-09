ui.context 
=============


{{memo A pop-up window displayed on firing the 'contextMenu' event (mouse right-clicks). }}

The component presents a plain window that can contain any content. Check [context](desktop__context.md) documentation for more detailed description.

### Constructor

~~~js
	var context = webix.ui({
		view:"context", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_context({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/contexthelper.md">ContextHelper</a>, <a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.context_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.context_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.context_attachto.md - attaches a context menu to webix component
- api/link/ui.context_bind.md - binds components
- api/link/ui.context_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.context_callevent.md - calls an inner event
- api/link/ui.context_close.md - removes a window
- api/link/ui.context_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.context_destructor.md - destructs the calling object
- api/link/ui.context_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.context_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.context_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.context_getbody.md - gets the ui view of the window body
- api/link/ui.context_getchildviews.md - returns child views of the calling component
- api/link/ui.context_getcontext.md - gets the master area for contextmenu
- api/link/ui.context_gethead.md - gets the ui view of the window header
- api/link/ui.context_getnode.md - returns the main HTML container for the calling object
- api/link/ui.context_getparentview.md - returns the parent view of the component
- api/link/ui.context_gettopparentview.md - returns top parent view
- api/link/ui.context_hasevent.md - checks whether the component has the specified event
- api/link/ui.context_hide.md - hides the view
- api/link/ui.context_isenabled.md - checks whether the view is enabled
- api/link/ui.context_isvisible.md - checks whether the view is visible
- api/link/ui.context_mapevent.md - routes events from one object to another
- api/link/ui.context_resize.md - adjusts the view to a new size
- api/link/ui.context_resizechildren.md - resizes all children of the calling component
- api/link/ui.context_setposition.md - sets window's position
- api/link/ui.context_show.md - makes the component visible
- api/link/ui.context_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/link/ui.context_onbeforeshow_event.md - fires the moment context menu is called
- api/link/ui.context_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.context_onhide_event.md - fires when window is hidden
- api/link/ui.context_onshow_event.md - fires when window is shown
}}


Properties
----------

{{links
- api/link/ui.context_animate_config.md - defines or disables view change animation.
- api/link/ui.context_autofit_config.md - adjusts window size to the size of an HTML node	it is initiated in
- api/link/ui.context_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.context_body_config.md - the content of window body: template or view
- api/link/ui.context_borderless_config.md - used to hide the component borders
- api/link/ui.context_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.context_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.context_disabled_config.md - disables item
- api/link/ui.context_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.context_head_config.md - sets the view header
- api/link/ui.context_headheight_config.md - defines the header height (43 by default)
- api/link/ui.context_height_config.md - sets the height of the component
- api/link/ui.context_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.context_id_config.md - the component ID
- api/link/ui.context_left_config.md - the left offset of the window
- api/link/ui.context_master_config.md - the area for which context object in inited
- api/link/ui.context_maxheight_config.md - sets the maximum height for the view
- api/link/ui.context_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.context_minheight_config.md - sets the minimal height for the view
- api/link/ui.context_minwidth_config.md - sets the minimal width for the view
- api/link/ui.context_modal_config.md - switches window modality
- api/link/ui.context_move_config.md - makes view movable
- api/link/ui.context_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.context_padding_config.md - sets paddings of the chart content
- api/link/ui.context_position_config.md - sets position of the window relative to the the screen
- api/link/ui.context_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.context_top_config.md - the top offset of a window
- api/link/ui.context_width_config.md - sets the width of the component
- api/link/ui.context_zindex_config.md - stack order of the component
}}




Other
-----

{{links
- api/link/ui.context_$getsize_other.md - returns the current size of the component
- api/link/ui.context_$height_other.md - current height of the view
- api/link/ui.context_$setsize_other.md - sets the component size
- api/link/ui.context_$skin_other.md - method, which will be called when skin defined
- api/link/ui.context_$view_other.md - reference to top html element of the view
- api/link/ui.context_$width_other.md - current width of the view
- api/link/ui.context_config_other.md - all options from initial component configuration
- api/link/ui.context_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.context_methods.md
- api/refs/ui.context_props.md
- api/refs/ui.context_events.md
- api/refs/ui.context_others.md

