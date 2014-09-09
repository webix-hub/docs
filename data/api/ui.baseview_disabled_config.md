disabled
=============


@short: disables item
	

@type:  bool
@example:

webix.ui({
    view:"button",
    disabled:true
});

@template:	api_config
@descr:

A disabled item looses  focus and will not react on mouse events. 

Same state can be forced through Webix API:

~~~js
$$("button1").disable();
$$("button1").enable();
~~~