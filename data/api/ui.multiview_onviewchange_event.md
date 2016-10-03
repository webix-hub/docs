onViewChange
=============


@short:
	fires when the views are switched in the component (regardless of the switching method)

@params:

- prevID		string,number		the id of the view that is switched from
- nextID		string,number		the id of the view that is switched to

@example: 
	
some.attachEvent("onViewChange", function(prevID, nextID){
    //... some code here ... 
});

@template:	api_event
@related:
	desktop/multiview.md
@descr:


