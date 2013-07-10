@link: api/ui.baseview_show.md

@example:
webix.ui({
     id:"views",
     cells:[
            { id:"listView", ..},
            { id:"formView", ..},
            { id:"emptyView", ..}
     ]
});
	
$$('formView').show();

@params:
* show_children		bool		if true, shown nested views as well

@relatedapi:
	api/ui.multiview_back.md
@related:
	desktop/show_switching.md
@relatedsample:
	20_multiview/02_navigation.html
    20_multiview/03_nested_multiviews.html
    
@descr:
	
Read the corresponding article and stude the related sample to learn about nested multiviews. 