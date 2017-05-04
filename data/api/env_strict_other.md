strict
=============

@short: a read-only boolean flag indicating whether a strict mode is enabled for Webix library
	

@type:boolean

@example:

if(webix.env.strict)
   //your code

@template:	api_config

@default: false
@descr:

In Strict mode Webix doesn't use "eval".

Strict mode can be enabled by defining a "webix_strict" global variable **before** Webix files are included into the page: 

~~~html
<script>
    window.webix_strict = true;
</script>
<script src="../webix.js" type="text/javascript"></script>
<link rel="stylesheet" href="../webix.css" type="text/css"> 
~~~


{{note
Note that [datatable math](datatable/formulas.md) won't work with the strict mode enabled.
}}







