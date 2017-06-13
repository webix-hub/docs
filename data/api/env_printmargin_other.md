printMargin
=============

@todo:
	check 


@short:
	sets the margin for printed pages

@type:number

@default: 72

@example:
webix.env.printMargin = 72;

@template:api_config
@descr:
The default value depends on the [pixel per inch (ppi) ratio](api/env_printppi_other.md) and is calculated as ppi * 0.75. 
The default ppi value is 96, so the margin value is 96*0.75=72.

Margins can also be set via the api/_print.md options. The priority is given to margins set via options. 







