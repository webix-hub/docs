onAfterRender
=============


@short:  occurs each time after the view is rendered
	
@params:
- data      array      the set of data which was rendered

@example:

grid.attachEvent("onAfterRender", function(){
   webix.message("Rendering end");
});

@template:	api_event
@relatedapi:
	api/ui.datatable_render.md
    api/ui.datatable_onbeforerender_event.md
@related:
	desktop/redefinition.md
@descr:

In case of DataTable, data is a datastore object of the component



@seolinktop: [widget library](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)