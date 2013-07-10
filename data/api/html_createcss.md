createCss
=============



@short: converts a set of CSS rules to an active CSS class
	

@params:
- data             object             the hash of CSS rules

@returns:
- name             string           the name of a new CSS class


@example:

node.className = webix.html.createCss({
     "color":"red",
     "text-align":"center"
});


@template:	api_method
@descr:

@relatedapi:api/html_removecss.md
