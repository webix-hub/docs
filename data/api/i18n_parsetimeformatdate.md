parseTimeFormatDate
=============

@short: converts a date object to a string in the parsing format with respect to time
	
@params:
- date	string	string in the needed format with time value

@returns:
- date	object	date object with the needed time	

@example:
var hours = webix.i18n.parseTimeFormatDate("10:00").getHours();


@template:	api_method
@descr:

The default [parseTimeFormat](api/i18n_parsetimeformat_other.md) is **%H:%i**.

