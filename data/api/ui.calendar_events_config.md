events
=============


@short:sets an additional css class that will be applied to days
	

@type: function
@example:
webix.ui({
	container:"listA",
	view:"calendar",
	events:webix.Date.isHoliday // the webix.Date.isHoliday function marks weekend days in red
});
            

@template:	api_config
@related: 
	desktop/calendar.md
	desktop/calendar_css.md
@descr:
The function is called for all days and must return the name of a css class to apply.


