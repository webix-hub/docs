onTodaySet
=============

@short:
	fires on clicking the 'Today' button

@params:
- date		object		range date


@example:
$$('daterange1').attachEvent("onTodaySet", function(date){
    //some code here 
});

@template:	api_event
@descr:

The range object contains two properties:

- start - {Date object} a Date object for the start date
- end - {Date object} a Date object for the end date


