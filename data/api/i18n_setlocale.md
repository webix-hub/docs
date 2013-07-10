setLocale
=============


@short: sets the locale in use
	

@params:
- name     string      the locale name


@example:

webix.i18n.setLocale("en-US")


@template:	api_method
@defined:	i18n	
@descr:

The method can take only one of a predefined set of values.<br>
Currently, the predefined values are:

- **en-US** - English (United States);
- **fr-FR** - French (Standard);
- **ja-JP** - Japanese;
- **be-BY** - Belarusian;
- **ru-RU** - Russian.

{{note
The method can't be used for dynamical switching locales
}}

@relatedsample:15_datatable/20_templates/08_locales.html
@related:datatable/internationalization.md
@relatedapi:api/i18n_locales_other.md