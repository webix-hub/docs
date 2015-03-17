strToDate
=============

@short:
	creates new date parsing method

@params:
- format		string		date format
- utc		boolean		convert string in UTC time to date in local time


@returns:
- formater      function 	formatting function	

@example:

var myparse = webix.Date.strToDate("%m - %d");
var date = myparse("04 - 22");

@template:	api_method
@defined:	Date	
@relatedsample:
	15_datatable/20_templates/06_dates_string.html
@related:
	helpers/date_formatting_methods.md
    desktop/working_with_dates.md
@descr:



