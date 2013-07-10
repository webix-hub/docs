calendar
=============


@short:the default locale months and days names
	

@type:object

@example:
webix.i18n.calendar: {
		monthFull:["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
		monthShort:["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		dayFull:["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    	dayShort:["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
}
webix.i18n.setLocale("en-US");    

@template:	api_config
@descr:

- **monthFull** - the full names of months starting from January.
- **monthShort** - the short names of months starting from January.
- **dayFull** - the full names of week days starting from Sunday.
- **dayShort** - the short names of week days starting from Sunday.

{{note
You need to call <a href="api/i18n_setlocale.md">setLocale</a> to apply the new format settings
}}

@related:
	datatable/internationalization.md

@relatedapi:
	api/i18n_setlocale.md

@relatedsample:
	15_datatable/20_templates/08_locales.html