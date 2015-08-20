events
=============


@short:sets an additional css class that will be applied to days
	

@type: function
@example:
webix.ui({
	container:"listA",
	view:"calendar",
    // the webix.Date.isHoliday function marks weekend days with color
	events:webix.Date.isHoliday
});
            

@template:	api_config
@related: 
	desktop/calendar.md
	desktop/calendar_css.md
@descr:
The function is called for all days and must return the name of a css class to apply.


