ui.checkbox 
=============


{{memo A two-state check box. }}

The control allows users to make multiple choices from a number of options. Fully customizable and can be used both as a stand-alone view and as a part of a form.  Check [checkbox](desktop/checkbox.md) documentation for more detailed description.

### Constructor

~~~js
var checkbox = webix.ui({
	view:"checkbox", 
	id:"field_a", 
	label:"Second age", 
	value:1
});
~~~

### Where to start

- [Overview of the Checkbox Control](desktop/checkbox.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/06_checkbox.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.checkbox_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.checkbox_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.checkbox_bind.md - binds components
- api/link/ui.checkbox_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.checkbox_blur.md - removes the focus from the control
- api/link/ui.checkbox_callevent.md - calls an inner event
- api/link/ui.checkbox_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.checkbox_destructor.md - destructs the calling object
- api/link/ui.checkbox_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.checkbox_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.checkbox_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.checkbox_focus.md - sets focus to the control
- api/link/ui.checkbox_getchildviews.md - returns child views of the calling component
- api/link/ui.checkbox_getformview.md - returns master form for the input
- api/link/ui.checkbox_getinputnode.md - gets the HTML element related to the component
- api/link/ui.checkbox_getnode.md - returns the main HTML container for the calling object
- api/link/ui.checkbox_getparentview.md - returns the parent view of the component
- api/link/ui.checkbox_gettopparentview.md - returns top parent view
- api/link/ui.checkbox_getvalue.md - returns the current value of the control
- api/link/ui.checkbox_hasevent.md - checks whether the component has the specified event
- api/link/ui.checkbox_hide.md - hides the view
- api/link/ui.checkbox_isenabled.md - checks whether the view is enabled
- api/link/ui.checkbox_isvisible.md - checks whether the view is visible
- api/link/ui.checkbox_mapevent.md - routes events from one object to another
- api/link/ui.checkbox_refresh.md - repaints the component
- api/link/ui.checkbox_render.md - renders the specified item or the whole component
- api/link/ui.checkbox_resize.md - adjusts the view to a new size
- api/link/ui.checkbox_setbottomtext.md - 
- api/link/ui.checkbox_setvalue.md - sets a new value for the component
- api/link/ui.checkbox_show.md - makes the component visible
- api/link/ui.checkbox_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/ui.checkbox_toggle.md - swiches between states of the control ('checked' to 'unchecked' and vice-versa)
- api/link/ui.checkbox_unbind.md - breaks "bind" link
- api/link/ui.checkbox_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.checkbox_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.checkbox_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.checkbox_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.checkbox_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.checkbox_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.checkbox_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.checkbox_onchange_event.md - fires when the value of the control is changed
- api/link/ui.checkbox_ondestruct_event.md - occurs when component destroyed
- api/link/ui.checkbox_onfocus_event.md - fires when a view gets focus
- api/link/ui.checkbox_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.checkbox_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.checkbox_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.checkbox_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.checkbox_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.checkbox_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.checkbox_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.checkbox_ontouchmove_event.md - occurs during touch movement
- api/link/ui.checkbox_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.checkbox_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.checkbox_align_config.md - the alignment of the control within the parent container
- api/link/ui.checkbox_animate_config.md - defines or disables view change animation.
- api/link/ui.checkbox_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.checkbox_autowidth_config.md - adjusts button to its text content
- api/link/ui.checkbox_borderless_config.md - used to hide the component borders
- api/link/ui.checkbox_bottomlabel_config.md - sets a label under a control
- api/link/ui.checkbox_bottompadding_config.md - sets the bottom offset of the control input
- api/ui.checkbox_checkvalue_config.md - result of getValue for checked checkbox
- api/link/ui.checkbox_click_config.md - click action handler
- api/link/ui.checkbox_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.checkbox_css_config.md - the name of a css class that will be applied to the view container
- api/ui.checkbox_customcheckbox_config.md - enables/disables custom checkbox in some skins
- api/link/ui.checkbox_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.checkbox_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.checkbox_height_config.md - sets the height of the component
- api/link/ui.checkbox_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.checkbox_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.checkbox_id_config.md - the component ID
- api/link/ui.checkbox_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.checkbox_inputpadding_config.md - padding of text in the input
- api/link/ui.checkbox_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.checkbox_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.checkbox_label_config.md - the text label of the control
- api/link/ui.checkbox_labelposition_config.md - positions label in relation to the control
- api/ui.checkbox_labelright_config.md - sets the text of the right-hand label. Only checkbox features this functionality
- api/link/ui.checkbox_labelwidth_config.md - the width of the label
- api/link/ui.checkbox_maxheight_config.md - sets the maximum height for the view
- api/link/ui.checkbox_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.checkbox_minheight_config.md - sets the minimal height for the view
- api/link/ui.checkbox_minwidth_config.md - sets the minimal width for the view
- api/link/ui.checkbox_name_config.md - name of the control
- api/link/ui.checkbox_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.checkbox_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.checkbox_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.checkbox_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.checkbox_required_config.md - marks field as required
- api/link/ui.checkbox_suggest_config.md - links suggest list to the input
- api/link/ui.checkbox_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.checkbox_tooltip_config.md - tooltip for the input
- api/ui.checkbox_uncheckvalue_config.md - result of getValue for unchecked checkbox
- api/link/ui.checkbox_validate_config.md - adds validation to the field
- api/link/ui.checkbox_validateevent_config.md - on which event validation fires
- api/link/ui.checkbox_value_config.md - sets the initial value for a control
- api/link/ui.checkbox_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.checkbox_$getsize_other.md - returns the current size of the component
- api/link/ui.checkbox_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.checkbox_$height_other.md - current height of the view
- api/link/ui.checkbox_$render_other.md - code called after rending control
- api/link/ui.checkbox_$rendericon_other.md - renders icon for the control
- api/link/ui.checkbox_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.checkbox_$renderlabel_other.md - renders html for the label
- api/link/ui.checkbox_$scope_other.md - scope for resolving event and method names
- api/link/ui.checkbox_$setsize_other.md - sets the component size
- api/link/ui.checkbox_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.checkbox_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.checkbox_$view_other.md - reference to top html element of the view
- api/link/ui.checkbox_$width_other.md - current width of the view
- api/link/ui.checkbox_config_other.md - all options from initial component configuration
- api/link/ui.checkbox_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.checkbox_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.checkbox_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.checkbox_methods.md
- api/refs/ui.checkbox_props.md
- api/refs/ui.checkbox_events.md
- api/refs/ui.checkbox_others.md

