ui.textarea 
=============


{{memo A multiline, editable text field. }}

Check [textarea](desktop/textarea.md) documentation for more detailed description.

### Constructor

~~~js
var textarea = webix.ui({ 
   view:"textarea", 
   label:"Note", 
   labelAlign:"right", 
   height:150, 
   value: "type here"  
});
~~~

### Where to start

- [Overview of the Textarea Control](desktop/textarea.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/03_textarea.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.textarea_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.textarea_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.textarea_bind.md - binds components
- api/link/ui.textarea_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.textarea_blur.md - removes the focus from the control
- api/link/ui.textarea_callevent.md - calls an inner event
- api/link/ui.textarea_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.textarea_destructor.md - destructs the calling object
- api/link/ui.textarea_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.textarea_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.textarea_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.textarea_focus.md - sets focus to the control
- api/link/ui.textarea_getchildviews.md - returns child views of the calling component
- api/link/ui.textarea_getformview.md - returns master form for the input
- api/link/ui.textarea_getinputnode.md - gets the HTML element related to the component
- api/link/ui.textarea_getnode.md - returns the main HTML container for the calling object
- api/link/ui.textarea_getparentview.md - returns the parent view of the component
- api/link/ui.textarea_gettopparentview.md - returns top parent view
- api/link/ui.textarea_getvalue.md - returns the current value of the control
- api/link/ui.textarea_hasevent.md - checks whether the component has the specified event
- api/link/ui.textarea_hide.md - hides the view
- api/link/ui.textarea_isenabled.md - checks whether the view is enabled
- api/link/ui.textarea_isvisible.md - checks whether the view is visible
- api/link/ui.textarea_mapevent.md - routes events from one object to another
- api/link/ui.textarea_refresh.md - repaints the component
- api/link/ui.textarea_render.md - renders the specified item or the whole component
- api/link/ui.textarea_resize.md - adjusts the view to a new size
- api/link/ui.textarea_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.textarea_setvalue.md - sets a new value for the component
- api/link/ui.textarea_show.md - makes the component visible
- api/link/ui.textarea_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.textarea_unbind.md - breaks "bind" link
- api/link/ui.textarea_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.textarea_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.textarea_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.textarea_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.textarea_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.textarea_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.textarea_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.textarea_onchange_event.md - fires when the value of the control is changed
- api/link/ui.textarea_ondestruct_event.md - occurs when component destroyed
- api/link/ui.textarea_onfocus_event.md - fires when a view gets focus
- api/link/ui.textarea_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.textarea_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.textarea_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.textarea_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.textarea_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.textarea_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.textarea_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.textarea_ontouchmove_event.md - occurs during touch movement
- api/link/ui.textarea_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.textarea_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.textarea_align_config.md - the alignment of the control within the parent container
- api/link/ui.textarea_animate_config.md - defines or disables view change animation.
- api/link/ui.textarea_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.textarea_autowidth_config.md - adjusts button to its text content
- api/link/ui.textarea_borderless_config.md - used to hide the component borders
- api/link/ui.textarea_bottomlabel_config.md - sets a label under a control
- api/link/ui.textarea_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.textarea_click_config.md - click action handler
- api/link/ui.textarea_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.textarea_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.textarea_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.textarea_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.textarea_height_config.md - sets the height of the component
- api/link/ui.textarea_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.textarea_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.textarea_id_config.md - the component ID
- api/link/ui.textarea_inputalign_config.md - the alignment of an input towards its container
- api/link/ui.textarea_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.textarea_inputpadding_config.md - padding of text in the input
- api/link/ui.textarea_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.textarea_invalid_config.md - specifies, whether the control is valid/invalid after validation
- api/link/ui.textarea_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.textarea_label_config.md - the text label of the control
- api/link/ui.textarea_labelalign_config.md - the alignment of a label towards its container
- api/link/ui.textarea_labelposition_config.md - positions label in relation to the control
- api/link/ui.textarea_labelwidth_config.md - the width of the label
- api/link/ui.textarea_maxheight_config.md - sets the maximum height for the view
- api/link/ui.textarea_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.textarea_minheight_config.md - sets the minimal height for the view
- api/link/ui.textarea_minwidth_config.md - sets the minimal width for the view
- api/link/ui.textarea_name_config.md - name of the control
- api/link/ui.textarea_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.textarea_pattern_config.md - a formatting pattern applied to a text input
- api/link/ui.textarea_placeholder_config.md - placeholder text for the input area
- api/link/ui.textarea_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.textarea_readonly_config.md - configures readonly mode for the input
- api/link/ui.textarea_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.textarea_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.textarea_required_config.md - marks field as required
- api/link/ui.textarea_suggest_config.md - links suggest list to the input
- api/link/ui.textarea_tooltip_config.md - tooltip for the input
- api/link/ui.textarea_validate_config.md - adds validation to the field
- api/link/ui.textarea_validateevent_config.md - on which event validation fires
- api/link/ui.textarea_value_config.md - sets the initial value for a control
- api/link/ui.textarea_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.textarea_$getsize_other.md - returns the current size of the component
- api/link/ui.textarea_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.textarea_$height_other.md - current height of the view
- api/link/ui.textarea_$render_other.md - code called after rending control
- api/link/ui.textarea_$rendericon_other.md - renders icon for the control
- api/link/ui.textarea_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.textarea_$renderlabel_other.md - renders html for the label
- api/link/ui.textarea_$scope_other.md - scope for resolving event and method names
- api/link/ui.textarea_$setsize_other.md - sets the component size
- api/link/ui.textarea_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.textarea_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.textarea_$view_other.md - reference to top html element of the view
- api/link/ui.textarea_$width_other.md - current width of the view
- api/link/ui.textarea_config_other.md - all options from initial component configuration
- api/link/ui.textarea_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.textarea_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.textarea_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.textarea_methods.md
- api/refs/ui.textarea_props.md
- api/refs/ui.textarea_events.md
- api/refs/ui.textarea_others.md

