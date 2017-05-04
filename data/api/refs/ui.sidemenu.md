ui.sidemenu 
=============


{{memo A collapsible side menu that allows selecting separate items. }}

The animated menu component that can be bound to any part of the screen. The size and position of Sidemenu can be customized. It can contain any other views, including complex layouts. Check [sidemenu](desktop/sidemenu.md) documentation for more detailed description.

### Constructor

~~~js
var sidemenu = webix.ui({
    view: "sidemenu",
    width: 200,
    position: "left",
    body:{
        view:"list",
        borderless:true,
        scroll: false,
        template: "<span class='webix_icon fa-#icon#'></span> #value#",
        data:[
            {id: 1, value: "Users", icon: "user"},
            {id: 2, value: "Products", icon: "cube"},
            {id: 3, value: "Reports", icon: "line-chart"}            
        ]
    }
}).show();
~~~

### Where to start

- [Overview of the Sidemenu Widget](desktop/sidemenu.md)
- [Samples](http://docs.webix.com/samples/28_sidemenu/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.sidemenu_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.sidemenu_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.sidemenu_bind.md - binds components
- api/link/ui.sidemenu_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.sidemenu_callevent.md - calls an inner event
- api/link/ui.sidemenu_close.md - removes a window
- api/link/ui.sidemenu_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.sidemenu_destructor.md - destructs the calling object
- api/link/ui.sidemenu_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.sidemenu_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.sidemenu_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.sidemenu_getbody.md - gets the UI view of the window body
- api/link/ui.sidemenu_getchildviews.md - returns child views of the calling component
- api/link/ui.sidemenu_getformview.md - returns master form for the input
- api/link/ui.sidemenu_gethead.md - gets the ui view of the window header
- api/link/ui.sidemenu_getnode.md - returns the main HTML container for the calling object
- api/link/ui.sidemenu_getparentview.md - returns the parent view of the component
- api/link/ui.sidemenu_gettopparentview.md - returns top parent view
- api/link/ui.sidemenu_hasevent.md - checks whether the component has the specified event
- api/link/ui.sidemenu_hide.md - hides the view
- api/link/ui.sidemenu_isenabled.md - checks whether the view is enabled
- api/link/ui.sidemenu_isvisible.md - checks whether the view is visible
- api/link/ui.sidemenu_mapevent.md - routes events from one object to another
- api/link/ui.sidemenu_resize.md - adjusts the view to a new size
- api/link/ui.sidemenu_resizechildren.md - resizes all children of the calling component
- api/link/ui.sidemenu_setposition.md - sets window's position
- api/link/ui.sidemenu_show.md - makes the component visible
- api/link/ui.sidemenu_unbind.md - breaks "bind" link
- api/link/ui.sidemenu_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.sidemenu_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.sidemenu_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.sidemenu_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.sidemenu_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.sidemenu_ondestruct_event.md - occurs when component destroyed
- api/link/ui.sidemenu_onfocus_event.md - fires when a view gets focus
- api/link/ui.sidemenu_onhide_event.md - fires when window is hidden
- api/link/ui.sidemenu_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.sidemenu_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.sidemenu_onshow_event.md - fires when window is shown
- api/link/ui.sidemenu_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.sidemenu_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.sidemenu_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.sidemenu_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.sidemenu_ontouchmove_event.md - occurs during touch movement
- api/link/ui.sidemenu_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.sidemenu_onviewmove_event.md - fires while view is moving
- api/link/ui.sidemenu_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.sidemenu_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.sidemenu_animate_config.md - defines or disables view change animation.
- api/link/ui.sidemenu_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.sidemenu_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.sidemenu_body_config.md - the content of window body: template or view
- api/link/ui.sidemenu_borderless_config.md - used to hide the component borders
- api/link/ui.sidemenu_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.sidemenu_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.sidemenu_disabled_config.md - indicates whether an item is enabled
- api/link/ui.sidemenu_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.sidemenu_head_config.md - sets the view header
- api/link/ui.sidemenu_headheight_config.md - defines the header height (43 by default)
- api/link/ui.sidemenu_height_config.md - sets the height of the component
- api/link/ui.sidemenu_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.sidemenu_id_config.md - the component ID
- api/link/ui.sidemenu_left_config.md - the left offset of the window
- api/link/ui.sidemenu_maxheight_config.md - sets the maximum height for the view
- api/link/ui.sidemenu_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.sidemenu_minheight_config.md - sets the minimal height for the view
- api/link/ui.sidemenu_minwidth_config.md - sets the minimal width for the view
- api/link/ui.sidemenu_modal_config.md - switches window modality
- api/link/ui.sidemenu_move_config.md - makes view movable
- api/link/ui.sidemenu_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.sidemenu_padding_config.md - sets paddings of the chart content
- api/link/ui.sidemenu_position_config.md - sets position of the window relative to the the screen
- api/link/ui.sidemenu_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.sidemenu_resize_config.md - enables/disables window resizing
- api/ui.sidemenu_state_config.md - defines the position and size of Sidemenu
- api/link/ui.sidemenu_tofront_config.md - places window above other windows on clicking it
- api/link/ui.sidemenu_top_config.md - the top offset of a window
- api/link/ui.sidemenu_width_config.md - sets the width of the component
- api/link/ui.sidemenu_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.sidemenu_$getsize_other.md - returns the current size of the component
- api/link/ui.sidemenu_$height_other.md - current height of the view
- api/link/ui.sidemenu_$scope_other.md - scope for resolving event and method names
- api/link/ui.sidemenu_$setsize_other.md - sets the component size
- api/link/ui.sidemenu_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.sidemenu_$view_other.md - reference to top html element of the view
- api/link/ui.sidemenu_$width_other.md - current width of the view
- api/link/ui.sidemenu_config_other.md - all options from initial component configuration
- api/link/ui.sidemenu_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.sidemenu_methods.md
- api/refs/ui.sidemenu_props.md
- api/refs/ui.sidemenu_events.md
- api/refs/ui.sidemenu_others.md

