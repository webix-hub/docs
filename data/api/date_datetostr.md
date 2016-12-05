dateToStr
=============


@short:
	creates new date formatting method

@params:
- format		string		date format
- utc		boolean		convert local time to UTC during conversion


@returns:
- formater      function 	formatting function

@example:

var myformat = webix.Date.dateToStr("%m - %d");
var text = myformat(new Date());

//or directly
{
	view:"datepicker",
	format: webix.Date.dateToStr("%d/%m/%y")
}

@template:	api_method
@defined:	Date	
@relatedsample:
	15_datatable/20_templates/05_dates.html
    09_calendar/06_datepicker.html
@related:
	desktop/working_with_dates.md
    helpers/date_formatting_methods.md
@descr:


