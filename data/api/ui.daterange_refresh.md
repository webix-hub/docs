refresh
=============


@short:
	redraws the DateRange value

@params:


@example:
webix.ui({
    view:"daterange",
    id:"daterange1"
});

$$('daterange1').define("value", {start:new Date(), end:new Date(2018, 2, 5)});
$$('daterange1').refresh();

@template:	api_method
@descr:

