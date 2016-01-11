delay
=============


@short: delays a view from initializing at runtime
	



@params:
- config	object		the view configuration


@example:
webix.ui.delay({
	view:"window",
	...
});


@template:	api_method
@descr:

The method is similar to api/_ui.md. The difference is that api/_ui.md creates the view immediately,
while **webix.delay** initializes the view just when it will be requested by the **$$('view_id')** or **webix.$$** method. 

