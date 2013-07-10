onBindUpdate
=============


@short: fires when data is changed in the child and 'save()' is called to update the master.
	

@params:
- data          object           the updated data
- key			id             the id of the child component

@example: 
	
some.attachEvent("onBindUpdate", function(data, key){
    //... some code here ... 
});

@template:	api_event
@relatedapi:
	api/DataProcessor_save.md

	
@descr:
Part of bind API. Makes no sense if used alone

