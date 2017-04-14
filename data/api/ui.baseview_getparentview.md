getParentView
=============

@short:
	returns the parent view of the component


@returns:
-obj   object   the parent object  

@example:
webix.ui({ 
  rows:[
    { id:"myview", template:"some" }
  ]
});

var layout = $$("myview").getParentView();


@relatedapi:
	api/link/ui.datatable_getchildviews.md
@related:
	desktop/view.md
@relatedsample:
	24_colorpicker/04_in_form.html
@template:	api_method
@defined:	ui.baseview	
@descr:


