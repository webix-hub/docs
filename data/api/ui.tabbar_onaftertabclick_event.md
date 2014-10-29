onAfterTabClick
=============


@short:
	fires after a tab has been clicked

@params:
- id	string, number	the id of the clicked tab

@example: 
	
some.attachEvent("onAfterTabclick", function(id, tab){
    //... some code here ... 
});

@template:	api_event
@defined:	ui.tabbar

@relatedapi:
	api/ui.tabbar_onbeforetabclick_event.md
    api/link/ui.tabbar_onitemclick_event.md
	
@descr:

Unlike the [onItemClick](api/link/ui.tabbar_onitemclick_event.md) event, this one watches clicks over separate tabs and passes the ID of a clicked tab into its handler. 
