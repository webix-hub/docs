ui.vscroll 
=============

{{memo Virtual scrolls. }}

The component renders plain scrolls without content. 

### Constructor

~~~js
	var vscroll = webix.ui({
		view:"vscroll", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_vscroll({
		...config options goes here..
	});
~~~

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/eventsystem.md">EventSystem</a>, <a href="api/refs/settings.md">Settings</a></div>


<div class='h2'>Methods</div>

{{api
- api/ui.vscroll_activearea.md - assigns active mouse wheel zone
- api/link/ui.vscroll_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/ui.vscroll_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/ui.vscroll_callevent.md - calls an inner event
- api/link/ui.vscroll_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.vscroll_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/ui.vscroll_getscroll.md - return current state of scroller
- api/ui.vscroll_getsize.md - returns full scrollable size ( scrollWidth or scrollHeight of content )
- api/link/ui.vscroll_hasevent.md - checks whether the component has the specified event
- api/link/ui.vscroll_mapevent.md - routes events from one object to another
- api/ui.vscroll_scrollto.md - set new position of scroller
- api/ui.vscroll_sizeto.md - set new size of scrollable content ( scrollWidth or scrollHeight )
- api/link/ui.vscroll_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/ui.vscroll_onscroll_event.md - fires when the scroll changes its position
}}


<div class='h2'>Properties</div>

{{api
- api/ui.vscroll_container_config.md - an html container (or its id) where the component needs initializing
- api/link/ui.vscroll_id_config.md - the component ID
- api/link/ui.vscroll_on_config.md - allows attaching custom handlers to inner events of the component
- api/ui.vscroll_scroll_config.md - the direction of scrolling
- api/ui.vscroll_scrollheight_config.md - the scrolling height of the object (vertical scrolling)
- api/ui.vscroll_scrollpos_config.md - the top (vertical scrolling ) or left (horizontal scrolling) offset of the scroll.
- api/ui.vscroll_scrollsize_config.md - the width(vertical scrolling) or height(horizontal scrolling) of the scroll
- api/ui.vscroll_scrollstep_config.md - the number of items that will be scrolled on each mouse move
- api/ui.vscroll_scrollvisible_config.md - defines visibility of scroll
- api/ui.vscroll_scrollwidth_config.md - the scrolling width of the object (horizontal scrolling)
- api/ui.vscroll_zoom_config.md - the zoom of the total scroll bar length
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.vscroll_config_other.md - all options from initial component configuration
- api/link/ui.vscroll_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/ui.vscroll_methods.md
- api/refs/ui.vscroll_props.md
- api/refs/ui.vscroll_events.md
- api/refs/ui.vscroll_others.md

