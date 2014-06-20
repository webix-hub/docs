dayTemplate
=============


@short: defines a template for a calendar day cell
	

@type: function
@example:
view:"calendar",
dayTemplate: function(date){
	var html = "<div class='day'>"+date.getDate()+"</div>";
	if(date.getDay() == 5){
		html += "<div class='day_marker'></div>";
	}
	return html;
}


@relatedsample:
- 09_calendar/09_day_template.html
@related:
- desktop/calendar.md



@template:	api_config
@descr:

The default template displays a date without any extra styling. 


