customize
=============



@short:
	redefines the "type" property

@params:
- obj		object		the hash of new 'type' settings

	

@example:
mylist = webix.ui({
	view:"list",
    ...
	type:{
		height:50
	}
});

mylist.customize({ height:30});
mylist.refresh();

@template:	api_method
@defined:	RenderStack	
@relatedapi:
	 api/renderstack_type_config.md
     api/settings_define.md
@related:
	desktop/redefinition.md
@descr:
Remember, the method doesn't cause repainting of the component. 
That's why after calling the **customize()** method 
you should call method api/datastore_refresh.md or api/renderstack_render.md  to apply the newly-specified value

To change any component property (not the "type") - use api/settings_define.md method. 

