getChildViews
=============

@short:returns child views of the calling component
	


@returns:
- childs	array	an array of child views objects

@example:
var tree = webix.ui({ 
	id:"mylayout",
    rows:[
    	{ view:"toolbar", type:"MainBar" },
        ...
  	]
});

var toolbar = $$('myLayout').getChildViews()[0];
var tbarName = $$('myLayout').getChildViews()[0].name;

@relatedapi:
	api/link/ui.datatable_getparentview.md
@related:
	desktop/view.md#basicviewmethods
@template:	api_method
@descr:


					