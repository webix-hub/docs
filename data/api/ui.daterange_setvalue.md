setValue
=============


@todo:
	check 

@short:
	sets a new date range

@params:

- date		Date		a date object



@example:
webix.ui({
    container:"box",
    view:"daterange1",
    id:"daterange1"
});
$$("daterange1").setValue({start:new Date(2016,9,30), end:new Date(2016,10,2)});

@template:	api_method
@descr:

