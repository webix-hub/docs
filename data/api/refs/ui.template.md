ui.template 
=============

{{memo A view with some HTML content inside. }}

The component is a simple container (but with rich API support) where you can put any HTML content. Check [template](desktop/template.md) documentation for more detailed description.

### Constructor

~~~js
var template = webix.ui({
  view: "template",
  template: "Default template with some text inside"
});
~~~

### Where to start

- [Overview of the Template Widget](desktop/template.md)
- [Samples](http://docs.webix.com/samples/04_template/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.template_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.template_attachevent.md - attaches the handler to an inner event of the component (allows behavior customizations)
- api/link/ui.template_bind.md - binds components
- api/link/ui.template_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.template_callevent.md - calls an inner event
- api/link/ui.template_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.template_destructor.md - destructs the calling object
- api/link/ui.template_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.template_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.template_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.template_getchildviews.md - returns child views of the calling component
- api/link/ui.template_getformview.md - returns master form for the input
- api/link/ui.template_getnode.md - returns the main HTML container for the calling object
- api/link/ui.template_getparentview.md - returns the parent view of the component
- api/link/ui.template_getscrollstate.md - returns the scroll position
- api/link/ui.template_gettopparentview.md - returns top parent view
- api/ui.template_getvalues.md - gets data hash
- api/link/ui.template_hasevent.md - checks whether the component has the specified event
- api/link/ui.template_hide.md - hides the view
- api/link/ui.template_isenabled.md - checks whether the view is enabled
- api/link/ui.template_isvisible.md - checks whether the view is visible
- api/link/ui.template_load.md - loads data from an external data source.
- api/link/ui.template_mapevent.md - routes events from one object to another
- api/link/ui.template_parse.md - loads data to the component from an inline data source
- api/ui.template_refresh.md - repaints the component
- api/link/ui.template_render.md - renders the specified item or the whole component
- api/link/ui.template_resize.md - adjusts the view to a new size
- api/link/ui.template_scrollto.md - scrolls the data container to a certain position
- api/ui.template_setcontent.md - attaches html container to the template
- api/ui.template_sethtml.md - sets HTML for template
- api/ui.template_setvalues.md - sets data hash
- api/link/ui.template_show.md - makes the component visible
- api/link/ui.template_sync.md - allows you to sync two copies of data (all or just a part of it) from one DataCollection to another
- api/link/ui.template_unbind.md - breaks "bind" link
- api/link/ui.template_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.template_onafterload_event.md - fires after data loading is complete
- api/link/ui.template_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.template_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.template_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.template_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.template_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.template_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.template_ondestruct_event.md - occurs when component destroyed
- api/link/ui.template_onfocus_event.md - fires when a view gets focus
- api/link/ui.template_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.template_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.template_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.template_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.template_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.template_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.template_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.template_ontouchmove_event.md - occurs during touch movement
- api/link/ui.template_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.template_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.template_animate_config.md - defines or disables view change animation.
- api/ui.template_autoheight_config.md - lets the component autosize to its contents
- api/link/ui.template_borderless_config.md - used to hide the component borders
- api/link/ui.template_container_config.md - an HTML container (or its id) where the component should be initialized
- api/ui.template_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.template_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.template_data_config.md - JavaScript array containing data for the component
- api/link/ui.template_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/ui.template_datatype_config.md - the type of loaded data
- api/link/ui.template_disabled_config.md - indicates whether an item is enabled
- api/link/ui.template_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.template_height_config.md - sets the height of the component
- api/link/ui.template_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.template_id_config.md - the component ID
- api/link/ui.template_maxheight_config.md - sets the maximum height for the view
- api/link/ui.template_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.template_minheight_config.md - sets the minimal height for the view
- api/link/ui.template_minwidth_config.md - sets the minimal width for the view
- api/link/ui.template_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.template_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.template_scroll_config.md - enables/disables the scroll bar
- api/link/ui.template_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/ui.template_src_config.md - the path to an external template that is loaded by Ajax
- api/link/ui.template_template_config.md - the component template
- api/ui.template_type_config.md - name of a predefined styling type
- api/link/ui.template_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.template_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.template_$getsize_other.md - returns the current size of the component
- api/link/ui.template_$height_other.md - current height of the view
- api/link/ui.template_$scope_other.md - scope for resolving event and method names
- api/link/ui.template_$setsize_other.md - sets the component size
- api/link/ui.template_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.template_$view_other.md - reference to top html element of the view
- api/link/ui.template_$width_other.md - current width of the view
- api/link/ui.template_config_other.md - all options from initial component configuration
- api/link/ui.template_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.template_methods.md
- api/refs/ui.template_props.md
- api/refs/ui.template_events.md
- api/refs/ui.template_others.md

