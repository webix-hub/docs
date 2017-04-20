ui.forminput 
=============

{{memo A wrapper that transforms a widget into a form input. }}

The control allows placing other control or a widget into an area with a label and making it look and behave as a default form input. Check [FormInput](desktop/forminput.md) documentation for a more detailed description.

### Constructor

~~~js
// a widget to be transformed into a form input
var list1 = { 
    view:"dbllist", 
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
};

// form input initialization
var forminput = webix.ui({
 	view:"forminput", 
    name:"access", 
    body:list1, 
    labelWidth: 140,
    labelAlign:"right", 
    label:"Access levels" 
});
~~~

### Where to start

- [Overview of the FormInput Control](desktop/forminput.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/25_dbllist.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.fieldset.md">ui.fieldset</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.forminput_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.forminput_bind.md - binds components
- api/link/ui.forminput_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.forminput_destructor.md - destructs the calling object
- api/link/ui.forminput_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.forminput_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.forminput_focus.md - sets focus to the control
- api/link/ui.forminput_getbody.md - returns sub-view of fieldset
- api/link/ui.forminput_getchildviews.md - returns child views of the calling component
- api/link/ui.forminput_getformview.md - returns master form for the input
- api/link/ui.forminput_getnode.md - returns the main HTML container for the calling object
- api/link/ui.forminput_getparentview.md - returns the parent view of the component
- api/link/ui.forminput_gettopparentview.md - returns top parent view
- api/ui.forminput_getvalue.md - returns the current value of the control
- api/link/ui.forminput_hide.md - hides the view
- api/link/ui.forminput_isenabled.md - checks whether the view is enabled
- api/link/ui.forminput_isvisible.md - checks whether the view is visible
- api/link/ui.forminput_resize.md - adjusts the view to a new size
- api/link/ui.forminput_resizechildren.md - resizes all children of the called component
- api/ui.forminput_setvalue.md - sets a new value for the control
- api/link/ui.forminput_show.md - makes the component visible
- api/link/ui.forminput_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.forminput_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.forminput_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.forminput_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.forminput_ondestruct_event.md - occurs when component destroyed
- api/link/ui.forminput_onfocus_event.md - fires when a view gets focus
- api/link/ui.forminput_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.forminput_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.forminput_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.forminput_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.forminput_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.forminput_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.forminput_ontouchmove_event.md - occurs during touch movement
- api/link/ui.forminput_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.forminput_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.forminput_$cssname_config.md - name of the widget the CSS of which you want to inherit for a custom widget
- api/link/ui.forminput_animate_config.md - defines or disables view change animation.
- api/link/ui.forminput_body_config.md - config for sub-view of fieldset
- api/link/ui.forminput_borderless_config.md - used to hide the component borders
- api/link/ui.forminput_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.forminput_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.forminput_disabled_config.md - indicates whether an item is enabled
- api/link/ui.forminput_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.forminput_height_config.md - sets the height of the component
- api/link/ui.forminput_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.forminput_id_config.md - the component ID
- api/link/ui.forminput_label_config.md - legend of fieldset
- api/ui.forminput_labelalign_config.md - the alignment of a label towards its container
- api/ui.forminput_labelwidth_config.md - the width of the label
- api/link/ui.forminput_maxheight_config.md - sets the maximum height for the view
- api/link/ui.forminput_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.forminput_minheight_config.md - sets the minimal height for the view
- api/link/ui.forminput_minwidth_config.md - sets the minimal width for the view
- api/ui.forminput_value_config.md - sets the initial value for the control wrapped into FormInput
- api/link/ui.forminput_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.forminput_$getsize_other.md - returns the current size of the component
- api/link/ui.forminput_$height_other.md - current height of the view
- api/link/ui.forminput_$scope_other.md - scope for resolving event and method names
- api/link/ui.forminput_$setsize_other.md - sets the component size
- api/link/ui.forminput_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.forminput_$view_other.md - reference to top html element of the view
- api/link/ui.forminput_$width_other.md - current width of the view
- api/link/ui.forminput_config_other.md - all options from initial component configuration
- api/link/ui.forminput_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.forminput_methods.md
- api/refs/ui.forminput_props.md
- api/refs/ui.forminput_events.md
- api/refs/ui.forminput_others.md

