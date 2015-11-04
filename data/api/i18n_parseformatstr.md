parseFormatStr
=============


@short: converts a Date object to a string in the parsing format 
	

@params:
- date    object     a Date object

@returns:
- time    string    a time as a string in the parsing format

	

@example:

var text = webix.i18n.parseFormatStr(new Date());

@template:	api_method
@defined:	i18n	
@descr:


The default format is defined by the locale in use and initially it's "**%Y-%m-%d "%H:%i**" ( the default MySQL date format ).
