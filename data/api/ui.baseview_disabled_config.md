disabled
=============


@short: indicates whether an item is enabled 
	

@type:  boolean
@default:false
@example:

webix.ui({
    view:"button",
    disabled:true
});

@template:	api_config
@descr:

By default, all items are enabled, i.e. the value is *false*.

A disabled item loses focus and will not react on mouse events. 

The same state can be forced through Webix API:

~~~js
$$("button1").disable();
$$("button1").enable();
~~~