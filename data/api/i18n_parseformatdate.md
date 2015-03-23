parseFormatDate
=============


@short: converts a string in the parsing date format to a Date object
	

@params:
- date    string    a date as a string


@returns:
- date    object     a Date object
	

@example:

var date = webix.i18n.parseFormatDate("2001-02-16");

@template:	api_method
@defined:	i18n	
@descr:


The default format is defined by the locale in use and initially it's "**%Y-%m-%d**" (the default MySQL date format).