ui.gridsuggest 
=============

{{memo A datatable-based suggest control.. }}

Offers select options in the form of Webix [datatable](api/refs/ui.datatable.md) component. 

Can be used standalone or as a suggest list for [text](api/refs/ui.text.md), [combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls, 
as well as component [editors](api/refs/editors.md).

###Constructor

~~~js
webix.ui({
	view:"richselect", 
  	value:1, 
  	options:{
		view:"gridsuggest",
     	data:[
        	{id:1, name:"One", year:1988, color:"Red"}, 
			{id:2, name:"Two", year:1996, color:"Blue"},
			{id:3, name:"Three", year:1997, color:"Green"}, 
			{id:4, name:"Four", year:2011, color:"Orange"},
			{id:5, name:"Five", year:2000, color:"Grey"}, 
			{id:6, name:"Six", year: 1994, color:"Yellow"}
        ]
    }
});
~~~

###Where to start

- [Overview of Grid Suggest](desktop/gridsuggest.md)
- [Samples](http://docs.webix.com/samples/32_thirdparty/13_gridselect.html)



<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.suggest.md">ui.suggest</a>, <a href="api/refs/ui.popup.md">ui.popup</a>, <a href="api/refs/ui.window.md">ui.window</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/movable.md">Movable</a>, <a href="api/refs/modality.md">Modality</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.gridsuggest_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.gridsuggest_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.gridsuggest_bind.md - binds components
- api/link/ui.gridsuggest_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.gridsuggest_callevent.md - calls an inner event
- api/link/ui.gridsuggest_close.md - removes a window
- api/link/ui.gridsuggest_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.gridsuggest_destructor.md - destructs the calling object
- api/link/ui.gridsuggest_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.gridsuggest_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.gridsuggest_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.gridsuggest_getbody.md - gets the UI view of the window body
- api/link/ui.gridsuggest_getchildviews.md - returns child views of the calling component
- api/link/ui.gridsuggest_getformview.md - returns master form for the input
- api/link/ui.gridsuggest_gethead.md - gets the ui view of the window header
- api/link/ui.gridsuggest_getitemtext.md - returns rendered text of suggest's item
- api/link/ui.gridsuggest_getlist.md - returns inner data control from suggest
- api/link/ui.gridsuggest_getmastervalue.md - returns current value of master control
- api/link/ui.gridsuggest_getnode.md - returns the main HTML container for the calling object
- api/link/ui.gridsuggest_getparentview.md - returns the parent view of the component
- api/link/ui.gridsuggest_getsuggestion.md - returns id of top suggestion from the suggest list
- api/link/ui.gridsuggest_gettopparentview.md - returns top parent view
- api/link/ui.gridsuggest_getvalue.md - gets the ID of a selected item in the option list
- api/link/ui.gridsuggest_hasevent.md - checks whether the component has the specified event
- api/link/ui.gridsuggest_hide.md - hides the view
- api/link/ui.gridsuggest_isenabled.md - checks whether the view is enabled
- api/link/ui.gridsuggest_isvisible.md - checks whether the view is visible
- api/link/ui.gridsuggest_linkinput.md - links a suggest list to an input field
- api/link/ui.gridsuggest_mapevent.md - routes events from one object to another
- api/link/ui.gridsuggest_resize.md - adjusts the view to a new size
- api/link/ui.gridsuggest_resizechildren.md - resizes all children of the calling component
- api/link/ui.gridsuggest_setmastervalue.md - set value in master control
- api/link/ui.gridsuggest_setposition.md - sets window's position
- api/link/ui.gridsuggest_setvalue.md - selects an item in the option list
- api/link/ui.gridsuggest_show.md - makes the component visible
- api/link/ui.gridsuggest_unbind.md - breaks "bind" link
- api/link/ui.gridsuggest_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.gridsuggest_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.gridsuggest_onbeforeshow_event.md - fires right after show() method is called for the window (popup) and before the window is shown
- api/link/ui.gridsuggest_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.gridsuggest_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.gridsuggest_ondestruct_event.md - occurs when component destroyed
- api/link/ui.gridsuggest_onfocus_event.md - fires when a view gets focus
- api/link/ui.gridsuggest_onhide_event.md - fires when window is hidden
- api/link/ui.gridsuggest_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.gridsuggest_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.gridsuggest_onshow_event.md - fires when window is shown
- api/link/ui.gridsuggest_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.gridsuggest_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.gridsuggest_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.gridsuggest_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.gridsuggest_ontouchmove_event.md - occurs during touch movement
- api/link/ui.gridsuggest_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.gridsuggest_onvaluesuggest_event.md - some item selected in the suggest control
- api/link/ui.gridsuggest_onviewmove_event.md - fires while view is moving
- api/link/ui.gridsuggest_onviewmoveend_event.md - fires when view has stopped moving
- api/link/ui.gridsuggest_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.gridsuggest_animate_config.md - defines or disables view change animation.
- api/link/ui.gridsuggest_autofit_config.md - adjusts window size to the size of an html node it is initiated in
- api/link/ui.gridsuggest_autofocus_config.md - sets focus on the window the moment it appears on the page
- api/link/ui.gridsuggest_body_config.md - the content of window body: template or view
- api/link/ui.gridsuggest_borderless_config.md - used to hide the component borders
- api/link/ui.gridsuggest_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.gridsuggest_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.gridsuggest_data_config.md - JavaScript array containing data for the component
- api/link/ui.gridsuggest_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.gridsuggest_filter_config.md - custom filtering function
- api/link/ui.gridsuggest_fitmaster_config.md - size suggest box to the master control
- api/link/ui.gridsuggest_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.gridsuggest_head_config.md - sets the view header
- api/link/ui.gridsuggest_headheight_config.md - defines the header height (43 by default)
- api/link/ui.gridsuggest_height_config.md - sets the height of the component
- api/link/ui.gridsuggest_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.gridsuggest_id_config.md - the component ID
- api/link/ui.gridsuggest_input_config.md - points to an  HTML input field that houses the suggest list
- api/link/ui.gridsuggest_keypresstimeout_config.md - time between key pressing and filtering start
- api/link/ui.gridsuggest_left_config.md - the left offset of the window
- api/link/ui.gridsuggest_master_config.md - reference to the master view
- api/link/ui.gridsuggest_maxheight_config.md - sets the maximum height for the view
- api/link/ui.gridsuggest_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.gridsuggest_minheight_config.md - sets the minimal height for the view
- api/link/ui.gridsuggest_minwidth_config.md - sets the minimal width for the view
- api/link/ui.gridsuggest_modal_config.md - switches window modality
- api/link/ui.gridsuggest_move_config.md - makes view movable
- api/link/ui.gridsuggest_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.gridsuggest_padding_config.md - sets paddings of the chart content
- api/link/ui.gridsuggest_position_config.md - sets position of the window relative to the the screen
- api/link/ui.gridsuggest_relative_config.md - positions a popup window relative to the component it's connected with
- api/link/ui.gridsuggest_resize_config.md - enables/disables window resizing
- api/link/ui.gridsuggest_template_config.md - template which will be used to fill parent input from selected record
- api/link/ui.gridsuggest_textvalue_config.md - defines which field from suggest list will be used as text after selecting an option
- api/link/ui.gridsuggest_tofront_config.md - places window above other windows on clicking it
- api/link/ui.gridsuggest_top_config.md - the top offset of a window
- api/link/ui.gridsuggest_type_config.md - defines type of suggest control
- api/link/ui.gridsuggest_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.gridsuggest_width_config.md - sets the width of the component
- api/link/ui.gridsuggest_zindex_config.md - stack order of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.gridsuggest_$enterkey_other.md - the method that will be called when the Enter key is pressed
- api/link/ui.gridsuggest_$getsize_other.md - returns the current size of the component
- api/link/ui.gridsuggest_$height_other.md - current height of the view
- api/link/ui.gridsuggest_$scope_other.md - scope for resolving event and method names
- api/link/ui.gridsuggest_$setsize_other.md - sets the component size
- api/link/ui.gridsuggest_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.gridsuggest_$view_other.md - reference to top html element of the view
- api/link/ui.gridsuggest_$width_other.md - current width of the view
- api/link/ui.gridsuggest_config_other.md - all options from initial component configuration
- api/link/ui.gridsuggest_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.gridsuggest_methods.md
- api/refs/ui.gridsuggest_props.md
- api/refs/ui.gridsuggest_events.md
- api/refs/ui.gridsuggest_others.md

