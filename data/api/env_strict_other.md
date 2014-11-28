strict
=============

@short: enables strict mode for webix library. 
	

@type:boolean

@example:

webix.env.strict = true;

@template:	api_config
@descr:

*False* by  default. 

In Strict mode Webix doesn't use "eval".

Should be enabled if **Content Security Policy** is switched on for the application or if the application runs in a **"strict" mode** 
The flag should be enabled **before** Webix files are included into the page. 

{{note
Note that [datatable math](datatable/formulas.md) won't work with the **webix.env.strict** enabled.
}}







