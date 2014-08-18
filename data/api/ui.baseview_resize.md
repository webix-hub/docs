resize
=============



@short:
	adjusts the view to a new size

@example:
dtable = new webix.ui({
        view:"datatable",
        ...
})
 
dtable.define("width", 700);
dtable.resize();

@template:	api_method
@defined:	ui.baseview	
@relatedapi: 
	api/ui.baseview_adjust.md
	api/settings_config_other.md
	api/settings_define.md
@related:
    desktop/dimensions.md
    datatable/sizing.md#resizing
@relatedsample:
	15_datatable/11_sizing/02_resize_node.html
    
@descr:
You may need to use this method if you want to change the width or height of the component.

~~~js
$$('list1').config.width = 200;
$$('list1').config.height = 200;
$$('list1').resize();
~~~

If a component is placed into some layout - you *need not* to call **resize** for the parent layout, it will adjust automatically.

### Performance tip

If you set sizes for multiple components,it makes sense to set sizes for all of them at first and only then call **resize()**.


~~~js
$$('list1').config.width = 200;
$$('list1').config.height = 200;

$$('list2').config.width = 600;
$$('list2').config.height = 400;

$$('list1').resize();
$$('list2').resize();
~~~

