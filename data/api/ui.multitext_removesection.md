removeSection
=============

@short: removes an additional field from the multitext group
	

@params:
* id	string, number		id of the field to remove

@example:

multitext.removeSection("$multitext2");

@relatedapi:
	api/ui.multitext_addSection.md
@related:
	desktop/controls.md#multitext
@template:	api_method
@descr:

Only additional fields can be removed, even if the ID of the basic field is passed into the function. 

If no ID is provided, all the additional fields are removed, only the first (basic) field remains. 

