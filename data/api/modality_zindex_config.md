zIndex
=============

@short: stack order of the component
	
@type: number 
@example:

webix.ui({
	view:"window",
    zIndex:1,
    ..//config
});


@template:	api_config
@descr:

Use *zIndex:"auto"* for setting zIndex equal to that ot its parent. 

By default modal window has the same zIndex as for the previous absolutely positioned element, but because of attaching order modal layer will be on top anyway. 