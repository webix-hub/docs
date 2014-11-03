controls
=============

@short: sets text labels for some elements of Webix components
	
@type: object

@example:

webix.i18n.control.select = "Done";
webix.i18n.setLocale("en-US");

@template:	api_config

@defined:	i18n	
@related:desktop/localization.md
@relatedapi:api/i18n_setlocale.md
@relatedsample:
	15_datatable/20_templates/08_locales.html
	60_pro/02_form/02_multiselect.html
@descr:

The settings contains a collection of localization options for the controls that are used as parts of other Webix components 
and are likely to be localized in a scope rather than redefining each instance separately:

- **select** - text label of the 'Select' button of the [multisuggest](api/refs/ui.multisuggest.md) 
(used in [multiselect](api/refs/ui.multiselect.md) input, editor and filter). The default value for North Americal locale is "Select". 


