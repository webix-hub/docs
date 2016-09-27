onBeforeDateSelect
=============

@short:
	fires before a user selects date in the DateRange

@params:
- range			object			range object with 'start' and 'end' properties

@example: 
	
$$('daterange1').attachEvent("onBeforeDateSelect", function(range){
    //... some code here ... 
});

@template:	api_event
@relatedapi:
- api/ui.daterange_onafterdateselect_event.md
- api/ui.daterange_onchange_event.md
	
@descr:

The range object contains two properties:

- start - {Date object} a Date object for the start date
- end - {Date object} a Date object for the end date
