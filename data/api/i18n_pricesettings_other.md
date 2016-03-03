priceSettings
=============


@short: sets the format of the price number
	

@type: object

@example:
webix.i18n.priceSettings:{
		groupSize:3,        //the number of digits in a group
		groupDelimiter:" ", //a mark that divides numbers with many digits into groups
		decimalDelimiter:"",//the decimal delimiter
		decimalSize:0       //the number of digits after the decimal mark
}
webix.i18n.setLocale();

@template:	api_config

@relatedapi: api/i18n_price_other.md,api/i18n_setlocale.md

@related:desktop/localization.md


@descr:

As a string the parameter can take only one of a predefined set of values. <br> 
The predefined values are:

- **'null'** - the value 'says' to apply the default number setting


{{note
You need to call <a href="api/i18n_setlocale.md">setLocale</a> to apply the new format settings
}}