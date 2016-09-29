ui.colorboard 
=============


{{memo A color palette. }}

The component presents a div that contains a set of color swatches. Used as a part of the api/refs/ui.colorpicker.md component. Check [colorboard](desktop/colorboard.md) documentation for more detailed description.

### Constructor

~~~js
var colorboard = webix.ui({
	view:"colorboard",
    cols:20,
    rows:20,
    width:300,
    height:300
});
~~~


### Where to start

- [Overview of the Colorboard Widget](desktop/colorboard.md)
- [Samples](http://docs.webix.com/samples/24_colorpicker/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.colorboard_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.colorboard_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.colorboard_bind.md - binds components
- api/link/ui.colorboard_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.colorboard_callevent.md - calls an inner event
- api/link/ui.colorboard_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.colorboard_destructor.md - destructs the calling object
- api/link/ui.colorboard_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.colorboard_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.colorboard_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.colorboard_getchildviews.md - returns child views of the calling component
- api/link/ui.colorboard_getformview.md - returns master form for the input
- api/link/ui.colorboard_getnode.md - returns the main HTML container for the calling object
- api/link/ui.colorboard_getparentview.md - returns the parent view of the component
- api/link/ui.colorboard_gettopparentview.md - returns top parent view
- api/ui.colorboard_getvalue.md - returns the current value of the component
- api/link/ui.colorboard_hasevent.md - checks whether the component has the specified event
- api/link/ui.colorboard_hide.md - hides the view
- api/link/ui.colorboard_isenabled.md - checks whether the view is enabled
- api/link/ui.colorboard_isvisible.md - checks whether the view is visible
- api/link/ui.colorboard_mapevent.md - routes events from one object to another
- api/ui.colorboard_moveselection.md - moves cell selection in the specified direction
- api/ui.colorboard_refresh.md - repaints the component
- api/ui.colorboard_render.md - renders the specified item or the whole component
- api/link/ui.colorboard_resize.md - adjusts the view to a new size
- api/ui.colorboard_setvalue.md - sets a new value for the component
- api/link/ui.colorboard_show.md - makes the component visible
- api/link/ui.colorboard_unbind.md - breaks "bind" link
- api/link/ui.colorboard_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.colorboard_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.colorboard_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/ui.colorboard_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.colorboard_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.colorboard_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.colorboard_ondestruct_event.md - occurs when component destroyed
- api/link/ui.colorboard_onfocus_event.md - fires when a view gets focus
- api/link/ui.colorboard_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.colorboard_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.colorboard_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.colorboard_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.colorboard_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.colorboard_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.colorboard_ontouchmove_event.md - occurs during touch movement
- api/link/ui.colorboard_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.colorboard_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.colorboard_animate_config.md - defines or disables view change animation.
- api/link/ui.colorboard_borderless_config.md - used to hide the component borders
- api/ui.colorboard_cols_config.md - sets the number of columns in the palette
- api/link/ui.colorboard_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.colorboard_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.colorboard_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.colorboard_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.colorboard_height_config.md - sets the height of the component
- api/link/ui.colorboard_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.colorboard_id_config.md - the component ID
- api/link/ui.colorboard_maxheight_config.md - sets the maximum height for the view
- api/ui.colorboard_maxlightness_config.md - sets the end value of lightness for the default color palette
- api/link/ui.colorboard_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.colorboard_minheight_config.md - sets the minimal height for the view
- api/ui.colorboard_minlightness_config.md - sets the start value of lightness for the default color palette
- api/link/ui.colorboard_minwidth_config.md - sets the minimal width for the view
- api/ui.colorboard_navigation_config.md - enables keyboard navigation
- api/link/ui.colorboard_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.colorboard_palette_config.md - sets palette colors
- api/ui.colorboard_rows_config.md - sets the number of rows in the palette
- api/ui.colorboard_template_config.md - defines a custom template that will be applied to the component
- api/ui.colorboard_value_config.md - currently selected color
- api/link/ui.colorboard_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.colorboard_$getsize_other.md - returns the current size of the component
- api/link/ui.colorboard_$height_other.md - current height of the view
- api/link/ui.colorboard_$scope_other.md - scope for resolving event and method names
- api/link/ui.colorboard_$setsize_other.md - sets the component size
- api/ui.colorboard_$setvalue_other.md - highlights the color with the specified value in the colorboard
- api/link/ui.colorboard_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.colorboard_$view_other.md - reference to top html element of the view
- api/link/ui.colorboard_$width_other.md - current width of the view
- api/link/ui.colorboard_config_other.md - all options from initial component configuration
- api/link/ui.colorboard_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.colorboard_methods.md
- api/refs/ui.colorboard_props.md
- api/refs/ui.colorboard_events.md
- api/refs/ui.colorboard_others.md

