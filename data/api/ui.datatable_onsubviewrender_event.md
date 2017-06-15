onSubViewRender
=============


@short:
	fires each time subview is rendered

@params:
- view			object			the rendered subview
- item			object			the item that a subgrid is rendered for

@example:
$$("$datatable1").attachEvent("onSubViewRender",function(view, item){
	webix.message("A subview is rendered");
});

@template:	api_event
@descr:

@edition:pro

@seolinktop: [javascript component library](https://webix.com)
@seolink: [html5 datatable](https://webix.com/widget/datatable/)