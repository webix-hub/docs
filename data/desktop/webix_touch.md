Webix in Touch Environment
==========================

Webix works equally well on desktop and touch devices **out of box**.

Touch support is enabled in all the Webix components with the **touch events** being translated into **native Webix ones** to ensure their flawless work. For instance, when you tap a 
[list](desktop/list.md) item, the api/link/ui.list_onitemclick_event.md event fires for it. If [selection](desktop/selection.md) is enabled for this list, list item is selected.

In addition there are [global](http://docs.webix.com/desktop__event_handling.html#globalwebixevents) touch events that are not component-specific and fire for Webix application as a whole. All of them are described in detail in [API Reference section](http://docs.webix.com/api__refs__ui.view_events.html).

##Working with Webix Touch Module

Touch events are controlled by [Webix Touch module](api/refs/touch.md) where configuration for different aspects of touch behavior such as 
**touch speed**, **touch** and **scroll** delay can be changed.

Also the module allows for **disabling Webix touch events** in favor of native ones in either of the two ways:

 - [total disabling of Webix touch support](api/touch_disable.md) - neither global events nor component-specific events fire;
 - [limiting Webix touch support](api/touch_limit.md) - only in-component events work, global ones are disabled.

##Related Articles

- [Adjusting Mobile Apps to Screen Size](desktop/dimensions.md#mobile)
