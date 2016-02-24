ui.htmlform 
=============


{{memo A control for integration with an HTML form. }}

The component allows you to get an HTML Form as a lib-based view, so that to use it together with the other lib components (common API, techniques, architecture etc.). Check [htmlform](desktop/htmlform.md) documentation for more detailed description.

## Constructor

{{snippet HTML. }}
~~~html
<div class="myform">
	<div>
      <label for="title">Book title</label><br/>
      <input type="text" name="title" placeholder="Title" />
  </div>
	<div>
      <label for="author">Author</label><br/>
      <input type="text" name="author" placeholder="Author" />
  </div>
</div>
~~~

{{snippet JS. }}
~~~js
var htmlform = webix.ui({
  view:"htmlform", 
  id:"formView",
  padding:5,
  content:document.body
});
~~~

### Where to start

- [Overview of the HTMLform Widget](desktop/htmlform.md)
- [Samples](http://docs.webix.com/samples/11_htmlform/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.template.md">ui.template</a>, <a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/atomdataloader.md">AtomDataLoader</a>, <a href="api/refs/atomrender.md">AtomRender</a>, <a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a>, <a href="api/refs/values.md">Values</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.htmlform_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.htmlform_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.htmlform_bind.md - binds components
- api/link/ui.htmlform_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/ui.htmlform_blur.md - removes focus from the component
- api/link/ui.htmlform_callevent.md - calls an inner event
- api/link/ui.htmlform_clear.md - clears all the field in a specified form
- api/link/ui.htmlform_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.htmlform_destructor.md - destructs the calling object
- api/link/ui.htmlform_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/link/ui.htmlform_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.htmlform_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.htmlform_focus.md - sets focus into the necessary component
- api/link/ui.htmlform_getchildviews.md - returns child views of the calling component
- api/link/ui.htmlform_getcleanvalues.md - returns hash of original form values
- api/link/ui.htmlform_getdirtyvalues.md - returns hash of changed values
- api/link/ui.htmlform_getformview.md - returns master form for the input
- api/link/ui.htmlform_getnode.md - returns the main HTML container for the calling object
- api/link/ui.htmlform_getparentview.md - returns the parent view of the component
- api/link/ui.htmlform_getscrollstate.md - returns the scroll position
- api/link/ui.htmlform_gettopparentview.md - returns top parent view
- api/link/ui.htmlform_getvalues.md - derives input values from the form
- api/link/ui.htmlform_hasevent.md - checks whether the component has the specified event
- api/link/ui.htmlform_hide.md - hides the view
- api/link/ui.htmlform_isdirty.md - checks whether changes within form were made
- api/link/ui.htmlform_isenabled.md - checks whether the view is enabled
- api/link/ui.htmlform_isvisible.md - checks whether the view is visible
- api/link/ui.htmlform_load.md - loads data from an external data source.
- api/link/ui.htmlform_mapevent.md - routes events from one object to another
- api/link/ui.htmlform_markinvalid.md - marks a form control invalid
- api/link/ui.htmlform_parse.md - loads data to the component from an inline data source
- api/link/ui.htmlform_refresh.md - repaints the component
- api/link/ui.htmlform_render.md - renders the specified item or the whole component
- api/link/ui.htmlform_resize.md - adjusts the view to a new size
- api/link/ui.htmlform_scrollto.md - scrolls the data container to a certain position
- api/link/ui.htmlform_setcontent.md - attaches html container to the template
- api/link/ui.htmlform_setdirty.md - marks the form as the one with changed values and vice versa
- api/link/ui.htmlform_sethtml.md - set hmlt for template
- api/link/ui.htmlform_setvalues.md - sets values into the inputs of a form/toolbar/property sheet control
- api/link/ui.htmlform_show.md - makes the component visible
- api/link/ui.htmlform_sync.md - allows you to sync two copy of data (all or just a part of it) from one DataCollection to another
- api/link/ui.htmlform_unbind.md - breaks "bind" link
- api/link/ui.htmlform_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.htmlform_onafterload_event.md - fires after server side loading is complete
- api/link/ui.htmlform_onafterrender_event.md - occurs immediately after the component has been rendered.
- api/link/ui.htmlform_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.htmlform_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/ui.htmlform_onbeforerender_event.md - occurs immediately before the component has been rendered
- api/link/ui.htmlform_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.htmlform_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.htmlform_onchange_event.md - fires when data in the input or related form/toolbar is changed
- api/link/ui.htmlform_ondestruct_event.md - occurs when component destroyed
- api/link/ui.htmlform_onfocus_event.md - fires when a view gets focus
- api/link/ui.htmlform_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.htmlform_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
- api/link/ui.htmlform_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.htmlform_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.htmlform_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.htmlform_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.htmlform_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.htmlform_ontouchmove_event.md - occurs during touch movement
- api/link/ui.htmlform_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.htmlform_onvalues_event.md - fires after values have been set within toolbar or form
- api/link/ui.htmlform_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.htmlform_animate_config.md - defines or disables view change animation.
- api/link/ui.htmlform_autoheight_config.md - lets the component autosize to its contents
- api/link/ui.htmlform_borderless_config.md - used to hide the component borders
- api/link/ui.htmlform_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.htmlform_content_config.md - the id or node, whose content will be moved to the view
- api/link/ui.htmlform_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.htmlform_data_config.md - JavaScript array containing data for the component
- api/link/ui.htmlform_datatype_config.md - the type of loaded data
- api/link/ui.htmlform_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.htmlform_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.htmlform_height_config.md - sets the height of the component
- api/link/ui.htmlform_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.htmlform_id_config.md - the component ID
- api/link/ui.htmlform_maxheight_config.md - sets the maximum height for the view
- api/link/ui.htmlform_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.htmlform_minheight_config.md - sets the minimal height for the view
- api/link/ui.htmlform_minwidth_config.md - sets the minimal width for the view
- api/link/ui.htmlform_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/ui.htmlform_onclick_config.md - attaches a click behavior for component items with the specified CSS class.
- api/link/ui.htmlform_scroll_config.md - enables/disables the scroll bar
- api/link/ui.htmlform_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.htmlform_src_config.md - the path to an external template that is loaded by Ajax
- api/link/ui.htmlform_template_config.md - the component template
- api/link/ui.htmlform_url_config.md - the URL which the component will use to load data after its initialization
- api/link/ui.htmlform_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.htmlform_$getsize_other.md - returns the current size of the component
- api/link/ui.htmlform_$height_other.md - current height of the view
- api/link/ui.htmlform_$scope_other.md - scope for resolving event and method names
- api/link/ui.htmlform_$setsize_other.md - sets the component size
- api/link/ui.htmlform_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.htmlform_$view_other.md - reference to top html element of the view
- api/link/ui.htmlform_$width_other.md - current width of the view
- api/link/ui.htmlform_config_other.md - all options from initial component configuration
- api/link/ui.htmlform_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.htmlform_methods.md
- api/refs/ui.htmlform_props.md
- api/refs/ui.htmlform_events.md
- api/refs/ui.htmlform_others.md

