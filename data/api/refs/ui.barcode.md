ui.barcode 
=============

{{memo A machine-readable representation of data values. }}

The library supports 3 most common barcode types: ean8, ean13 and upcA. You can customize the barcode bars colors, text height and dimensions of the view. 
It's also possible to create a custom barcode. Check desktop/barcode.md documentation for more detailed description.

### Constructor

~~~js
var barcode = webix.ui({
	view: "barcode",
	id:"barcode",
	type: "ean13",
	value: "123456789012"
});
~~~

### Where to start

- [Overview of the Barcode Widget](desktop/barcode.md)
- [Samples](http://docs.webix.com/samples/60_pro/08_barcode/index.html)

<div class='webixdoc_parents'><span>Based on: </span>
<a href="api/refs/ui.view.md">ui.view</a>, <a href="api/refs/ui.baseview.md">ui.baseview</a>, <a href="api/refs/settings.md">Settings</a>, <a href="api/refs/destruction.md">Destruction</a>, <a href="api/refs/basebind.md">BaseBind</a>, <a href="api/refs/uiextension.md">UIExtension</a></div>


<div class='h2'>Methods</div>

{{api
- api/link/ui.barcode_adjust.md - adjusts the component to the size of the parent HTML container
- api/link/ui.barcode_bind.md - binds components
- api/link/ui.barcode_define.md - redefines a single configuration property (or a hash of properties)
- api/link/ui.barcode_destructor.md - destructs the calling object
- api/link/ui.barcode_disable.md - disables the calling view (makes it dimmed and unclickable)
- api/link/ui.barcode_enable.md - enables the calling view that was disabled by the 'disable' method
- api/link/ui.barcode_getchildviews.md - returns child views of the calling component
- api/link/ui.barcode_getformview.md - returns master form for the input
- api/link/ui.barcode_getnode.md - returns the main HTML container for the calling object
- api/link/ui.barcode_getparentview.md - returns the parent view of the component
- api/link/ui.barcode_gettopparentview.md - returns top parent view
- api/ui.barcode_getvalue.md - returns the current value of the Barcode
- api/link/ui.barcode_hide.md - hides the view
- api/link/ui.barcode_isenabled.md - checks whether the view is enabled
- api/link/ui.barcode_isvisible.md - checks whether the view is visible
- api/ui.barcode_render.md - renders barcode on a page
- api/link/ui.barcode_resize.md - adjusts the view to a new size
- api/ui.barcode_setvalue.md - sets a value for Barcode
- api/link/ui.barcode_show.md - makes the component visible
- api/link/ui.barcode_unbind.md - breaks "bind" link
}}


<div class='h2'>Events</div>


{{api
- api/link/ui.barcode_onafterscroll_event.md - occurs when some webix view has been scrolled
- api/link/ui.barcode_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/link/ui.barcode_onblur_event.md - fires when focus is moved out of the view
- api/link/ui.barcode_ondestruct_event.md - occurs when component destroyed
- api/link/ui.barcode_onfocus_event.md - fires when a view gets focus
- api/link/ui.barcode_onkeypress_event.md - occurs when keyboard key is pressed for the control in focus
- api/link/ui.barcode_onlongtouch_event.md - fires on holding finger in some position for a certain period of time
- api/link/ui.barcode_onswipex_event.md - occurs on a horizontal swipe movement
- api/link/ui.barcode_onswipey_event.md - occurs on a vertical swipe movement
- api/link/ui.barcode_ontimedkeypress_event.md - fires after typing has been finished in the field
- api/link/ui.barcode_ontouchend_event.md - occurs when the touch event is ended
- api/link/ui.barcode_ontouchmove_event.md - occurs during touch movement
- api/link/ui.barcode_ontouchstart_event.md - when some webix view has been touched
- api/link/ui.barcode_onviewresize_event.md - view size was changed by resizer
}}


<div class='h2'>Properties</div>

{{api
- api/link/ui.barcode_animate_config.md - defines or disables view change animation.
- api/link/ui.barcode_borderless_config.md - used to hide the component borders
- api/ui.barcode_color_config.md - sets the bar color
- api/link/ui.barcode_container_config.md - an HTML container (or its id) where the component should be initialized
- api/link/ui.barcode_css_config.md - the name of a css class that will be applied to the view container
- api/link/ui.barcode_disabled_config.md - indicates whether an item is enabled or not
- api/link/ui.barcode_gravity_config.md - sets the view gravity (1 by default)
- api/link/ui.barcode_height_config.md - sets the height of the component
- api/link/ui.barcode_hidden_config.md - defines whether the view will be hidden initially
- api/link/ui.barcode_id_config.md - the component ID
- api/link/ui.barcode_maxheight_config.md - sets the maximum height for the view
- api/link/ui.barcode_maxwidth_config.md - sets the maximum width for the view
- api/link/ui.barcode_minheight_config.md - sets the minimal height for the view
- api/link/ui.barcode_minwidth_config.md - sets the minimal width for the view
- api/ui.barcode_paddingx_config.md - sets the left and right paddings (space between widget border and bars)
- api/ui.barcode_paddingy_config.md - sets the top and bottom paddings
- api/ui.barcode_textheight_config.md - sets the height of the text block
- api/ui.barcode_type_config.md - sets the barcode type
- api/ui.barcode_value_config.md - sets barcode value (text)
- api/link/ui.barcode_width_config.md - sets the width of the component
}}





<div class='h2'>Other</div>


{{api
- api/link/ui.barcode_$getsize_other.md - returns the current size of the component
- api/link/ui.barcode_$height_other.md - current height of the view
- api/link/ui.barcode_$scope_other.md - scope for resolving event and method names
- api/link/ui.barcode_$setsize_other.md - sets the component size
- api/link/ui.barcode_$skin_other.md - the method which will be called when skin is defined
- api/link/ui.barcode_$view_other.md - reference to top html element of the view
- api/link/ui.barcode_$width_other.md - current width of the view
- api/link/ui.barcode_config_other.md - all options from initial component configuration
- api/link/ui.barcode_name_other.md - indicates the name of the component (a read-only property)
- api/ui.barcode_types_other.md - the collection of barcode types
}}


@index:
- api/refs/ui.barcode_methods.md
- api/refs/ui.barcode_props.md
- api/refs/ui.barcode_events.md
- api/refs/ui.barcode_others.md

