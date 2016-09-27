getValue
=============


@short:
	returns the current value of the DateRange

@params:


@returns:

- range			object		range object with 'start' and 'end' properties that represent the currently selected date range


@example:
webix.ui({
    view:"daterange",
    id:"daterange1"
});
// setting a value
$$("daterange1").setValue({start:new Date(2016,9,30), end:new Date(2016,10,2)}); 

// getting a value
$$("daterange1").getValue(); 
// -> {start: Sun Oct 30 2016 00:00:00 GMT+0300 (Russia Standard Time), 
// end: Wed Nov 02 2016 00:00:00 GMT+0300 (Russia Standard Time)}

@template:	api_method
@relatedapi:
- api/ui.daterange_value_config.md
- api/ui.daterange_setvalue.md
@descr:
The returned range object contains two properties:

- start - {Date object} a Date object for the start date
- end - {Date object} a Date object for the end date
