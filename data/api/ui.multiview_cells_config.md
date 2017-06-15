cells
=============

@short:
	array with view objects

@type: object
@example:
webix.ui({
    view: "multiview",  // optional
    cells: [
        { view: "list", id: "listview", ... },
        { view: "form", id: "formview", elements: [...] }
    ]
});

@template:	api_config
@defined:	ui.multiview	
@related:
    desktop/tabview.md
    desktop/tabbar_switching.md
    desktop/show_switching.md
@relatedsample:
    20_multiview/02_navigation.html
    02_toolbar/02_tabbar.html
    02_toolbar/03_tabview.html
@descr:

- Multiview cells may contain any UI [components](desktop/components.md) and [layout](desktop/layout.md) elements you like. 
- Each cell has a unique ID to apply methods like api/link/ui.multiview_show.md and api/ui.multiview_back.md to it. 
- If your layout object has a **cells** property, it automatically becomes a multiview, so you don't have to specify the view type.
- Switching between cells is implemented with specialized buttons ([tabbar](desktop/tabbar.md) and [segmented](desktop/segmented.md)), [tabview](desktop/tabview.md) or 
dedicated functions. 


@seolinktop: [javascript component library](https://webix.com)
@seolink: [multi view](https://webix.com/widget/multiview/)