ui
=============


@short:

allows creating new ui, the id of which will be locked in the parent id space
	

@params:
- view		object		config of view


@returns:
- view		WebixView		newly created view

@example:

some.ui({ view:"popup", id:"myid" });
...
//will NOT locate view
var view = $$("myid"); //null
//will locate view
var view = some.$$("myid");	//popup




@template:	api_method
@descr:


Arguments of the method are the same as for the [webix.ui](api/_ui.md) command