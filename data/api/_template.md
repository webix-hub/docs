template
=============

@short: converts string to templating function

@params:
- template      string     template string

@returns:
- code	functor		templating function

@example:
var line = webix.template("Some #name# code");
var text = line({ name:"Webix" });

@related:
	desktop/html_templates.md
@template:	api_method
@descr:

While this method is rarely used directly, the same templating logic is
 used during configuration of data components look.
