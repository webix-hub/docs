parseFormat
=============


@short:sets the default locale parsing date format. Initially it is "**%Y-%m-%d "%H:%i**". 
	

@type:string

@example:
//altering format for North Americal locale
webix.i18n.parseFormat = "%d-%m-%Y";
webix.i18n.setLocale("en-US");

@template:	api_config
@descr:

You need to call <a href="api/i18n_setlocale.md">setLocale</a> to apply the new format settings

@related:desktop/localization.md

@relatedapi:api/i18n_setlocale.md