parse
=============


@short: inits a component defined by markup into Webix layout

@params:
- node	string	datasource (by default it is document body)

@example:
webix.ui(
	webix.markup.parse(data.rawxml()),
	$$("placeholder"))
});

@relatedsample:
	23_init_from_html/06_xml_file_layout.html
@related:
	desktop/html_init.md
@relatedapi:
	api/markup_init.md

@template:	api_method
@descr:

Unlike [init()](api/markup_init.md), parse method doesn't have a target, so the target is set in **webix.ui()** constructor as the view with *"placeholder"* ID. The newly created component replaced this view. 


