ui.gage 
=============

{{memo A gage widget with a dial to visualize data updates. }}

The Gage widget allows visualizing alteration of data values with the help of HSL-based color representation of the displayed value.

Check desktop/gage.md documentation for more details.

###Constructor 

~~~js
var gage = webix.ui({
    view: "gage",
    id:"gage1",
    value: 60,
    minRange: 0,
    maxRange: 100,
    label: "Speed",
    placeholder: "km/hour",
    animation: true
});
~~~

### Where to start

- [Overview of the Gage Widget](desktop/gage.md)
- [Samples](http://docs.webix.com/samples/60_pro/15_gage/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.gage_adjust.md - adjusts the component to the size of the parent HTML container
- api/ui.gage_animate.md - 
- api/link/ui.gage_bind.md - binds components
- api/link/ui.gage_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.gage_destructor.md - destructs the calling object
- api/link/ui.gage_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.gage_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.gage_getchildviews.md - returns child views of the calling component
- api/link/ui.gage_getformview.md - returns master form for the input
- api/link/ui.gage_getnode.md - returns the main HTML container for the calling object
- api/link/ui.gage_getparentview.md - returns the parent view of the component
- api/link/ui.gage_gettopparentview.md - returns top parent view
- api/ui.gage_getvalue.md - returns the gage value
- api/link/ui.gage_hide.md - hides the view
- api/link/ui.gage_isenabled.md - checks whether the view is enabled
- api/link/ui.gage_isvisible.md - checks whether the view is visible
- api/link/ui.gage_resize.md - adjusts the view to a new size
- api/ui.gage_setvalue.md - sets a value for the gage
- api/link/ui.gage_show.md - makes the component visible
- api/link/ui.gage_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.gage_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.gage_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.gage_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.gage_ondestruct_event.md - occurs when component destroyed
- api/link/ui.gage_onfocus_event.md - fires when a view gets focus
- api/link/ui.gage_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.gage_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.gage_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.gage_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.gage_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.gage_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.gage_ontouchmove_event.md - occurs during touch movement
- api/link/ui.gage_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.gage_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.gage_animate_config.md - defines or disables view change animation.
- api/ui.gage_animation_config.md - defines whether data visualization will be animated
- api/link/ui.gage_borderless_config.md - used to hide the component borders
- api/link/ui.gage_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.gage_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.gage_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.gage_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.gage_height_config.md - sets the height of the component
- api/link/ui.gage_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.gage_id_config.md - the component ID
- api/ui.gage_label_config.md - label of the gage wigdet
- api/link/ui.gage_maxheight_config.md - sets the maximum height for the view
- api/ui.gage_maxrange_config.md - sets the maximum range value of the gage scale
- api/link/ui.gage_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.gage_minheight_config.md - sets the minimal height for the view
- api/ui.gage_minrange_config.md - sets the maximum range value of the gage scale
- api/link/ui.gage_minwidth_config.md - sets the minimal width for the view
- api/ui.gage_placeholder_config.md - specifies measurement units for the gage
- api/ui.gage_scale_config.md - defines the size of the gage scale
- api/ui.gage_stroke_config.md - defines the width of the gage scale
- api/ui.gage_value_config.md - sets the initial value to be displayed on the gage scale
- api/link/ui.gage_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.gage_$getsize_other.md - returns the current size of the component
- api/link/ui.gage_$height_other.md - current height of the view
- api/link/ui.gage_$scope_other.md - scope for resolving event and method names
- api/link/ui.gage_$setsize_other.md - sets the component size
- api/link/ui.gage_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.gage_$view_other.md - reference to top html element of the view
- api/link/ui.gage_$width_other.md - current width of the view
- api/link/ui.gage_config_other.md - all options from initial component configuration
- api/link/ui.gage_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.gage_methods.md
- api/refs/ui.gage_props.md
- api/refs/ui.gage_events.md
- api/refs/ui.gage_others.md

