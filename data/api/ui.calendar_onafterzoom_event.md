onAfterZoom
=============

@short: fires after zoom level of the calendar has been changed
	

@params:
- level		number		new zoom level 

@example:

calendar.attachEvent("onAfterZoom", function(level){
	//code
});

@relatedapi: 
	api/ui.calendar_onBeforeZoom_event.md
@template:	api_event
@descr:

Webix calendar features **3 zoom levels**: 

- 0 - the initial zoom level, month view is displayed;
- 1 - year view with month names is displayed;
- 2 - ten-year period with year numbers is displayed 

