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

The method can take only one of a predefined set of values (locale names):

- **'en-US'** - North American (used by default);
- **'ru-RU'** - Russian;
- **'fr-FR'** - French;
- **'ja-JP'** - Japanese;
- **'be-BY'** - Belarusian;
- **'de-DE'** - German;
- **'es-ES'** - Spanish;
- **'it-IT'** - Italian;
- **'zh-CN'** - Chinese.

**Webix Pro** edition includes over **300 locales** to match a great variety of cultures. 

The method can be used to apply the changes done to the locale in use. 

~~~js
webix.i18n.parseFormat = "%d-%m-%Y";
webix.i18n.setLocale("en-US");
~~~

But the method is not enough for switching locales dynamically. After setting another locale, you need to recreate the view (see the related sample). 

@relatedsample:15_datatable/20_templates/08_locales.html
@related:desktop/localization.md
@relatedapi:api/i18n_locales_other.md

