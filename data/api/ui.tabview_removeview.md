removeView
========================

@short: removes a cell from the tabview

@example:
//removes active view
var id = $$("tabview1").getValue();
$$("tabview1").removeView(id);


@template: api_method

@relatedsample:
	20_multiview/13_tabview_dynamic.html
@relatedapi:
	api/ui.tabview_addview.md
@related:
	desktop/tabview.md
    desktop/tabs_options.md#usingtabview
    
@descr:


The method is **tabview-specific**. It removes a cell from the multiview object and the corresponding tab from the tabbar object. 

There also exists a possibility to manually remove a cell and a tab - check the [related](desktop/tabs_options.md) article. 

For these needs, Webix layouts posess a separate [removeView](api/ui.baselayout_removeview.md) method for adding child cells, rows and columns.
	
    

