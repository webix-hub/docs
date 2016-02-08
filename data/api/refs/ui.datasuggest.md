ui.datasuggest 
=============


{{memo A dataview-based suggest control.. }}

Offers select options in the form of Webix [dataview](api/refs/ui.dataview.md) component.

Can be used standalone or as a suggest list for [text](api/refs/ui.text.md), [combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls 
as well as the [editor](api/refs/editors.md) component.

###Constructor

~~~js
webix.ui({
  view:"richselect", 
  label:"Data", 
  value:1, options:{
	view:"datasuggest", data:[
    	{id:1, value:"One", year:1988, color:"Red"}, 
      	{id:2, value:"Two", year:1996, color:"Blue"},
      	{id:3, value:"Three", year:1997, color:"Green"}, 
      	{id:4, value:"Four", year:2011, color:"Orange"},
      	{id:5, value:"Five", year:2000, color:"Grey"}, 
      	{id:6, value:"Six", year: 1994, color:"Yellow"}]
	}
});
~~~

###Where to start

- [Overview of Dataview Suggest](desktop/datasuggest.md)
- [Samples](http://docs.webix.com/samples/32_thirdparty/14_dataselect.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.suggest.md">ui.suggest</a>, <a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.datasuggest_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.datasuggest_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.datasuggest_bind.md - binds components
- api/link/ui.datasuggest_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.datasuggest_callevent.md - calls an inner event
- api/link/ui.datasuggest_close.md - removes a window
- api/link/ui.datasuggest_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.datasuggest_destructor.md - destructs the calling object
- api/link/ui.datasuggest_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.datasuggest_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.datasuggest_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.datasuggest_getbody.md - gets the ui view of the window body
- api/link/ui.datasuggest_getchildviews.md - returns child views of the calling component
- api/link/ui.datasuggest_getformview.md - returns master form for the input
- api/link/ui.datasuggest_gethead.md - gets the ui view of the window header
- api/link/ui.datasuggest_getitemtext.md - returns rendered text of suggest's item
- api/link/ui.datasuggest_getlist.md - returns inner data control from suggest
- api/link/ui.datasuggest_getmastervalue.md - returns current value of master control
- api/link/ui.datasuggest_getnode.md - returns the main HTML container for the calling object
- api/link/ui.datasuggest_getparentview.md - returns the parent view of the component
- api/link/ui.datasuggest_getsuggestion.md - returns id of top suggestion from the suggest list
- api/link/ui.datasuggest_gettopparentview.md - returns top parent view
- api/link/ui.datasuggest_getvalue.md - gets the ID of a selected item in the option list
- api/link/ui.datasuggest_hasevent.md - checks whether the component has the specified event
- api/link/ui.datasuggest_hide.md - hides the view
- api/link/ui.datasuggest_isenabled.md - checks whether the view is enabled
- api/link/ui.datasuggest_isvisible.md - checks whether the view is visible
- api/link/ui.datasuggest_linkinput.md - links a suggest list to an input field
- api/link/ui.datasuggest_mapevent.md - routes events from one object to another
- api/link/ui.datasuggest_resize.md - adjusts the view to a new size
- api/link/ui.datasuggest_resizechildren.md - resizes all children of the calling component
- api/link/ui.datasuggest_setmastervalue.md - set value in master control
- api/link/ui.datasuggest_setposition.md - sets window's position
- api/link/ui.datasuggest_setvalue.md - selects an item in the option list
- api/link/ui.datasuggest_show.md - makes the component visible
- api/link/ui.datasuggest_unbind.md - breaks "bind" link
- api/link/ui.datasuggest_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.datasuggest_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.datasuggest_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.datasuggest_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.datasuggest_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.datasuggest_ondestruct_event.md - occurs when component destroyed
- api/link/ui.datasuggest_onfocus_event.md - fires when a view gets focus
- api/link/ui.datasuggest_onhide_event.md - fires when window is hidden
- api/link/ui.datasuggest_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.datasuggest_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.datasuggest_onshow_event.md - fires when window is shown
- api/link/ui.datasuggest_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.datasuggest_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.datasuggest_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.datasuggest_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.datasuggest_ontouchmove_event.md - occurs during touch movement
- api/link/ui.datasuggest_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.datasuggest_onvaluesuggest_event.md - some item selected in the suggest control
- api/link/ui.datasuggest_onviewmove_event.md - fires while view is moving
- api/link/ui.datasuggest_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.datasuggest_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.datasuggest_animate_config.md - defines or disables view change animation.
- api/link/ui.datasuggest_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.datasuggest_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.datasuggest_body_config.md - the content of window body: template or view
- api/link/ui.datasuggest_borderless_config.md - used to hide the component borders
- api/link/ui.datasuggest_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.datasuggest_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.datasuggest_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.datasuggest_filter_config.md - custom filtering function
- api/link/ui.datasuggest_fitmaster_config.md - size suggest box to the master control
- api/link/ui.datasuggest_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.datasuggest_head_config.md - sets the view header
- api/link/ui.datasuggest_headheight_config.md - defines the header height (43 by default)
- api/link/ui.datasuggest_height_config.md - sets the height of the component
- api/link/ui.datasuggest_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.datasuggest_id_config.md - the component ID
- api/link/ui.datasuggest_input_config.md - points to an  HTML input field that houses the suggest list
- api/link/ui.datasuggest_keypresstimeout_config.md - time between key pressing and filtering start
- api/link/ui.datasuggest_left_config.md - the left offset of the window
- api/link/ui.datasuggest_master_config.md - reference to the master view
- api/link/ui.datasuggest_maxheight_config.md - sets the maximum height for the view
- api/link/ui.datasuggest_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.datasuggest_minheight_config.md - sets the minimal height for the view
- api/link/ui.datasuggest_minwidth_config.md - sets the minimal width for the view
- api/link/ui.datasuggest_modal_config.md - switches window modality
- api/link/ui.datasuggest_move_config.md - makes view movable
- api/link/ui.datasuggest_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.datasuggest_padding_config.md - sets paddings of the chart content
- api/link/ui.datasuggest_position_config.md - sets position of the window relative to the the screen
- api/link/ui.datasuggest_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.datasuggest_resize_config.md - enables/disables window resizing
- api/link/ui.datasuggest_template_config.md - template which will be used to fill parent input from selected record
- api/link/ui.datasuggest_textvalue_config.md - defines which field from suggest list will be used as text after selecting an option
- api/link/ui.datasuggest_tofront_config.md - places window above other windows on clicking it
- api/link/ui.datasuggest_top_config.md - the top offset of a window
- api/link/ui.datasuggest_type_config.md - defines type of suggest control
- api/link/ui.datasuggest_width_config.md - sets the width of the component
- api/link/ui.datasuggest_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.datasuggest_$getsize_other.md - returns the current size of the component
- api/link/ui.datasuggest_$height_other.md - current height of the view
- api/link/ui.datasuggest_$scope_other.md - scope for resolving event and method names
- api/link/ui.datasuggest_$setsize_other.md - sets the component size
- api/link/ui.datasuggest_$skin_other.md - method, which will be called when skin defined
- api/link/ui.datasuggest_$view_other.md - reference to top html element of the view
- api/link/ui.datasuggest_$width_other.md - current width of the view
- api/link/ui.datasuggest_config_other.md - all options from initial component configuration
- api/link/ui.datasuggest_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.datasuggest_methods.md
- api/refs/ui.datasuggest_props.md
- api/refs/ui.datasuggest_events.md
- api/refs/ui.datasuggest_others.md

