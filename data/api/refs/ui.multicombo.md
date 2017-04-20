ui.multicombo 
=============


{{memo An editable combo box that allows choosing several options from a suggest list at once.. }}

The control combines an editable text field with a suggest list that contains predefined options. Each option has a checkbox which is checked if the option is selected.
The list can be supplied with a customizable 'Select' button to enter selected items to the input. 

Check [multicombo](desktop/multicombo.md) documentation for more detailed description.

### Constructor

~~~js
var multicombo = webix.ui({
 	view:"multicombo", 
  	label:"To", 
  	value:"1,3", 
  	options:[
 		{"id":1,"value":"Ray M. Parra"},
      	{"id":2,"value":"Sabrina N. Hermann"},
      	{"id":3,"value":"Lane E. Dion"},
      	{"id":4,"value":"Bradly N. Mauro"}
  	]
});
~~~

### Where to start

- [Overview of the Multicombo Control](desktop/multicombo.md)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.richselect.md">ui.richselect</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.multicombo_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.multicombo_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.multicombo_bind.md - binds components
- api/link/ui.multicombo_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.multicombo_blur.md - removes the focus from the control
- api/link/ui.multicombo_callevent.md - calls an inner event
- api/link/ui.multicombo_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.multicombo_destructor.md - destructs the calling object
- api/link/ui.multicombo_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.multicombo_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.multicombo_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.multicombo_focus.md - sets focus to the control
- api/link/ui.multicombo_getchildviews.md - returns child views of the calling component
- api/link/ui.multicombo_getformview.md - returns master form for the input
- api/link/ui.multicombo_getinputnode.md - gets the HTML element related to the component
- api/link/ui.multicombo_getlist.md - returns list view of the control
- api/link/ui.multicombo_getnode.md - returns the main HTML container for the calling object
- api/link/ui.multicombo_getparentview.md - returns the parent view of the component
- api/link/ui.multicombo_getpopup.md - returns popup element of the input
- api/link/ui.multicombo_gettext.md - returns text of currently selected option
- api/link/ui.multicombo_gettopparentview.md - returns top parent view
- api/link/ui.multicombo_getvalue.md - returns the current value of the control
- api/link/ui.multicombo_hasevent.md - checks whether the component has the specified event
- api/link/ui.multicombo_hide.md - hides the view
- api/link/ui.multicombo_isenabled.md - checks whether the view is enabled
- api/link/ui.multicombo_isvisible.md - checks whether the view is visible
- api/link/ui.multicombo_mapevent.md - routes events from one object to another
- api/link/ui.multicombo_refresh.md - repaints the component
- api/link/ui.multicombo_render.md - renders the specified item or the whole component
- api/link/ui.multicombo_resize.md - adjusts the view to a new size
- api/link/ui.multicombo_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.multicombo_setvalue.md - sets a new value for the component
- api/link/ui.multicombo_show.md - makes the component visible
- api/link/ui.multicombo_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.multicombo_unbind.md - breaks "bind" link
- api/link/ui.multicombo_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.multicombo_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.multicombo_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.multicombo_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.multicombo_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.multicombo_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.multicombo_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.multicombo_onchange_event.md - fires when the value of the control is changed
- api/link/ui.multicombo_ondestruct_event.md - occurs when component destroyed
- api/link/ui.multicombo_onfocus_event.md - fires when a view gets focus
- api/link/ui.multicombo_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.multicombo_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.multicombo_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.multicombo_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.multicombo_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.multicombo_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.multicombo_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.multicombo_ontouchmove_event.md - occurs during touch movement
- api/link/ui.multicombo_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.multicombo_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.multicombo_align_config.md - the alignment of the control within the parent container
- api/link/ui.multicombo_animate_config.md - defines or disables view change animation.
- api/link/ui.multicombo_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.multicombo_autowidth_config.md - adjusts button to its text content
- api/link/ui.multicombo_borderless_config.md - used to hide the component borders
- api/link/ui.multicombo_bottomlabel_config.md - sets a label under a control
- api/link/ui.multicombo_bottompadding_config.md - sets the bottom offset of the control input
- api/ui.multicombo_button_config.md - defines whether the "Select" button will be displayed in the options list
- api/link/ui.multicombo_click_config.md - click action handler
- api/link/ui.multicombo_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.multicombo_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.multicombo_disabled_config.md - indicates whether an item is enabled
- api/link/ui.multicombo_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.multicombo_height_config.md - sets the height of the component
- api/link/ui.multicombo_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.multicombo_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.multicombo_id_config.md - the component ID
- api/link/ui.multicombo_inputalign_config.md - the alignment of an input towards its container
- api/link/ui.multicombo_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.multicombo_inputpadding_config.md - padding of text in the input
- api/link/ui.multicombo_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.multicombo_invalid_config.md - specifies, whether the control is valid/invalid after validation
- api/link/ui.multicombo_invalidmessage_config.md - sets the text of a validation message
- api/ui.multicombo_keeptext_config.md - defines whether the entered text should be kept in the input after an option is selected
- api/link/ui.multicombo_label_config.md - the text label of the control
- api/link/ui.multicombo_labelalign_config.md - the alignment of a label towards its container
- api/link/ui.multicombo_labelposition_config.md - positions label in relation to the control
- api/link/ui.multicombo_labelwidth_config.md - the width of the label
- api/link/ui.multicombo_maxheight_config.md - sets the maximum height for the view
- api/link/ui.multicombo_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.multicombo_minheight_config.md - sets the minimal height for the view
- api/link/ui.multicombo_minwidth_config.md - sets the minimal width for the view
- api/link/ui.multicombo_name_config.md - name of the control
- api/ui.multicombo_newvalues_config.md - allows to enter new values into a multicombo field
- api/link/ui.multicombo_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.multicombo_optionwidth_config.md - sets the width of the suggest list with options
- api/link/ui.multicombo_options_config.md - defines data items of the drop-down list
- api/link/ui.multicombo_placeholder_config.md - placeholder text for the input area
- api/link/ui.multicombo_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.multicombo_popupwidth_config.md - width of the popup window
- api/link/ui.multicombo_readonly_config.md - configures readonly mode for the input
- api/link/ui.multicombo_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.multicombo_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.multicombo_required_config.md - marks field as required
- api/ui.multicombo_separator_config.md - a delimiter for separating options in a multicombo, comma by default
- api/link/ui.multicombo_suggest_config.md - links suggest list to the input
- api/ui.multicombo_tagmode_config.md - defines presentation mode of input values
- api/ui.multicombo_tagtemplate_config.md - defines template of input values
- api/link/ui.multicombo_tooltip_config.md - tooltip for the input
- api/link/ui.multicombo_validate_config.md - adds validation to the field
- api/link/ui.multicombo_validateevent_config.md - on which event validation fires
- api/link/ui.multicombo_value_config.md - sets the initial value for a control
- api/link/ui.multicombo_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.multicombo_$comparevalue_other.md - compares the old value of the control with the one that is going to be set
- api/ui.multicombo_$cssname_other.md - name of the widget the CSS of which you want to inherit for a custom widget
- api/link/ui.multicombo_$getsize_other.md - returns the current size of the component
- api/link/ui.multicombo_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.multicombo_$height_other.md - current height of the view
- api/link/ui.multicombo_$preparevalue_other.md - adjusts the value that is going to be set to the format expected by the control
- api/link/ui.multicombo_$render_other.md - code called after rending control
- api/link/ui.multicombo_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.multicombo_$renderlabel_other.md - renders html for the label
- api/link/ui.multicombo_$scope_other.md - scope for resolving event and method names
- api/link/ui.multicombo_$setsize_other.md - sets the component size
- api/link/ui.multicombo_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.multicombo_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.multicombo_$view_other.md - reference to top html element of the view
- api/link/ui.multicombo_$width_other.md - current width of the view
- api/link/ui.multicombo_config_other.md - all options from initial component configuration
- api/link/ui.multicombo_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.multicombo_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.multicombo_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.multicombo_methods.md
- api/refs/ui.multicombo_props.md
- api/refs/ui.multicombo_events.md
- api/refs/ui.multicombo_others.md

