stringify
=============

@short: converts object data into a string 
	

@params: 
- obj	object, array	object to convert

@returns:
- string	string		resulting string

@example:

var str = webix.stringify({title:"Webix 4.3", released: new Date(2017, 3, 29)});
//returns {"title":"Webix 4.3","released":"2017-04-29 00:00"}

@template:	api_method
@descr:

###Converting dates to strings

The method performs the same operation as JSON.stringify(), but converts date objects into strings according to the current [webix.i18n.parseFormat](api/i18n_parseformat_other.md),
which is "%Y-%m-%d %H:%i" for the default "en-US" locale. To alter it globally, follow the [related article](desktop/localization.md#alteringalocale).

###Usage in library

The method is used by Webix for the following operations: 

- before sending data to server within the webix.ajax() api/ajax_stringify.md method;
- before saving data to a [local](api/refs/storage.local.md), [session](api/refs/storage.session.md) or [cookie](api/refs/storage.cookie.md) storage. 
