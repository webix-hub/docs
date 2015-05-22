ui.scrollview 
=============

{{memo A container with scrolls. }}

Place it in the layout if you want to have a scroll around few other views (not necessary if you need a scroll in one single view). Check [scrollview](desktop/scrollview.md) documentation for more detailed description.

### Constructor

~~~js
	var scrollview = webix.ui({
		view:"scrollview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_scrollview({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Scrollview Widget](desktop/scrollview.md)
- [Samples](http://docs.webix.com/samples/04_template/index.html)
<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/scrollable.md">Scrollable</a>, <a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.scrollview_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.scrollview_bind.md - binds components
- api/link/ui.scrollview_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.scrollview_destructor.md - destructs the calling object
- api/link/ui.scrollview_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.scrollview_enable.md - enables the calling view that was disabled by the 'disable' method
- api/ui.scrollview_getbody.md - gets the inner view of scrollview
- api/link/ui.scrollview_getchildviews.md - returns child views of the calling component
- api/link/ui.scrollview_getformview.md - returns master form for the input
- api/link/ui.scrollview_getnode.md - returns the main HTML container for the calling object
- api/link/ui.scrollview_getparentview.md - returns the parent view of the component
- api/link/ui.scrollview_getscrollstate.md - returns the scroll position
- api/link/ui.scrollview_gettopparentview.md - returns top parent view
- api/link/ui.scrollview_hide.md - hides the view
- api/link/ui.scrollview_isenabled.md - checks whether the view is enabled
- api/link/ui.scrollview_isvisible.md - checks whether the view is visible
- api/link/ui.scrollview_resize.md - adjusts the view to a new size
- api/ui.scrollview_resizechildren.md - resizes all children of the calling component
- api/link/ui.scrollview_scrollto.md - scrolls the data container to a certain position
- api/link/ui.scrollview_show.md - makes the component visible
- api/ui.scrollview_showview.md - places focus on the necessary scrollview item
- api/link/ui.scrollview_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.scrollview_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.scrollview_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.scrollview_ondestruct_event.md - occurs when component destroyed
- api/link/ui.scrollview_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.scrollview_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.scrollview_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.scrollview_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.scrollview_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.scrollview_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.scrollview_ontouchmove_event.md - occurs during touch movement
- api/link/ui.scrollview_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.scrollview_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.scrollview_animate_config.md - defines or disables view change animation.
- api/ui.scrollview_body_config.md - the view object that needs scrolling
- api/link/ui.scrollview_borderless_config.md - used to hide the component borders
- api/link/ui.scrollview_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.scrollview_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.scrollview_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.scrollview_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.scrollview_height_config.md - sets the height of the component
- api/link/ui.scrollview_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.scrollview_id_config.md - the component ID
- api/link/ui.scrollview_maxheight_config.md - sets the maximum height for the view
- api/link/ui.scrollview_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.scrollview_minheight_config.md - sets the minimal height for the view
- api/link/ui.scrollview_minwidth_config.md - sets the minimal width for the view
- api/link/ui.scrollview_scroll_config.md - enables/disables the scroll bar
- api/link/ui.scrollview_scrollspeed_config.md - the time during which the component is scrolled to the specified position (in milliseconds)
- api/link/ui.scrollview_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.scrollview_$getsize_other.md - returns the current size of the component
- api/link/ui.scrollview_$height_other.md - current height of the view
- api/link/ui.scrollview_$scope_other.md - scope for resolving event and method names
- api/link/ui.scrollview_$setsize_other.md - sets the component size
- api/link/ui.scrollview_$skin_other.md - method, which will be called when skin defined
- api/link/ui.scrollview_$view_other.md - reference to top html element of the view
- api/link/ui.scrollview_$width_other.md - current width of the view
- api/link/ui.scrollview_config_other.md - all options from initial component configuration
- api/link/ui.scrollview_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.scrollview_methods.md
- api/refs/ui.scrollview_props.md
- api/refs/ui.scrollview_events.md
- api/refs/ui.scrollview_others.md

