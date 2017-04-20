ui.multiselect 
=============

{{memo A non-editable combo box with the possibility to select several items at a time.. }}

The control combines a non-editable text field with a drop-down list of predefined values. The list is supplied with a customizable 'Select' button to enter selected items to the input. 

Check [multiselect](desktop/multiselect.md) documentation for more detailed description.

### Constructor

~~~js
var multiselect = webix.ui({
 	view:"multiselect", 
  	label:"Participant", 
  	labelWidth:100, 
  	options:[
		{"id":1, "value":"Alex Brown"},
		{"id":2, "value":"Dan Simons"},
		{"id":3, "value":"Gron Alanski"},
		{"id":4, "value":"Dan Alanski"}
	],
  	value:"1,4" 
});
~~~

### Where to start

- [Overview of the Multiselect Control](desktop/multiselect.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.richselect.md">ui.richselect</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.multiselect_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.multiselect_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.multiselect_bind.md - binds components
- api/link/ui.multiselect_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.multiselect_blur.md - removes the focus from the control
- api/link/ui.multiselect_callevent.md - calls an inner event
- api/link/ui.multiselect_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.multiselect_destructor.md - destructs the calling object
- api/link/ui.multiselect_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.multiselect_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.multiselect_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.multiselect_focus.md - sets focus to the control
- api/link/ui.multiselect_getchildviews.md - returns child views of the calling component
- api/link/ui.multiselect_getformview.md - returns master form for the input
- api/link/ui.multiselect_getinputnode.md - gets the HTML element related to the component
- api/link/ui.multiselect_getlist.md - returns list view of the control
- api/link/ui.multiselect_getnode.md - returns the main HTML container for the calling object
- api/link/ui.multiselect_getparentview.md - returns the parent view of the component
- api/link/ui.multiselect_getpopup.md - returns popup element of the input
- api/link/ui.multiselect_gettext.md - returns text of currently selected option
- api/link/ui.multiselect_gettopparentview.md - returns top parent view
- api/link/ui.multiselect_getvalue.md - returns the current value of the control
- api/link/ui.multiselect_hasevent.md - checks whether the component has the specified event
- api/link/ui.multiselect_hide.md - hides the view
- api/link/ui.multiselect_isenabled.md - checks whether the view is enabled
- api/link/ui.multiselect_isvisible.md - checks whether the view is visible
- api/link/ui.multiselect_mapevent.md - routes events from one object to another
- api/link/ui.multiselect_refresh.md - repaints the component
- api/link/ui.multiselect_render.md - renders the specified item or the whole component
- api/link/ui.multiselect_resize.md - adjusts the view to a new size
- api/link/ui.multiselect_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.multiselect_setvalue.md - sets a new value for the component
- api/link/ui.multiselect_show.md - makes the component visible
- api/link/ui.multiselect_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.multiselect_unbind.md - breaks "bind" link
- api/link/ui.multiselect_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.multiselect_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.multiselect_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.multiselect_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.multiselect_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.multiselect_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.multiselect_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.multiselect_onchange_event.md - fires when the value of the control is changed
- api/link/ui.multiselect_ondestruct_event.md - occurs when component destroyed
- api/link/ui.multiselect_onfocus_event.md - fires when a view gets focus
- api/link/ui.multiselect_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.multiselect_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.multiselect_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.multiselect_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.multiselect_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.multiselect_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.multiselect_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.multiselect_ontouchmove_event.md - occurs during touch movement
- api/link/ui.multiselect_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.multiselect_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.multiselect_align_config.md - the alignment of the control within the parent container
- api/link/ui.multiselect_animate_config.md - defines or disables view change animation.
- api/link/ui.multiselect_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.multiselect_autowidth_config.md - adjusts button to its text content
- api/link/ui.multiselect_borderless_config.md - used to hide the component borders
- api/link/ui.multiselect_bottomlabel_config.md - sets a label under a control
- api/link/ui.multiselect_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.multiselect_click_config.md - click action handler
- api/link/ui.multiselect_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.multiselect_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.multiselect_disabled_config.md - indicates whether an item is enabled
- api/link/ui.multiselect_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.multiselect_height_config.md - sets the height of the component
- api/link/ui.multiselect_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.multiselect_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.multiselect_icon_config.md - sets an icon into the control
- api/link/ui.multiselect_id_config.md - the component ID
- api/link/ui.multiselect_inputalign_config.md - the alignment of an input towards its container
- api/link/ui.multiselect_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.multiselect_inputpadding_config.md - padding of text in the input
- api/link/ui.multiselect_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.multiselect_invalid_config.md - specifies, whether the control is valid/invalid after validation
- api/link/ui.multiselect_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.multiselect_label_config.md - the text label of the control
- api/link/ui.multiselect_labelalign_config.md - the alignment of a label towards its container
- api/link/ui.multiselect_labelposition_config.md - positions label in relation to the control
- api/link/ui.multiselect_labelwidth_config.md - the width of the label
- api/link/ui.multiselect_maxheight_config.md - sets the maximum height for the view
- api/link/ui.multiselect_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.multiselect_minheight_config.md - sets the minimal height for the view
- api/link/ui.multiselect_minwidth_config.md - sets the minimal width for the view
- api/link/ui.multiselect_name_config.md - name of the control
- api/link/ui.multiselect_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.multiselect_optionwidth_config.md - sets width of a popup list with options
- api/link/ui.multiselect_options_config.md - defines data items of the drop-down list
- api/link/ui.multiselect_placeholder_config.md - placeholder text for the input area
- api/link/ui.multiselect_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.multiselect_popupwidth_config.md - width of the popup window
- api/link/ui.multiselect_readonly_config.md - configures readonly mode for the input
- api/link/ui.multiselect_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.multiselect_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.multiselect_required_config.md - marks field as required
- api/ui.multiselect_separator_config.md - sets a delimiter for control's values
- api/link/ui.multiselect_suggest_config.md - links suggest list to the input
- api/link/ui.multiselect_tooltip_config.md - tooltip for the input
- api/link/ui.multiselect_validate_config.md - adds validation to the field
- api/link/ui.multiselect_validateevent_config.md - on which event validation fires
- api/link/ui.multiselect_value_config.md - sets the initial value for a control
- api/link/ui.multiselect_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.multiselect_$comparevalue_other.md - compares the old value of the control with the one that is going to be set
- api/ui.multiselect_$cssname_other.md - name of the widget the CSS of which you want to inherit for a custom widget
- api/link/ui.multiselect_$getsize_other.md - returns the current size of the component
- api/link/ui.multiselect_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.multiselect_$height_other.md - current height of the view
- api/link/ui.multiselect_$preparevalue_other.md - adjusts the value that is going to be set to the format expected by the control
- api/link/ui.multiselect_$render_other.md - code called after rending control
- api/link/ui.multiselect_$rendericon_other.md - renders icon for the control
- api/link/ui.multiselect_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.multiselect_$renderlabel_other.md - renders html for the label
- api/link/ui.multiselect_$scope_other.md - scope for resolving event and method names
- api/link/ui.multiselect_$setsize_other.md - sets the component size
- api/link/ui.multiselect_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.multiselect_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.multiselect_$view_other.md - reference to top html element of the view
- api/link/ui.multiselect_$width_other.md - current width of the view
- api/link/ui.multiselect_config_other.md - all options from initial component configuration
- api/link/ui.multiselect_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.multiselect_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.multiselect_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.multiselect_methods.md
- api/refs/ui.multiselect_props.md
- api/refs/ui.multiselect_events.md
- api/refs/ui.multiselect_others.md

