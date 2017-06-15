onScrollX
=============


@short:
	fires when the user scrolls the table left or right
	

@example:
dtable.attachEvent("onScrollX", function(){
	var state = $$('datatable1').getScrollState();    
	webix.message("The scroll coordinates: ["+state.x+","+state.y+"]");                                                                                                                                           
});

@template:	api_event
@descr:


@relatedapi:
	api/ui.datatable_getScrollState.md
    api/ui.datatable_onscrolly_event.md
@related:
	datatable/sizing.md#scrolling

@seolinktop: [popular javascript framework](https://webix.com)
@seolink: [datagrid in html5](https://webix.com/widget/datatable/)