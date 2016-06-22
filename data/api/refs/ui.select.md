ui.select 
=============


{{memo A single-selection drop-down list box. }}

The component can be populated with data from the server side or a file: each item in the list will correspond to an item in the data source. Multi-selection mode isn't supported. Check [select](desktop/select.md) documentation for more detailed description.

### Constructor

~~~js
var select = webix.ui({
	view:"select", 
  	label:"Branch", 
  	value:1, options:[
    	{id:1, value:"Master" },
    	{id:2, value:"Release" }
  	]
});
~~~

### Where to start

- [Overview of the Select Control](desktop/select.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/02_select.html)


<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.select_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.select_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.select_bind.md - binds components
- api/link/ui.select_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.select_blur.md - removes the focus from the control
- api/link/ui.select_callevent.md - calls an inner event
- api/link/ui.select_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.select_destructor.md - destructs the calling object
- api/link/ui.select_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.select_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.select_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.select_focus.md - sets focus to the control
- api/link/ui.select_getchildviews.md - returns child views of the calling component
- api/link/ui.select_getformview.md - returns master form for the input
- api/link/ui.select_getinputnode.md - gets the HTML element related to the component
- api/link/ui.select_getnode.md - returns the main HTML container for the calling object
- api/link/ui.select_getparentview.md - returns the parent view of the component
- api/link/ui.select_gettopparentview.md - returns top parent view
- api/link/ui.select_getvalue.md - returns the current value of the control
- api/link/ui.select_hasevent.md - checks whether the component has the specified event
- api/link/ui.select_hide.md - hides the view
- api/link/ui.select_isenabled.md - checks whether the view is enabled
- api/link/ui.select_isvisible.md - checks whether the view is visible
- api/link/ui.select_mapevent.md - routes events from one object to another
- api/link/ui.select_refresh.md - repaints the component
- api/link/ui.select_render.md - renders the specified item or the whole component
- api/link/ui.select_resize.md - adjusts the view to a new size
- api/link/ui.select_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.select_setvalue.md - sets a new value for the component
- api/link/ui.select_show.md - makes the component visible
- api/link/ui.select_unbind.md - breaks "bind" link
- api/link/ui.select_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.select_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.select_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.select_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.select_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.select_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.select_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.select_onchange_event.md - fires when the value of the control is changed
- api/link/ui.select_ondestruct_event.md - occurs when component destroyed
- api/link/ui.select_onfocus_event.md - fires when a view gets focus
- api/link/ui.select_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.select_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.select_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.select_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.select_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.select_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.select_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.select_ontouchmove_event.md - occurs during touch movement
- api/link/ui.select_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.select_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.select_align_config.md - the alignment of the control within the parent container
- api/link/ui.select_animate_config.md - defines or disables view change animation.
- api/link/ui.select_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.select_autowidth_config.md - adjusts button to its text content
- api/link/ui.select_borderless_config.md - used to hide the component borders
- api/link/ui.select_bottomlabel_config.md - sets a label under a control
- api/link/ui.select_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.select_click_config.md - click action handler
- api/link/ui.select_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.select_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.select_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.select_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.select_height_config.md - sets the height of the component
- api/link/ui.select_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.select_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.select_id_config.md - the component ID
- api/link/ui.select_inputalign_config.md - 
- api/link/ui.select_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.select_inputpadding_config.md - padding of text in the input
- api/link/ui.select_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.select_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.select_label_config.md - the text label of the control
- api/link/ui.select_labelalign_config.md - 
- api/link/ui.select_labelposition_config.md - positions label in relation to the control
- api/link/ui.select_labelwidth_config.md - the width of the label
- api/link/ui.select_maxheight_config.md - sets the maximum height for the view
- api/link/ui.select_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.select_minheight_config.md - sets the minimal height for the view
- api/link/ui.select_minwidth_config.md - sets the minimal width for the view
- api/link/ui.select_name_config.md - name of the control
- api/link/ui.select_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.select_options_config.md - defines options for a select control
- api/link/ui.select_placeholder_config.md - placeholder text for the input area
- api/link/ui.select_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.select_readonly_config.md - configures readonly mode for the input
- api/link/ui.select_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.select_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.select_required_config.md - marks field as required
- api/link/ui.select_suggest_config.md - links suggest list to the input
- api/link/ui.select_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.select_tooltip_config.md - tooltip for the input
- api/link/ui.select_validate_config.md - adds validation to the field
- api/link/ui.select_validateevent_config.md - on which event validation fires
- api/link/ui.select_value_config.md - sets the initial value for a control
- api/link/ui.select_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.select_$getsize_other.md - returns the current size of the component
- api/link/ui.select_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.select_$height_other.md - current height of the view
- api/link/ui.select_$render_other.md - code called after rending control
- api/link/ui.select_$rendericon_other.md - renders icon for the control
- api/link/ui.select_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.select_$renderlabel_other.md - renders html for the label
- api/link/ui.select_$scope_other.md - scope for resolving event and method names
- api/link/ui.select_$setsize_other.md - sets the component size
- api/link/ui.select_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.select_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.select_$view_other.md - reference to top html element of the view
- api/link/ui.select_$width_other.md - current width of the view
- api/link/ui.select_config_other.md - all options from initial component configuration
- api/link/ui.select_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.select_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.select_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.select_methods.md
- api/refs/ui.select_props.md
- api/refs/ui.select_events.md
- api/refs/ui.select_others.md

