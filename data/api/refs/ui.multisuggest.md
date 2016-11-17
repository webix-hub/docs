ui.multisuggest 
=============

{{memo A suggest control with a multiple-choice list.. }}

Offers select options in the form of Webix [list](api/refs/ui.list.md) component with the ability to select multiple items at a time.

Can be used standalone or as a suggest list for [text](api/refs/ui.text.md), [combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls as well as component [editors](api/refs/editors.md).

### Constructor

~~~js
webix.ui({ 
	view:"richselect", 
  	label:"Data", 
  	value:1, options:{
    	view:"multisuggest",
		data:[
      		{ id:1, value:"Alex Brown" },
      		{ id:2, value:"Dan Simons" },
      		{ id:3, value:"Gron Alanski" },
      		{ id:4, value:"Dan Alanski" }
		]
	}		
});
~~~

### Where to start

- [Overview of the Multisuggest Control](desktop/suggest.md#advancedsuggestlists)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/02_multiselect.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.suggest.md">ui.suggest</a>, <a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.multisuggest_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.multisuggest_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.multisuggest_bind.md - binds components
- api/link/ui.multisuggest_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.multisuggest_callevent.md - calls an inner event
- api/link/ui.multisuggest_close.md - removes a window
- api/link/ui.multisuggest_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.multisuggest_destructor.md - destructs the calling object
- api/link/ui.multisuggest_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.multisuggest_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.multisuggest_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.multisuggest_getbody.md - gets the UI view of the window body
- api/ui.multisuggest_getbutton.md - gets the button object of a multiselect popup
- api/link/ui.multisuggest_getchildviews.md - returns child views of the calling component
- api/link/ui.multisuggest_getformview.md - returns master form for the input
- api/link/ui.multisuggest_gethead.md - gets the ui view of the window header
- api/link/ui.multisuggest_getitemtext.md - returns rendered text of suggest's item
- api/link/ui.multisuggest_getlist.md - returns inner data control from suggest
- api/link/ui.multisuggest_getmastervalue.md - returns current value of master control
- api/link/ui.multisuggest_getnode.md - returns the main HTML container for the calling object
- api/link/ui.multisuggest_getparentview.md - returns the parent view of the component
- api/link/ui.multisuggest_getsuggestion.md - returns id of top suggestion from the suggest list
- api/link/ui.multisuggest_gettopparentview.md - returns top parent view
- api/link/ui.multisuggest_getvalue.md - gets the ID of a selected item in the option list
- api/link/ui.multisuggest_hasevent.md - checks whether the component has the specified event
- api/link/ui.multisuggest_hide.md - hides the view
- api/link/ui.multisuggest_isenabled.md - checks whether the view is enabled
- api/link/ui.multisuggest_isvisible.md - checks whether the view is visible
- api/link/ui.multisuggest_linkinput.md - links a suggest list to an input field
- api/link/ui.multisuggest_mapevent.md - routes events from one object to another
- api/link/ui.multisuggest_resize.md - adjusts the view to a new size
- api/link/ui.multisuggest_resizechildren.md - resizes all children of the calling component
- api/link/ui.multisuggest_setmastervalue.md - set value in master control
- api/link/ui.multisuggest_setposition.md - sets window's position
- api/link/ui.multisuggest_setvalue.md - selects an item in the option list
- api/link/ui.multisuggest_show.md - makes the component visible
- api/link/ui.multisuggest_unbind.md - breaks "bind" link
- api/link/ui.multisuggest_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.multisuggest_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.multisuggest_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.multisuggest_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.multisuggest_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.multisuggest_ondestruct_event.md - occurs when component destroyed
- api/link/ui.multisuggest_onfocus_event.md - fires when a view gets focus
- api/link/ui.multisuggest_onhide_event.md - fires when window is hidden
- api/link/ui.multisuggest_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.multisuggest_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.multisuggest_onshow_event.md - fires when window is shown
- api/link/ui.multisuggest_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.multisuggest_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.multisuggest_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.multisuggest_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.multisuggest_ontouchmove_event.md - occurs during touch movement
- api/link/ui.multisuggest_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.multisuggest_onvaluesuggest_event.md - some item selected in the suggest control
- api/link/ui.multisuggest_onviewmove_event.md - fires while view is moving
- api/link/ui.multisuggest_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.multisuggest_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.multisuggest_animate_config.md - defines or disables view change animation.
- api/link/ui.multisuggest_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.multisuggest_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.multisuggest_body_config.md - the content of window body: template or view
- api/link/ui.multisuggest_borderless_config.md - used to hide the component borders
- api/ui.multisuggest_button_config.md - sets a button at the bottom of the suggest
- api/ui.multisuggest_buttontext_config.md - defines text for the 'Select' button
- api/link/ui.multisuggest_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.multisuggest_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.multisuggest_data_config.md - JavaScript array containing data for the component
- api/link/ui.multisuggest_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.multisuggest_filter_config.md - custom filtering function
- api/link/ui.multisuggest_fitmaster_config.md - size suggest box to the master control
- api/link/ui.multisuggest_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.multisuggest_head_config.md - sets the view header
- api/link/ui.multisuggest_headheight_config.md - defines the header height (43 by default)
- api/link/ui.multisuggest_height_config.md - sets the height of the component
- api/link/ui.multisuggest_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.multisuggest_id_config.md - the component ID
- api/link/ui.multisuggest_input_config.md - points to an  HTML input field that houses the suggest list
- api/link/ui.multisuggest_keypresstimeout_config.md - time between key pressing and filtering start
- api/link/ui.multisuggest_left_config.md - the left offset of the window
- api/link/ui.multisuggest_master_config.md - reference to the master view
- api/link/ui.multisuggest_maxheight_config.md - sets the maximum height for the view
- api/link/ui.multisuggest_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.multisuggest_minheight_config.md - sets the minimal height for the view
- api/link/ui.multisuggest_minwidth_config.md - sets the minimal width for the view
- api/link/ui.multisuggest_modal_config.md - switches window modality
- api/link/ui.multisuggest_move_config.md - makes view movable
- api/link/ui.multisuggest_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.multisuggest_padding_config.md - sets paddings of the chart content
- api/link/ui.multisuggest_position_config.md - sets position of the window relative to the the screen
- api/link/ui.multisuggest_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.multisuggest_resize_config.md - enables/disables window resizing
- api/ui.multisuggest_separator_config.md - sets a delimiter for multisuggest values
- api/link/ui.multisuggest_template_config.md - template which will be used to fill parent input from selected record
- api/link/ui.multisuggest_textvalue_config.md - defines which field from suggest list will be used as text after selecting an option
- api/link/ui.multisuggest_tofront_config.md - places window above other windows on clicking it
- api/link/ui.multisuggest_top_config.md - the top offset of a window
- api/link/ui.multisuggest_type_config.md - defines type of suggest control
- api/link/ui.multisuggest_url_config.md - the URL which the component will use to load data after its initialization
- api/ui.multisuggest_value_config.md - sets the initial value for a control
- api/link/ui.multisuggest_width_config.md - sets the width of the component
- api/link/ui.multisuggest_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.multisuggest_$enterkey_other.md - 
- api/link/ui.multisuggest_$getsize_other.md - returns the current size of the component
- api/link/ui.multisuggest_$height_other.md - current height of the view
- api/link/ui.multisuggest_$scope_other.md - scope for resolving event and method names
- api/link/ui.multisuggest_$setsize_other.md - sets the component size
- api/link/ui.multisuggest_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.multisuggest_$view_other.md - reference to top html element of the view
- api/link/ui.multisuggest_$width_other.md - current width of the view
- api/link/ui.multisuggest_config_other.md - all options from initial component configuration
- api/link/ui.multisuggest_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.multisuggest_methods.md
- api/refs/ui.multisuggest_props.md
- api/refs/ui.multisuggest_events.md
- api/refs/ui.multisuggest_others.md

