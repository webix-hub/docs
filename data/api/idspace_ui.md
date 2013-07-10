ui
=============


@short:

allows to create new ui, which isd will be locked in parent id space
	

@params:
- view		object		config of view


@returns:
- view		view		newly created view

@example:

some.ui({ view:"popup", id:"myid" });
...
//will NOT locate view
var view = $$("myid"); //null
//will locate view
var view = some.$$("myid");	//popup




@template:	api_method
@descr:


Arguments of method are the same as for webix.ui command