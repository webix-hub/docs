value
=============


@short: sets the initially selected date range
	

@type: object
@example:
webix.ui({
	view:"daterange",
    value:{
		start: new Date(), 
		end: webix.Date.add(new Date(), 2, "month")
	}
});	


@template:	api_config
@relatedapi:
- api/ui.daterange_setvalue.md
- api/ui.daterange_getvalue.md
@descr:
The value object contains two properties:

- start - {Date object} a Date object for the start date
- end - {Date object} a Date object for the end date

