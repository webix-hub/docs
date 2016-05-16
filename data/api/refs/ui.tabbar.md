ui.tabbar 
=============


{{memo A panel that contains multiple clickable items. }}

Items of the component combine icons with text labels. The component can be used to build a multi-item menu for navigating between views. Check [tabbar](desktop/tabbar.md) documentation for more detailed description.


### Constructor

~~~js
webix.ui({ 
	rows:[
    	{view:"tabbar", id:'tabbar', value:'formView', multiview:true, options: [
      		{ value: 'Form', id: 'formView'},
      		{ value: 'Empty', id: 'emptyView'}
    	]},
    	{
		  cells:[
      		 {id:"formView",template:"Form Content"},
        	 {id:"emptyView", template:"Some content"}
      	]}
    ]
});
~~~

### Where to start

- [Overview of the Tabbar Control](desktop/tabbar.md)
- [Samples](http://docs.webix.com/samples/02_toolbar/02_tabbar.html)


<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.segmented.md">ui.segmented</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.tabbar_addoption.md - add a new option (segment) to the button
- api/link/ui.tabbar_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.tabbar_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.tabbar_bind.md - binds components
- api/link/ui.tabbar_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.tabbar_blur.md - removes the focus from the control
- api/link/ui.tabbar_callevent.md - calls an inner event
- api/link/ui.tabbar_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.tabbar_destructor.md - destructs the calling object
- api/link/ui.tabbar_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.tabbar_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.tabbar_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.tabbar_focus.md - sets focus to the control
- api/link/ui.tabbar_getchildviews.md - returns child views of the calling component
- api/link/ui.tabbar_getformview.md - returns master form for the input
- api/link/ui.tabbar_getinputnode.md - gets the HTML element related to the component
- api/link/ui.tabbar_getnode.md - returns the main HTML container for the calling object
- api/link/ui.tabbar_getparentview.md - returns the parent view of the component
- api/ui.tabbar_getpopup.md - return the optional popup with extra tabs
- api/link/ui.tabbar_gettopparentview.md - returns top parent view
- api/link/ui.tabbar_getvalue.md - returns the current value of the control
- api/link/ui.tabbar_hasevent.md - checks whether the component has the specified event
- api/link/ui.tabbar_hide.md - hides the view
- api/link/ui.tabbar_isenabled.md - checks whether the view is enabled
- api/link/ui.tabbar_isvisible.md - checks whether the view is visible
- api/link/ui.tabbar_mapevent.md - routes events from one object to another
- api/link/ui.tabbar_optionindex.md - index of the option with specified ID
- api/link/ui.tabbar_refresh.md - repaints the component
- api/link/ui.tabbar_removeoption.md - removes the option of a segmented button
- api/link/ui.tabbar_render.md - renders the specified item or the whole component
- api/link/ui.tabbar_resize.md - adjusts the view to a new size
- api/link/ui.tabbar_setbottomtext.md - sets the input label at the bottom of it
- api/link/ui.tabbar_setvalue.md - sets a new value for the component
- api/link/ui.tabbar_show.md - makes the component visible
- api/link/ui.tabbar_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.tabbar_unbind.md - breaks "bind" link
- api/link/ui.tabbar_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/ui.tabbar_validate.md - validates value of input
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.tabbar_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.tabbar_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.tabbar_onaftertabclick_event.md - fires after a segment has been clicked
- api/link/ui.tabbar_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.tabbar_onbeforetabclick_event.md - fires before a segment is clicked
- api/ui.tabbar_onbeforetabclose_event.md - fires before the tab is closed
- api/link/ui.tabbar_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.tabbar_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.tabbar_onchange_event.md - fires when the value of the control is changed
- api/link/ui.tabbar_ondestruct_event.md - occurs when component destroyed
- api/link/ui.tabbar_onfocus_event.md - fires when a view gets focus
- api/link/ui.tabbar_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.tabbar_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.tabbar_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.tabbar_onoptionremove_event.md - fires after the option (tab, segment) has been removed
- api/link/ui.tabbar_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.tabbar_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.tabbar_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.tabbar_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.tabbar_ontouchmove_event.md - occurs during touch movement
- api/link/ui.tabbar_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.tabbar_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.tabbar_align_config.md - the alignment of the control within the parent container
- api/link/ui.tabbar_animate_config.md - defines or disables view change animation.
- api/link/ui.tabbar_attributes_config.md - sets a hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.tabbar_autowidth_config.md - adjusts button to its text content
- api/link/ui.tabbar_borderless_config.md - used to hide the component borders
- api/link/ui.tabbar_bottomlabel_config.md - sets a label under a control
- api/ui.tabbar_bottomoffset_config.md - bottom offset of tabbar
- api/link/ui.tabbar_bottompadding_config.md - sets the bottom offset of the control input
- api/link/ui.tabbar_click_config.md - click action handler
- api/link/ui.tabbar_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.tabbar_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.tabbar_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.tabbar_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.tabbar_height_config.md - sets the height of the component
- api/link/ui.tabbar_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.tabbar_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.tabbar_id_config.md - the component ID
- api/link/ui.tabbar_inputalign_config.md - 
- api/link/ui.tabbar_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.tabbar_inputpadding_config.md - padding of text in the input
- api/link/ui.tabbar_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.tabbar_invalidmessage_config.md - sets the text of a validation message
- api/link/ui.tabbar_label_config.md - the text label of the control
- api/link/ui.tabbar_labelalign_config.md - 
- api/link/ui.tabbar_labelposition_config.md - positions label in relation to the control
- api/link/ui.tabbar_labelwidth_config.md - the width of the label
- api/link/ui.tabbar_maxheight_config.md - sets the maximum height for the view
- api/link/ui.tabbar_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.tabbar_minheight_config.md - sets the minimal height for the view
- api/link/ui.tabbar_minwidth_config.md - sets the minimal width for the view
- api/ui.tabbar_moretemplate_config.md - template for "more" button for responsive tabbar
- api/link/ui.tabbar_multiview_config.md - enables switching between multiview cells
- api/link/ui.tabbar_name_config.md - name of the control
- api/link/ui.tabbar_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.tabbar_optionwidth_config.md - sets the width of each view's option
- api/link/ui.tabbar_options_config.md - defines data items of the drop-down list
- api/link/ui.tabbar_placeholder_config.md - placeholder text for the input area
- api/link/ui.tabbar_popup_config.md - allows to attach pop-up menu to the button
- api/ui.tabbar_popuptemplate_config.md - template for items in popup for responsive tabbar
- api/ui.tabbar_popupwidth_config.md - width of popup for extra tabs
- api/link/ui.tabbar_readonly_config.md - configures readonly mode for the input
- api/link/ui.tabbar_relatedaction_config.md - action to call when value of cell changes
- api/link/ui.tabbar_relatedview_config.md - id of view, that will be affected by relatedAction operation
- api/link/ui.tabbar_required_config.md - marks field as required
- api/link/ui.tabbar_suggest_config.md - links suggest list to the input
- api/link/ui.tabbar_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/ui.tabbar_tabmargin_config.md - space between tabs
- api/ui.tabbar_tabminwidth_config.md - minimum width for responsive tabs
- api/ui.tabbar_tabmorewidth_config.md - width of "more" button in tabbar
- api/ui.tabbar_taboffset_config.md - left padding of first tab
- api/ui.tabbar_tabbarpopup_config.md - custom popup for responsive tabbar
- api/link/ui.tabbar_tooltip_config.md - tooltip for the input
- api/ui.tabbar_topoffset_config.md - top offset of tabbar
- api/link/ui.tabbar_type_config.md - the type of the control
- api/link/ui.tabbar_validate_config.md - adds validation to the field
- api/link/ui.tabbar_validateevent_config.md - on which event validation fires
- api/link/ui.tabbar_value_config.md - sets the initial value for a control
- api/link/ui.tabbar_width_config.md - sets the width of the component
- api/ui.tabbar_ycount_config.md - count of items in popup for responsive tabbar
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.tabbar_$getsize_other.md - returns the current size of the component
- api/link/ui.tabbar_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.tabbar_$height_other.md - current height of the view
- api/link/ui.tabbar_$render_other.md - code called after rending control
- api/link/ui.tabbar_$rendericon_other.md - renders icon for the control
- api/link/ui.tabbar_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.tabbar_$renderlabel_other.md - renders html for the label
- api/link/ui.tabbar_$scope_other.md - scope for resolving event and method names
- api/link/ui.tabbar_$setsize_other.md - sets the component size
- api/link/ui.tabbar_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.tabbar_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.tabbar_$view_other.md - reference to top html element of the view
- api/link/ui.tabbar_$width_other.md - current width of the view
- api/link/ui.tabbar_config_other.md - all options from initial component configuration
- api/link/ui.tabbar_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.tabbar_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.tabbar_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.tabbar_methods.md
- api/refs/ui.tabbar_props.md
- api/refs/ui.tabbar_events.md
- api/refs/ui.tabbar_others.md

