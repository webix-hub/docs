onBeforeDateSelect
=============

@todo:
	check 

@short:
	fires when a user clicks on the end date of the range, but before the range is selected 

@params:
- date		Date object		the selected date object 

@example: 
	
$$('daterange1').attachEvent("onBeforeDateSelect", function(date){
    //... some code here ... 
});

@template:	api_event

@descr: