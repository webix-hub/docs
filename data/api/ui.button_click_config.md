click
=============


@short:
	click action handler

@type: functor
@example:

webix.ui({
   view:"button", click:"alert('handler');"
});
//or
function handler(){
    alert('handler');
}
webix.ui({
   view:"button", click:handler
});

@template:	api_config
@descr:


Short alias for some.attachEvent("onItemClick", code);

Inside handler "this" points to the view object