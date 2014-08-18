ui.video 
=============


{{memo Video player view. }}

### Constructor

~~~js
	var video = webix.ui({
		view:"video", 
		src:"film.mp4"
	});
	//or, in case of jQuery
	$("#mydiv").webix_video({
		...config options goes here..
	});
~~~


<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.video_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.video_bind.md - binds components
- api/link/ui.video_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.video_destructor.md - destructs the calling object
- api/link/ui.video_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.video_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.video_getchildviews.md - returns child views of the calling component
- api/link/ui.video_getformview.md - returns master form for the input
- api/link/ui.video_getnode.md - returns the main HTML container for the calling object
- api/link/ui.video_getparentview.md - returns the parent view of the component
- api/link/ui.video_gettopparentview.md - returns top parent view
- api/ui.video_getvideo.md - gets html5 video object
- api/link/ui.video_hide.md - hides the view
- api/link/ui.video_isenabled.md - checks whether the view is enabled
- api/link/ui.video_isvisible.md - checks whether the view is visible
- api/link/ui.video_resize.md - adjusts the view to a new size
- api/link/ui.video_show.md - makes the component visible
- api/link/ui.video_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.video_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.video_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.video_ondestruct_event.md - occurs when component destroyed
- api/link/ui.video_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.video_onrotate_event.md - occurs on screen rotating
- api/link/ui.video_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.video_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.video_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.video_ontouchmove_event.md - occurs during touch movement
- api/link/ui.video_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.video_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.video_animate_config.md - defines or disables view change animation.
- api/link/ui.video_borderless_config.md - used to hide the component borders
- api/link/ui.video_container_config.md - an html container (or its id) where the component needs initializing
- api/ui.video_controls_config.md - enables video controls
- api/link/ui.video_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.video_disabled_config.md - disables item
- api/link/ui.video_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.video_height_config.md - sets the height of the component
- api/link/ui.video_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.video_id_config.md - the component ID
- api/link/ui.video_maxheight_config.md - sets the maximum height for the view
- api/link/ui.video_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.video_minheight_config.md - sets the minimal height for the view
- api/link/ui.video_minwidth_config.md - sets the minimal width for the view
- api/ui.video_src_config.md - path to video
- api/link/ui.video_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.video_$getsize_other.md - returns the current size of the component
- api/link/ui.video_$height_other.md - current height of the view
- api/link/ui.video_$scope_other.md - scope for resolving event and method names
- api/link/ui.video_$setsize_other.md - sets the component size
- api/link/ui.video_$skin_other.md - method, which will be called when skin defined
- api/link/ui.video_$view_other.md - reference to top html element of the view
- api/link/ui.video_$width_other.md - current width of the view
- api/link/ui.video_config_other.md - all options from initial component configuration
- api/link/ui.video_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.video_methods.md
- api/refs/ui.video_props.md
- api/refs/ui.video_events.md
- api/refs/ui.video_others.md

