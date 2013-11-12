ui.richselect 
=============


{{memo A non-editable combo box. }}

The control combines a non-editable text field with a drop-down list of predefined values.  Check [richselect](desktop__controls.md#richselect) documentation for more detailed description.

### Constructor

~~~js
	var richselect = webix.ui({
		view:"richselect", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_richselect({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.richselect_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.richselect_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.richselect_bind.md - binds components
- api/link/ui.richselect_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.richselect_blur.md - removes the focus from the control
- api/link/ui.richselect_callevent.md - calls an inner event
- api/link/ui.richselect_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.richselect_destructor.md - destructs the calling object
- api/link/ui.richselect_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.richselect_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.richselect_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.richselect_focus.md - sets focus to the control
- api/link/ui.richselect_getchildviews.md - returns child views of the calling component
- api/link/ui.richselect_getinputnode.md - gets the HTML element related to the component
- api/link/ui.richselect_getnode.md - returns the main HTML container for the calling object
- api/link/ui.richselect_getparentview.md - returns the parent view of the component
- api/ui.richselect_getpopup.md - return popup element of the input
- api/ui.richselect_getpopupview.md - returns an object of the dedicated popup view
- api/link/ui.richselect_gettopparentview.md - returns top parent view
- api/link/ui.richselect_getvalue.md - returns the current value of the control
- api/link/ui.richselect_hasevent.md - checks whether the component has the specified event
- api/link/ui.richselect_hide.md - hides the view
- api/link/ui.richselect_isenabled.md - checks whether the view is enabled
- api/link/ui.richselect_isvisible.md - checks whether the view is visible
- api/link/ui.richselect_mapevent.md - routes events from one object to another
- api/link/ui.richselect_refresh.md - repaints the component
- api/link/ui.richselect_render.md - renders the specified item or the whole component
- api/link/ui.richselect_resize.md - adjusts the view to a new size
- api/link/ui.richselect_setvalue.md - sets a new value for the component
- api/link/ui.richselect_show.md - makes the component visible
- api/link/ui.richselect_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.richselect_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/link/ui.richselect_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.richselect_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.richselect_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.richselect_onchange_event.md - fires when the value of the control is changed
- api/link/ui.richselect_ondestruct_event.md - occurs when component destroyed
- api/link/ui.richselect_onviewresize_event.md - view size was changed by resizer
}}


Properties
----------

{{links
- api/link/ui.richselect_align_config.md - the alignment of the control within the parent container
- api/link/ui.richselect_animate_config.md - defines or disables view change animation.
- api/link/ui.richselect_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.richselect_borderless_config.md - used to hide the component borders
- api/link/ui.richselect_click_config.md - click action handler
- api/link/ui.richselect_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.richselect_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.richselect_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.richselect_disabled_config.md - disables item
- api/link/ui.richselect_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.richselect_height_config.md - sets the height of the component
- api/link/ui.richselect_hidden_config.md - defines whether the view will be hidden initially
- api/ui.richselect_icon_config.md - sets an icon type
- api/link/ui.richselect_id_config.md - the component ID
- api/link/ui.richselect_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.richselect_inputpadding_config.md - padding of text in the input
- api/link/ui.richselect_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.richselect_label_config.md - the text label of the control
- api/link/ui.richselect_labelposition_config.md - positions label above the control
- api/link/ui.richselect_labelwidth_config.md - the width of the label
- api/link/ui.richselect_maxheight_config.md - sets the maximum height for the view
- api/link/ui.richselect_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.richselect_minheight_config.md - sets the minimal height for the view
- api/link/ui.richselect_minwidth_config.md - sets the minimal width for the view
- api/link/ui.richselect_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.richselect_options_config.md - defines data items of the drop-down list
- api/link/ui.richselect_popup_config.md - allows to attach pop-up menu to the button
- api/ui.richselect_popupwidth_config.md - width of the popup window
- api/link/ui.richselect_suggest_config.md - links suggest list to the input
- api/link/ui.richselect_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.richselect_template_config.md - the component template
- api/ui.richselect_text_config.md - visible text in the related input
- api/link/ui.richselect_type_config.md - the type of the control
- api/link/ui.richselect_value_config.md - sets the initial value for a control
- api/link/ui.richselect_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.richselect_$formelement_other.md - flag which instruct to process such view as form input
- api/link/ui.richselect_$getsize_other.md - returns the current size of the component
- api/link/ui.richselect_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.richselect_$height_other.md - current height of the view
- api/link/ui.richselect_$renderinput_other.md - renders html for the input
- api/link/ui.richselect_$setsize_other.md - sets the component size
- api/link/ui.richselect_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.richselect_$skin_other.md - method, which will be called when skin defined
- api/link/ui.richselect_$view_other.md - reference to top html element of the view
- api/link/ui.richselect_$width_other.md - current width of the view
- api/link/ui.richselect_config_other.md - all options from initial component configuration
- api/link/ui.richselect_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.richselect_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.richselect_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.richselect_methods.md
- api/refs/ui.richselect_props.md
- api/refs/ui.richselect_events.md
- api/refs/ui.richselect_others.md

