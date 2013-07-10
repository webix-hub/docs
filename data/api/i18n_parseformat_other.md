parseFormat
=============


@short:sets the default locale parsing date format. Initially it's "**%Y-%m-%d**" (the default MySQL date format) 
	

@type:string

@example:
webix.i18n.parseFormat = "%d-%m-%Y";
webix.i18n.setLocale("en-US");

@template:	api_config
@descr:

You need to call <a href="api/i18n_setlocale.md">setLocale</a> to apply the new format settings


@related:datatable/internationalization.md

@relatedapi:api/i18n_setlocale.md