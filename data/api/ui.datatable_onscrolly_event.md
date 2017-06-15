onScrollY
=============


@short:fires when the user scrolls the table up or down 
	

@example:
dtable.attachEvent("onScrollY", function(){
   			var state = $$('datatable1').getScrollState();    
			webix.message("The scroll coordinates: ["+state.x+","+state.y+"]");                                                                                                                                           
}) 

@template:	api_event
@descr:


@relatedapi:
	api/ui.datatable_getScrollState.md
    api/ui.datatable_onscrollx_event.md
    
@related:
	datatable/sizing.md#scrolling

@seolinktop: [open source html5 framework](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)