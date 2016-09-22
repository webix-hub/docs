value
=============

@todo:
	check 


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
@descr:
The value of the parameter is an object with properties which define the start and end dates of the range.

