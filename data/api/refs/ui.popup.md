ui.popup 
=============


{{memo A static popup window. }}

The window can contain any content, be modal or modeless. The main use case - displaying popup content on some action (e.g. click). Check [popup](desktop/popup.md) documentation for more detailed description.

### Constructor

~~~js
var popup = webix.ui({
	view:"popup",
    id:"my_popup",
  	height:250,
  	width:300,
    body:{
        template:"Some text" 
    }
}).show();
~~~

### Where to start

- [Overview of the Popup Widget](desktop/popup.md)
- [Samples](http://docs.webix.com/samples/10_window/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.popup_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.popup_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.popup_bind.md - binds components
- api/link/ui.popup_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.popup_callevent.md - calls an inner event
- api/link/ui.popup_close.md - removes a window
- api/link/ui.popup_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.popup_destructor.md - destructs the calling object
- api/link/ui.popup_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.popup_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.popup_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.popup_getbody.md - gets the ui view of the window body
- api/link/ui.popup_getchildviews.md - returns child views of the calling component
- api/link/ui.popup_getformview.md - returns master form for the input
- api/link/ui.popup_gethead.md - gets the ui view of the window header
- api/link/ui.popup_getnode.md - returns the main HTML container for the calling object
- api/link/ui.popup_getparentview.md - returns the parent view of the component
- api/link/ui.popup_gettopparentview.md - returns top parent view
- api/link/ui.popup_hasevent.md - checks whether the component has the specified event
- api/link/ui.popup_hide.md - hides the view
- api/link/ui.popup_isenabled.md - checks whether the view is enabled
- api/link/ui.popup_isvisible.md - checks whether the view is visible
- api/link/ui.popup_mapevent.md - routes events from one object to another
- api/link/ui.popup_resize.md - adjusts the view to a new size
- api/link/ui.popup_resizechildren.md - resizes all children of the calling component
- api/link/ui.popup_setposition.md - sets window's position
- api/link/ui.popup_show.md - makes the component visible
- api/link/ui.popup_unbind.md - breaks "bind" link
- api/link/ui.popup_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.popup_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.popup_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.popup_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.popup_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.popup_ondestruct_event.md - occurs when component destroyed
- api/link/ui.popup_onfocus_event.md - fires when a view gets focus
- api/link/ui.popup_onhide_event.md - fires when window is hidden
- api/link/ui.popup_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.popup_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.popup_onshow_event.md - fires when window is shown
- api/link/ui.popup_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.popup_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.popup_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.popup_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.popup_ontouchmove_event.md - occurs during touch movement
- api/link/ui.popup_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.popup_onviewmove_event.md - fires while view is moving
- api/link/ui.popup_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.popup_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.popup_animate_config.md - defines or disables view change animation.
- api/link/ui.popup_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.popup_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.popup_body_config.md - the content of window body: template or view
- api/link/ui.popup_borderless_config.md - used to hide the component borders
- api/link/ui.popup_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.popup_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.popup_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.popup_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.popup_head_config.md - sets the view header
- api/link/ui.popup_headheight_config.md - defines the header height (43 by default)
- api/link/ui.popup_height_config.md - sets the height of the component
- api/link/ui.popup_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.popup_id_config.md - the component ID
- api/link/ui.popup_left_config.md - the left offset of the window
- api/link/ui.popup_maxheight_config.md - sets the maximum height for the view
- api/link/ui.popup_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.popup_minheight_config.md - sets the minimal height for the view
- api/link/ui.popup_minwidth_config.md - sets the minimal width for the view
- api/link/ui.popup_modal_config.md - switches window modality
- api/link/ui.popup_move_config.md - makes view movable
- api/link/ui.popup_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.popup_padding_config.md - sets paddings of the chart content
- api/link/ui.popup_position_config.md - sets position of the window relative to the the screen
- api/link/ui.popup_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.popup_resize_config.md - enables/disables window resizing
- api/link/ui.popup_tofront_config.md - places window above other windows on clicking it
- api/link/ui.popup_top_config.md - the top offset of a window
- api/link/ui.popup_width_config.md - sets the width of the component
- api/link/ui.popup_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.popup_$getsize_other.md - returns the current size of the component
- api/link/ui.popup_$height_other.md - current height of the view
- api/link/ui.popup_$scope_other.md - scope for resolving event and method names
- api/link/ui.popup_$setsize_other.md - sets the component size
- api/link/ui.popup_$skin_other.md - method, which will be called when skin defined
- api/link/ui.popup_$view_other.md - reference to top html element of the view
- api/link/ui.popup_$width_other.md - current width of the view
- api/link/ui.popup_config_other.md - all options from initial component configuration
- api/link/ui.popup_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.popup_methods.md
- api/refs/ui.popup_props.md
- api/refs/ui.popup_events.md
- api/refs/ui.popup_others.md

