dayTemplate
=============


@short: defines a template for a calendar day cell
	

@type: function
@example:
view:"calendar",
dayTemplate: function(date){
	var html = "<div class='day'>"+date.getDate()+"</div>";
	if(date.getDay() === 5){
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

To enhance the accessibility of the Calendar component it is possible to define a visible template alongside with the ARIA labels
that will be announced by screen reading software.

For these means you need to return an object with the following properties:

- text *{string}* - visible template that will be rendered in the day cell;
- aria *{string}* - text for the ARIA label.

~~~js
view:"calendar",
dayTemplate: function(day){
	var weekend = (day.getDay() === 6 || day.getDay() === 0);
	return {
		text:day.getDate(),
		aria:"Navigated to: "+webix.Date.dateToStr("%d %F %Y")(day)
        	+(weekend?". It's a day off!":".");
	};
};
~~~


