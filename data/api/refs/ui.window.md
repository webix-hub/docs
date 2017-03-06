ui.window 
=============


{{memo A movable popup window. }}

The window consists of the header and the body, can be modal or modaless. The window body can contain any content. The header is set by a template. Check [window](desktop/window.md) documentation for more detailed description.

### Constructor

~~~js
var window = webix.ui({
    view:"window",
    id:"my_win",
    head:"My Window",
  	width: 200,
  	height: 200,
    body:{
        template:"Some text"
    }
}).show();
~~~

### Where to start

- [Overview of the Window Widget](desktop/window.md)
- [Samples](http://docs.webix.com/samples/10_window/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.window_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.window_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.window_bind.md - binds components
- api/link/ui.window_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.window_callevent.md - calls an inner event
- api/ui.window_close.md - removes a window
- api/link/ui.window_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.window_destructor.md - destructs the calling object
- api/link/ui.window_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.window_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.window_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.window_getbody.md - gets the UI view of the window body
- api/link/ui.window_getchildviews.md - returns child views of the calling component
- api/link/ui.window_getformview.md - returns master form for the input
- api/ui.window_gethead.md - gets the ui view of the window header
- api/link/ui.window_getnode.md - returns the main HTML container for the calling object
- api/link/ui.window_getparentview.md - returns the parent view of the component
- api/link/ui.window_gettopparentview.md - returns top parent view
- api/link/ui.window_hasevent.md - checks whether the component has the specified event
- api/link/ui.window_hide.md - hides the view
- api/link/ui.window_isenabled.md - checks whether the view is enabled
- api/link/ui.window_isvisible.md - checks whether the view is visible
- api/link/ui.window_mapevent.md - routes events from one object to another
- api/link/ui.window_resize.md - adjusts the view to a new size
- api/ui.window_resizechildren.md - resizes all children of the calling component
- api/ui.window_setposition.md - sets window's position
- api/link/ui.window_show.md - makes the component visible
- api/link/ui.window_unbind.md - breaks "bind" link
- api/link/ui.window_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.window_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/ui.window_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.window_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.window_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.window_ondestruct_event.md - occurs when component destroyed
- api/link/ui.window_onfocus_event.md - fires when a view gets focus
- api/ui.window_onhide_event.md - fires when window is hidden
- api/link/ui.window_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.window_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/ui.window_onshow_event.md - fires when window is shown
- api/link/ui.window_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.window_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.window_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.window_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.window_ontouchmove_event.md - occurs during touch movement
- api/link/ui.window_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.window_onviewmove_event.md - fires while view is moving
- api/link/ui.window_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.window_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.window_animate_config.md - defines or disables view change animation.
- api/ui.window_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/ui.window_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/ui.window_body_config.md - the content of window body: template or view
- api/link/ui.window_borderless_config.md - used to hide the component borders
- api/link/ui.window_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.window_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.window_disabled_config.md - indicates whether an item is enabled
- api/ui.window_fullscreen_config.md - renders window in fullscreen mode
- api/link/ui.window_gravity_config.md - sets the view gravity (1 by default)
- api/ui.window_head_config.md - sets the view header
- api/ui.window_headheight_config.md - defines the header height (43 by default)
- api/link/ui.window_height_config.md - sets the height of the component
- api/link/ui.window_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.window_id_config.md - the component ID
- api/ui.window_left_config.md - the left offset of the window
- api/link/ui.window_maxheight_config.md - sets the maximum height for the view
- api/link/ui.window_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.window_minheight_config.md - sets the minimal height for the view
- api/link/ui.window_minwidth_config.md - sets the minimal width for the view
- api/ui.window_modal_config.md - switches window modality
- api/link/ui.window_move_config.md - makes view movable
- api/link/ui.window_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.window_padding_config.md - sets paddings of the chart content
- api/ui.window_position_config.md - sets position of the window relative to the the screen
- api/ui.window_relative_config.md - positions a popup window relative to the component it's connected with
- api/ui.window_resize_config.md - enables/disables window resizing
- api/ui.window_tofront_config.md - places window above other windows on clicking it
- api/ui.window_top_config.md - the top offset of a window
- api/link/ui.window_width_config.md - sets the width of the component
- api/link/ui.window_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.window_$getsize_other.md - returns the current size of the component
- api/link/ui.window_$height_other.md - current height of the view
- api/link/ui.window_$scope_other.md - scope for resolving event and method names
- api/link/ui.window_$setsize_other.md - sets the component size
- api/link/ui.window_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.window_$view_other.md - reference to top html element of the view
- api/link/ui.window_$width_other.md - current width of the view
- api/link/ui.window_config_other.md - all options from initial component configuration
- api/link/ui.window_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.window_methods.md
- api/refs/ui.window_props.md
- api/refs/ui.window_events.md
- api/refs/ui.window_others.md

