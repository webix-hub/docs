disabled
=============


@short: indicates whether an item is enabled or not
	

@type:  bool
@example:

webix.ui({
    view:"button",
    disabled:true
});

@template:	api_config
@descr:

By dafaults all items are enabled, i.e. the value is *false*.

A disabled item looses  focus and will not react on mouse events. 

Same state can be forced through Webix API:

~~~js
$$("button1").disable();
$$("button1").enable();
~~~