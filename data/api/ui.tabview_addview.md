addView
==================

@short: adds a new cell to the tabview

@params:
- obj	object	cell configuration object

@example:
$$("tabview1").addView({
	header:"New Tab",
    /*optional
    close:true, 
    icon:"users",*/
	body:{
		template:"New content "+webix.uid()
	}
});

@template:api_method
@relatedapi: 
    api/ui.tabview_removeview.md
@related:
	desktop/tabview.md
    desktop/tabs_options.md#usingtabview
@relatedsample:
	20_multiview/13_tabview_dynamic.html
    
@descr:

###Configuration

Configuration object contains setting for the cell header and body: 

- Mandatory parameters: 
	- **header** (string) - cell header text;
	- **body** (obj) - configuration of the view inside the cell;
- Optional parameters:    
	- **close** (boolean) - if true, add a close icon, thus making a tab closable. False by default;
    - **icon** (string) - adds a custom icon for tha tab. Icons are taken from [FontAwesome collection](http://fortawesome.github.io/Font-Awesome/icons/). 

###Additional Info

The method is **tabview-specific**. It adds the new cell to the multiview object and a new tab to the tabbar object. 

There also exists a possibility to manually add a cell and a corresponding tab - check the [related](desktop/tabs_options.md) article. 

For these needs, Webix layouts possess a separate [addView](api/ui.baselayout_addview.md) method for adding child cells, rows and columns.

