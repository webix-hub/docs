getFilterHelper
=============

@todo: check the link to sample

@short:
	returns the function that implies the filtering logic 

@params:

@returns:

- helper		function		the function that implies the filtering logic


@example:
var helper = $$("querybuilder1").getFilterHelper();
...
$$("$datatable1").filter(helper);

@template:	api_method
@descr:

The returned "helper" function iterates through the dataset items and checks whether they correspond to
the filter rules. The "helper" function returns *true* if the item complies with the rule and *false*, if it doesn't.

After you've received the helper function, you can pass it to the Webix api/link/ui.proto_filter.md method to enable filtering of data components with Query Builder.

@related:
querybuilder/usage.md

@relatedsample:
66_querybuilder/01_initialization/02_basic.html
