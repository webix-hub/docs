getValue
=============


@todo:
	check 

@short:
	returns the current value of the DateRange

@params:


@returns:

- range			object		a Date object that represents the currently selected date range


@example:
webix.ui({
    container:"box",
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
@descr:
The returned Date object contains two properties:

- start - {Date object} a Date object for the start date
- end - {Date object} a Date object for the end date
