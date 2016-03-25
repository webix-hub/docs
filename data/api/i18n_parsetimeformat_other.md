parseTimeFormat
=============

@short: sets the default locale parsing time format. Initially it is **%H:%i**.
	
@type: string

@example:
//altering format for North Americal locale
webix.i18n.parseTimeFormat = "%H:%i:%s";
webix.i18n.setLocale();

@template:	api_config
@descr:

You need to call <a href="api/i18n_setlocale.md">setLocale</a> to apply the new format settings

@related:desktop/localization.md

@relatedapi:api/i18n_setlocale.md


