ui.iframe 
=============

{{memo A view with the IFRAME element inside it. }}

If you want to place some IFRAME content, note that the component provides much more flexible way to do this than a usual layout.

Check [templates](api/refs/ui.template.md) for example. Check [iframe](desktop/iframe.md) documentation for more detailed description.

### Constructor

~~~js
var iframe = webix.ui({		
	view:"iframe", 
	id:"frame-body", 
	src:"//docs.webix.com/samples/80_docs/data/pageA.html"
});
~~~

### Where to start

- [Overview of the IFrame Widget](desktop/iframe.md)
- [Samples](http://docs.webix.com/samples/80_docs/iframe.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/eventsystem.md">EventSystem</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.iframe_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.iframe_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.iframe_bind.md - binds components
- api/link/ui.iframe_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.iframe_callevent.md - calls an inner event
- api/link/ui.iframe_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.iframe_destructor.md - destructs the calling object
- api/link/ui.iframe_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.iframe_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.iframe_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.iframe_getchildviews.md - returns child views of the calling component
- api/link/ui.iframe_getformview.md - returns master form for the input
- api/ui.iframe_getiframe.md - returns html element of inner iframe
- api/link/ui.iframe_getnode.md - returns the main HTML container for the calling object
- api/link/ui.iframe_getparentview.md - returns the parent view of the component
- api/link/ui.iframe_gettopparentview.md - returns top parent view
- api/ui.iframe_getwindow.md - gets the window object of an iframe
- api/link/ui.iframe_hasevent.md - checks whether the component has the specified event
- api/link/ui.iframe_hide.md - hides the view
- api/link/ui.iframe_isenabled.md - checks whether the view is enabled
- api/link/ui.iframe_isvisible.md - checks whether the view is visible
- api/ui.iframe_load.md - loads a document you'd like to show in the iframe
- api/link/ui.iframe_mapevent.md - routes events from one object to another
- api/link/ui.iframe_resize.md - adjusts the view to a new size
- api/link/ui.iframe_show.md - makes the component visible
- api/link/ui.iframe_unbind.md - breaks "bind" link
- api/link/ui.iframe_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.iframe_onafterload_event.md - fires after an HTML page was loaded to the component
- api/link/ui.iframe_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/ui.iframe_onbeforeload_event.md - fires before HTML page starts to load
- api/link/ui.iframe_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.iframe_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.iframe_ondestruct_event.md - occurs when component destroyed
- api/link/ui.iframe_onfocus_event.md - fires when a view gets focus
- api/link/ui.iframe_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.iframe_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.iframe_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.iframe_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.iframe_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.iframe_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.iframe_ontouchmove_event.md - occurs during touch movement
- api/link/ui.iframe_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.iframe_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.iframe_animate_config.md - defines or disables view change animation.
- api/link/ui.iframe_borderless_config.md - used to hide the component borders
- api/link/ui.iframe_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.iframe_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.iframe_disabled_config.md - indicates whether an item is enabled
- api/link/ui.iframe_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.iframe_height_config.md - sets the height of the component
- api/link/ui.iframe_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.iframe_id_config.md - the component ID
- api/link/ui.iframe_maxheight_config.md - sets the maximum height for the view
- api/link/ui.iframe_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.iframe_minheight_config.md - sets the minimal height for the view
- api/link/ui.iframe_minwidth_config.md - sets the minimal width for the view
- api/link/ui.iframe_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.iframe_src_config.md - the URL of a document you'd like to show in an iframe
- api/link/ui.iframe_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.iframe_$getsize_other.md - returns the current size of the component
- api/link/ui.iframe_$height_other.md - current height of the view
- api/link/ui.iframe_$scope_other.md - scope for resolving event and method names
- api/link/ui.iframe_$setsize_other.md - sets the component size
- api/link/ui.iframe_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.iframe_$view_other.md - reference to top html element of the view
- api/link/ui.iframe_$width_other.md - current width of the view
- api/link/ui.iframe_config_other.md - all options from initial component configuration
- api/link/ui.iframe_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.iframe_methods.md
- api/refs/ui.iframe_props.md
- api/refs/ui.iframe_events.md
- api/refs/ui.iframe_others.md

