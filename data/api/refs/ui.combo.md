ui.combo 
=============


{{memo An editable combo box. }}

The control combines an editable text field with a drop-down list of predefined values. Provides autocomplete feature that suggests possible matches while a user types in the text field. Check [combo](desktop__controls.md#combo) documentation for more detailed description.

### Constructor

~~~js
	var combo = webix.ui({
		view:"combo", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_combo({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.richselect.md">ui.richselect</a>, <a href="api/refs/ui.text.md">ui.text</a>, <a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>

Methods
-------

{{links
- api/link/ui.combo_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.combo_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.combo_bind.md - binds components
- api/link/ui.combo_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.combo_blur.md - removes the focus from the control
- api/link/ui.combo_callevent.md - calls an inner event
- api/link/ui.combo_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.combo_destructor.md - destructs the calling object
- api/link/ui.combo_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.combo_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.combo_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.combo_focus.md - sets focus to the control
- api/link/ui.combo_getchildviews.md - returns child views of the calling component
- api/link/ui.combo_getinputnode.md - gets the HTML element related to the component
- api/link/ui.combo_getnode.md - returns the main HTML container for the calling object
- api/link/ui.combo_getparentview.md - returns the parent view of the component
- api/link/ui.combo_getpopup.md - return popup element of the input
- api/link/ui.combo_getpopupview.md - returns an object of the dedicated popup view
- api/link/ui.combo_gettopparentview.md - returns top parent view
- api/link/ui.combo_getvalue.md - returns the current value of the control
- api/link/ui.combo_hasevent.md - checks whether the component has the specified event
- api/link/ui.combo_hide.md - hides the view
- api/link/ui.combo_isenabled.md - checks whether the view is enabled
- api/link/ui.combo_isvisible.md - checks whether the view is visible
- api/link/ui.combo_mapevent.md - routes events from one object to another
- api/link/ui.combo_refresh.md - repaints the component
- api/link/ui.combo_render.md - renders the specified item or the whole component
- api/link/ui.combo_resize.md - adjusts the view to a new size
- api/link/ui.combo_setvalue.md - sets a new value for the component
- api/link/ui.combo_show.md - makes the component visible
- api/link/ui.combo_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.combo_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


Events
------

{{links
- api/link/ui.combo_onafterrender_event.md - occurs immediately after the component has been rendered
- api/link/ui.combo_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.combo_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.combo_onchange_event.md - fires when the value of the control is changed
}}


Properties
----------

{{links
- api/link/ui.combo_align_config.md - the alignment of the control within the parent container
- api/link/ui.combo_animate_config.md - defines or disables view change animation.
- api/link/ui.combo_attributes_config.md - sets an hash of HTML input attributes that will be parsed for the Webix input control
- api/link/ui.combo_borderless_config.md - used to hide the component borders
- api/link/ui.combo_click_config.md - click action handler
- api/link/ui.combo_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.combo_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.combo_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.combo_disabled_config.md - disables item
- api/link/ui.combo_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.combo_height_config.md - sets the height of the component
- api/link/ui.combo_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.combo_icon_config.md - sets an icon type
- api/link/ui.combo_id_config.md - the component ID
- api/link/ui.combo_inputheight_config.md - the height of the input area, or a button's text value area.
- api/link/ui.combo_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.combo_label_config.md - the text label of the control
- api/link/ui.combo_labelposition_config.md - positions label above the control
- api/link/ui.combo_labelwidth_config.md - the width of the label
- api/link/ui.combo_maxheight_config.md - sets the maximum height for the view
- api/link/ui.combo_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.combo_minheight_config.md - sets the minimal height for the view
- api/link/ui.combo_minwidth_config.md - sets the minimal width for the view
- api/link/ui.combo_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.combo_options_config.md - defines data items of the drop-down list
- api/link/ui.combo_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.combo_popupwidth_config.md - width of the popup window
- api/link/ui.combo_suggest_config.md - links suggest list to the input
- api/link/ui.combo_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.combo_template_config.md - the component template
- api/link/ui.combo_text_config.md - visible text in the related input
- api/link/ui.combo_type_config.md - the type of the control
- api/link/ui.combo_value_config.md - sets the initial value for a control
- api/link/ui.combo_width_config.md - sets the width of the component
}}




Other
-----

{{links
- api/link/ui.combo_$formelement_other.md - flag which instruct to process such view as form input
- api/link/ui.combo_$getsize_other.md - returns the current size of the component
- api/link/ui.combo_$height_other.md - current height of the view
- api/link/ui.combo_$setsize_other.md - sets the component size
- api/link/ui.combo_$skin_other.md - method, which will be called when skin defined
- api/link/ui.combo_$view_other.md - reference to top html element of the view
- api/link/ui.combo_$width_other.md - current width of the view
- api/link/ui.combo_config_other.md - all options from initial component configuration
- api/link/ui.combo_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.combo_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.combo_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.combo_methods.md
- api/refs/ui.combo_props.md
- api/refs/ui.combo_events.md
- api/refs/ui.combo_others.md

