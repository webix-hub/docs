ui.uploader 
=============


{{memo A control for uploading multiple files. }}

The component allows tracking the whole progress of individual file upload. Fully customizable. Check [uploader](desktop/uploader.md) documentation for more detailed description.

### Constructor

~~~js
var uploader = webix.ui({
    view:"uploader",
    id: "uploader_1",
  	width:200,
    value:"Upload file",
    link:"mylist",
    upload:"//docs.webix.com/samples/21_upload/php/upload.php"
});
~~~

### Where to start

- [Overview of the Uploader Widget](desktop/uploader.md)
- [Samples](http://docs.webix.com/samples/21_upload/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.button.md">ui.button</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/ui.uploader_adddropzone.md - adds uploader drop zone to any HTML element of the page
- api/ui.uploader_addfile.md - adds files to the uploader using browser fileApi
- api/link/ui.uploader_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.uploader_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.uploader_bind.md - binds components
- api/link/ui.uploader_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.uploader_blur.md - removes the focus from the control
- api/link/ui.uploader_callevent.md - calls an inner event
- api/link/ui.uploader_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.uploader_destructor.md - destructs the calling object
- api/link/ui.uploader_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.uploader_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.uploader_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.uploader_filedialog.md - opens a file browsing dialog on a client machine
- api/link/ui.uploader_focus.md - sets focus to the control
- api/link/ui.uploader_getchildviews.md - returns child views of the calling component
- api/link/ui.uploader_getformview.md - returns master form for the input
- api/link/ui.uploader_getinputnode.md - gets the HTML element related to the component
- api/link/ui.uploader_getnode.md - returns the main HTML container for the calling object
- api/link/ui.uploader_getparentview.md - returns the parent view of the component
- api/link/ui.uploader_gettopparentview.md - returns top parent view
- api/link/ui.uploader_getvalue.md - returns the current value of the control
- api/link/ui.uploader_hasevent.md - checks whether the component has the specified event
- api/link/ui.uploader_hide.md - hides the view
- api/link/ui.uploader_isenabled.md - checks whether the view is enabled
- api/ui.uploader_isuploaded.md - checks whether all sent files have been uploaded to server
- api/link/ui.uploader_isvisible.md - checks whether the view is visible
- api/link/ui.uploader_mapevent.md - routes events from one object to another
- api/link/ui.uploader_refresh.md - repaints the component
- api/link/ui.uploader_render.md - renders the specified item or the whole component
- api/link/ui.uploader_resize.md - adjusts the view to a new size
- api/ui.uploader_send.md - sends files from uploader body to server
- api/link/ui.uploader_setvalue.md - sets a new value for the component
- api/link/ui.uploader_show.md - makes the component visible
- api/ui.uploader_stopupload.md - cancel current upload
- api/link/ui.uploader_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.uploader_unbind.md - breaks "bind" link
- api/link/ui.uploader_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.uploader_onafterfileadd_event.md - fires after file has been added to the uploader body
- api/link/ui.uploader_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.uploader_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/ui.uploader_onbeforefileadd_event.md - fires the moment you try to add file to uploader
- api/link/ui.uploader_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.uploader_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.uploader_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.uploader_ondestruct_event.md - occurs when component destroyed
- api/ui.uploader_onfileupload_event.md - fires the moment file uploading ends
- api/ui.uploader_onfileuploaderror_event.md - fires in case of serverside error during uploading
- api/link/ui.uploader_onfocus_event.md - fires when a view gets focus
- api/link/ui.uploader_onitemclick_event.md - fires after the control has been clicked
- api/link/ui.uploader_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.uploader_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.uploader_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.uploader_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.uploader_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.uploader_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.uploader_ontouchmove_event.md - occurs during touch movement
- api/link/ui.uploader_ontouchstart_event.md - when some webix view has been touched
- api/ui.uploader_onuploadcomplete_event.md - fires when all files have been successfully uploaded to server
- api/link/ui.uploader_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.uploader_align_config.md - the alignment of the control within the parent container
- api/link/ui.uploader_animate_config.md - defines or disables view change animation.
- api/ui.uploader_apionly_config.md - sets the uploader to "invisible" mode. *False* by default.
- api/ui.uploader_autosend_config.md - enable seding files to server immediately after they have been added to uploader. *True* by default.
- api/link/ui.uploader_autowidth_config.md - adjusts button to its text content
- api/link/ui.uploader_borderless_config.md - used to hide the component borders
- api/link/ui.uploader_click_config.md - click action handler
- api/link/ui.uploader_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.uploader_css_config.md - the name of a css class that will be applied to the view container
- api/ui.uploader_datatype_config.md - the type of serverside response
- api/link/ui.uploader_disabled_config.md - indicates whether an item is enabled or not
- api/ui.uploader_formdata_config.md - extra data that will be sent to server side along with the file uploading
- api/ui.uploader_getvalue_config.md - returns the current value of the control
- api/link/ui.uploader_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.uploader_height_config.md - sets the height of the component
- api/link/ui.uploader_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.uploader_hotkey_config.md - sets a hotkey that triggers button clicking
- api/link/ui.uploader_id_config.md - the component ID
- api/link/ui.uploader_inputheight_config.md - the height of the input area, or a button's text value area.
- api/ui.uploader_inputname_config.md - name of the uploader input
- api/link/ui.uploader_inputwidth_config.md - the width of the input area, or a button's text value area.
- api/link/ui.uploader_label_config.md - the text label of the control
- api/ui.uploader_link_config.md - sets the component to display values of the files chosen for upload;
- api/link/ui.uploader_maxheight_config.md - sets the maximum height for the view
- api/link/ui.uploader_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.uploader_minheight_config.md - sets the minimal height for the view
- api/link/ui.uploader_minwidth_config.md - sets the minimal width for the view
- api/ui.uploader_multiple_config.md - enables uploading of several files at a time. *True* by default.
- api/link/ui.uploader_name_config.md - name of the control
- api/link/ui.uploader_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.uploader_popup_config.md - allows to attach pop-up menu to the button
- api/link/ui.uploader_tabfocus_config.md - defines whether the control will be included in the tab navigation order
- api/link/ui.uploader_tooltip_config.md - tooltip for the input
- api/link/ui.uploader_type_config.md - the type of the control
- api/ui.uploader_upload_config.md - path to the script file that will handle uploading
- api/link/ui.uploader_value_config.md - sets the initial value for a control
- api/link/ui.uploader_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/ui.uploader_$cssname_other.md - name which will be used as part of css class
- api/link/ui.uploader_$getsize_other.md - returns the current size of the component
- api/link/ui.uploader_$getvalue_other.md - called each time when component need to get value from related html input
- api/link/ui.uploader_$height_other.md - current height of the view
- api/ui.uploader_$onuploadcomplete_other.md - completes uploading for flash uploader
- api/link/ui.uploader_$renderinput_other.md - called each time when component need to paint control's input
- api/link/ui.uploader_$scope_other.md - scope for resolving event and method names
- api/link/ui.uploader_$setsize_other.md - sets the component size
- api/link/ui.uploader_$setvalue_other.md - called each time when component need to set value in related html input
- api/link/ui.uploader_$skin_other.md - the method which will be called when skin is defined
- api/ui.uploader_$updateprogress_other.md - method for updating progress state
- api/link/ui.uploader_$view_other.md - reference to top html element of the view
- api/link/ui.uploader_$width_other.md - current width of the view
- api/link/ui.uploader_config_other.md - all options from initial component configuration
- api/link/ui.uploader_name_other.md - indicates the name of the component (a read-only property)
- api/link/ui.uploader_on_click_other.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.uploader_touchable_other.md - flag, which force touch reaction on touch screen devices
}}


@index:
- api/refs/ui.uploader_methods.md
- api/refs/ui.uploader_props.md
- api/refs/ui.uploader_events.md
- api/refs/ui.uploader_others.md

