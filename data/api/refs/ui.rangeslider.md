ui.rangeslider 
=============


{{memo A slider component with two markers for selecting a range of values. }}

Unlike a standard slider, this control allows choosing a particular range of values due to its two handlers. The part of the value line which corresponds to the selected set of values is highlighted in blue color.

Check [rangeslider](desktop/rangeslider.md) documentation for more detailed description.

### Constructor

~~~js
var rangeslider = webix.ui({
	view:"rangeslider", 
  	label:"Level A", 
  	value:"10,100", 
  	title: webix.template("#value#")
});
~~~

### Where to start

- [Overview of the Range Slider Control](desktop/rangeslider.md)
- [Samples](http://docs.webix.com/samples/13_form/05_extras/07_rangeslider.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.slider.md">ui.slider</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.rangeslider_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.rangeslider_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.rangeslider_bind.md - binds components
- api/link/ui.rangeslider_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.rangeslider_blur.md - removes the focus from the control
- api/link/ui.rangeslider_callevent.md - calls an inner event
- api/link/ui.rangeslider_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.rangeslider_destructor.md - destructs the calling object
- api/link/ui.rangeslider_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.rangeslider_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.rangeslider_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.rangeslider_focus.md - sets focus to the control
- api/link/ui.rangeslider_getchildviews.md - returns child views of the calling component
- api/link/ui.rangeslider_getformview.md - returns master form for the input
- api/link/ui.rangeslider_getinputnode.md - gets the HTML element related to the component
- api/link/ui.rangeslider_getnode.md - returns the main HTML container for the calling object
- api/link/ui.rangeslider_getparentview.md - returns the parent view of the component
- api/link/ui.rangeslider_gettopparentview.md - returns top parent view
- api/link/ui.rangeslider_getvalue.md - returns the current value of the control
- api/link/ui.rangeslider_hasevent.md - checks whether the component has the specified event
- api/link/ui.rangeslider_hide.md - hides the view
- api/link/ui.rangeslider_isenabled.md - checks whether the view is enabled
- api/link/ui.rangeslider_isvisible.md - checks whether the view is visible
- api/link/ui.rangeslider_mapevent.md - routes events from one object to another
- api/link/ui.rangeslider_refresh.md - repaints the component
- api/link/ui.rangeslider_render.md - renders the specified item or the whole component
- api/link/ui.rangeslider_resize.md - adjusts the view to a new size
- api/link/ui.rangeslider_setvalue.md - sets a new value for the component
- api/link/ui.rangeslider_show.md - makes the component visible
- api/link/ui.rangeslider_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.rangeslider_unbind.md - breaks "bind" link
- api/link/ui.rangeslider_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.rangeslider_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.rangeslider_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.rangeslider_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.rangeslider_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.rangeslider_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.rangeslider_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.rangeslider_onchange_event.md - fires when the value of the control is changed
- api/link/ui.rangeslider_ondestruct_event.md - occurs when component destroyed
- api/link/ui.rangeslider_onfocus_event.md - fires when a view gets focus
- api/link/ui.rangeslider_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.rangeslider_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.rangeslider_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.rangeslider_onsliderdrag_event.md - fires when the handle of slider was dragged ( but not released yet )
- api/link/ui.rangeslider_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.rangeslider_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.rangeslider_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.rangeslider_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.rangeslider_ontouchmove_event.md - occurs during touch movement
- api/link/ui.rangeslider_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.rangeslider_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.rangeslider_align_config.md - the alignment of the control within the parent container
- api/link/ui.rangeslider_animate_config.md - defines or disables view change animation.
- api/link/ui.rangeslider_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.rangeslider_autowidth_config.md - adjusts button to its text content
- api/link/ui.rangeslider_borderless_config.md - used to hide the component borders
- api/link/ui.rangeslider_bottomlabel_config.md - sets a label under a control
- api/link/ui.rangeslider_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.rangeslider_click_config.md - click action handler
- api/link/ui.rangeslider_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.rangeslider_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.rangeslider_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.rangeslider_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.rangeslider_height_config.md - sets the height of the component
- api/link/ui.rangeslider_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.rangeslider_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.rangeslider_id_config.md - the component ID
- api/link/ui.rangeslider_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.rangeslider_inputpadding_config.md - padding of text in the input
- api/link/ui.rangeslider_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.rangeslider_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.rangeslider_label_config.md - the text label of the control
- api/link/ui.rangeslider_labelposition_config.md - positions label in relation the control
- api/link/ui.rangeslider_labelwidth_config.md - the width of the label
- api/link/ui.rangeslider_max_config.md - max value of slider
- api/link/ui.rangeslider_maxheight_config.md - sets the maximum height for the view
- api/link/ui.rangeslider_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.rangeslider_min_config.md - min value of slider
- api/link/ui.rangeslider_minheight_config.md - sets the minimal height for the view
- api/link/ui.rangeslider_minwidth_config.md - sets the minimal width for the view
- api/link/ui.rangeslider_name_config.md - name of the control
- api/link/ui.rangeslider_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.rangeslider_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.rangeslider_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.rangeslider_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.rangeslider_required_config.md - marks field as required
- api/ui.rangeslider_separator_config.md - a delimiter for separating values in a range, comma by default
- api/link/ui.rangeslider_step_config.md - step of slider
- api/ui.rangeslider_stringresult_config.md - if the parameter is set to true, the method getValue returns data as string (otherwise, as object)
- api/link/ui.rangeslider_suggest_config.md - links suggest list to the input
- api/link/ui.rangeslider_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.rangeslider_title_config.md - text over slider bar
- api/link/ui.rangeslider_tooltip_config.md - tooltip for the input
- api/link/ui.rangeslider_validate_config.md - adds validation to the field
- api/link/ui.rangeslider_validateevent_config.md - on which event validation fires
- api/link/ui.rangeslider_value_config.md - sets the initial value for a control
- api/link/ui.rangeslider_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/ui.rangeslider_$cssname_other.md - name which will be used as part of css class
- api/link/ui.rangeslider_$getsize_other.md - returns the current size of the component
- api/link/ui.rangeslider_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.rangeslider_$height_other.md - current height of the view
- api/link/ui.rangeslider_$render_other.md - code called after rending control
- api/link/ui.rangeslider_$rendericon_other.md - renders icon for the control
- api/link/ui.rangeslider_$renderinput_other.md - 
- api/link/ui.rangeslider_$renderlabel_other.md - renders html for the label
- api/link/ui.rangeslider_$scope_other.md - scope for resolving event and method names
- api/link/ui.rangeslider_$setsize_other.md - sets the component size
- api/link/ui.rangeslider_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.rangeslider_$skin_other.md - method, which will be called when skin defined
- api/link/ui.rangeslider_$touchcapture_other.md - allows capturing touch gestures in touch limited mode.
- api/link/ui.rangeslider_$view_other.md - reference to top html element of the view
- api/link/ui.rangeslider_$width_other.md - current width of the view
- api/link/ui.rangeslider_config_other.md - all options from initial component configuration
- api/link/ui.rangeslider_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.rangeslider_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.rangeslider_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.rangeslider_methods.md
- api/refs/ui.rangeslider_props.md
- api/refs/ui.rangeslider_events.md
- api/refs/ui.rangeslider_others.md

