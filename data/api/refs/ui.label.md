ui.label 
=============


{{memo A non-editable text control. }}

The component is used to display static text on a page. Check [label](desktop/label.md) documentation for more detailed description.

### Constructor

~~~js
var label = webix.ui({ 
	view:"label", 
	label: "Label", 
	inputWidth:100, 
	align:"left"
});
~~~

### Where to start

- [Overview of the Label Control](desktop/label.md)
- [Samples](http://docs.webix.com/samples/13_form/02_api/02_attributes.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.label_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.label_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.label_bind.md - binds components
- api/link/ui.label_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.label_blur.md - removes the focus from the control
- api/link/ui.label_callevent.md - calls an inner event
- api/link/ui.label_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.label_destructor.md - destructs the calling object
- api/link/ui.label_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.label_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.label_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.label_focus.md - sets focus to the control
- api/link/ui.label_getchildviews.md - returns child views of the calling component
- api/link/ui.label_getformview.md - returns master form for the input
- api/link/ui.label_getinputnode.md - gets the HTML element related to the component
- api/link/ui.label_getnode.md - returns the main HTML container for the calling object
- api/link/ui.label_getparentview.md - returns the parent view of the component
- api/link/ui.label_gettopparentview.md - returns top parent view
- api/link/ui.label_getvalue.md - returns the current value of the control
- api/link/ui.label_hasevent.md - checks whether the component has the specified event
- api/link/ui.label_hide.md - hides the view
- api/link/ui.label_isenabled.md - checks whether the view is enabled
- api/link/ui.label_isvisible.md - checks whether the view is visible
- api/link/ui.label_mapevent.md - routes events from one object to another
- api/link/ui.label_refresh.md - repaints the component
- api/link/ui.label_render.md - renders the specified item or the whole component
- api/link/ui.label_resize.md - adjusts the view to a new size
- api/ui.label_sethtml.md - sets HTML for template
- api/link/ui.label_setvalue.md - sets a new value for the component
- api/link/ui.label_show.md - makes the component visible
- api/link/ui.label_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.label_unbind.md - breaks "bind" link
- api/link/ui.label_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.label_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.label_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.label_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.label_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.label_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.label_onchange_event.md - fires when the value of the control is changed
- api/link/ui.label_ondestruct_event.md - occurs when component destroyed
- api/link/ui.label_onfocus_event.md - fires when a view gets focus
- api/link/ui.label_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.label_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.label_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.label_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.label_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.label_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.label_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.label_ontouchmove_event.md - occurs during touch movement
- api/link/ui.label_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.label_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.label_align_config.md - the alignment of the control within the parent container
- api/link/ui.label_animate_config.md - defines or disables view change animation.
- api/link/ui.label_autowidth_config.md - adjusts button to its text content
- api/link/ui.label_borderless_config.md - used to hide the component borders
- api/link/ui.label_click_config.md - click action handler
- api/link/ui.label_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.label_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.label_disabled_config.md - indicates whether an item is enabled
- api/link/ui.label_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.label_height_config.md - sets the height of the component
- api/link/ui.label_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.label_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.label_id_config.md - the component ID
- api/link/ui.label_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.label_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.label_label_config.md - the text label of the control
- api/link/ui.label_labelposition_config.md - positions label in relation to the control
- api/link/ui.label_maxheight_config.md - sets the maximum height for the view
- api/link/ui.label_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.label_minheight_config.md - sets the minimal height for the view
- api/link/ui.label_minwidth_config.md - sets the minimal width for the view
- api/link/ui.label_name_config.md - name of the control
- api/link/ui.label_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.label_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.label_tooltip_config.md - tooltip for the input
- api/link/ui.label_value_config.md - sets the initial value for a control
- api/link/ui.label_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.label_$comparevalue_other.md - compares the old value of the control with the one that is going to be set
- api/link/ui.label_$getsize_other.md - returns the current size of the component
- api/link/ui.label_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.label_$height_other.md - current height of the view
- api/link/ui.label_$preparevalue_other.md - adjusts the value that is going to be set to the format expected by the control
- api/link/ui.label_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.label_$scope_other.md - scope for resolving event and method names
- api/link/ui.label_$setsize_other.md - sets the component size
- api/link/ui.label_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.label_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.label_$view_other.md - reference to top html element of the view
- api/link/ui.label_$width_other.md - current width of the view
- api/link/ui.label_config_other.md - all options from initial component configuration
- api/link/ui.label_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.label_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.label_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.label_methods.md
- api/refs/ui.label_props.md
- api/refs/ui.label_events.md
- api/refs/ui.label_others.md

