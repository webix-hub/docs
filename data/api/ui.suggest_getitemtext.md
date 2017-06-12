getItemText
=============

@short: returns the rendered text of the suggest's item
	

@params:
- id		id		id of the item in question


@returns:
- text		string		text of the related item
	

@example:

var text = $$("mysuggest").getItemText("d12");


@template:	api_method
@descr:

Text will take templating logic of the suggest control into account. 

@relatedapi:
api/ui.suggest_getitemid.md