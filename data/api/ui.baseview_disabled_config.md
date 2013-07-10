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

disabled item lost focus and will not react on mouse events
Same state can be forced through js API

~~~js
$$("button1").disable();
//$$("button1").enable();
~~~