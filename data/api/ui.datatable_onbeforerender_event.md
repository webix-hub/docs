onBeforeRender
=============


@short: occurs each time before the view is rendered
	
@params:
- data      array      the set of data which will be rendered

@returns:
- result  bool  returning <i>false</i> will prevent view rendering

@example:

grid.attachEvent("onBeforeRender", function(){
   webix.message("Rendering start");
});

@template:	api_event

@relatedapi:
	api/ui.datatable_onafterrender_event.md
	api/ui.datatable_render.md
@related:
	desktop/redefinition.md
@descr:
@descr:

In case of DataTable, data is a datastore object of the component

