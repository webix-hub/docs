setValue
=============


@short:
	sets a new date range

@params:

- range		object		range object with 'start' and 'end' properties for currently selected date range



@example:
webix.ui({
    view:"daterange1",
    id:"daterange1"
});
$$("daterange1").setValue({start:new Date(2016,9,30), end:new Date(2016,10,2)});

@relatedapi: 
- api/ui.daterange_getvalue.md
- api/ui.daterange_value_config.md
@template:	api_method
@descr:

The range object contains two properties, or either of them:

- start - {Date object} a Date object for the start date
- end - {Date object} a Date object for the end date
