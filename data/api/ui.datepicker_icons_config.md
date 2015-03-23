icons
=============

@short: shows "Today" and "Clear" icons for calendar and datepicker popup	

@type: boolean
@example:
{ view:"datepicker", icons:true }

@relatedsample:
	09_calendar/10_icons.html

@related:
	desktop/calendar.md
    desktop/controls_guide.md#datepicker
	desktop/localization.md
@template:	api_config
@descr:

Text of the icons may be altered within the current locale as: 

~~~js
webix.i18n.calendar.clear: "Clear New";
webix.i18n.calendar.today: "Today New";
webix.i18n.setLocale();
~~~

Locales can take HTML as well, e.g. you can include span elements with icons. 
