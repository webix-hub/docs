@link: api/ui.baseview_disabled_config.md

@example:

webix.ui({
    view:"text",
    disabled:true
});

@descr:

By default, all items are enabled, i.e. the value is *false*.

A disabled item loses focus and will not react on mouse events. 

The same state can be forced through Webix API:

~~~js
$$("text1").disable();
$$("text1").enable();
~~~