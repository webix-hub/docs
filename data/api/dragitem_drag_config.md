drag
=============


@short:
	enables or disables drag-and-drop

@type: boolean,string
@example:
webix.ui({
        view:"datatable",
        ...
        drag:true
});

@template:	api_config
@defined:	DragControl	
@relatedsample:
	15_datatable/22_dnd/01_basic_dnd.html
    17_datatree/22_dnd/01_basic_dnd.html
    22_dnd/02_drag_order.html
@related:
	desktop/dnd.md


  
@descr:
As a string the parameter can take the following values:

The property has several values to define DnD mode:

- drag:*true* - enables drag-n-drop within the component, allows taking items into its other instances and different components on the page;
- drag:*"order"* - enables DnD in the **reorder mode**, allows dragging component item within one component thus changing their order;
- drag:*"source"* - enables dragging items from the component without an ability to drop data from other components;
- drag:*"target"* - enables dropping data to the component. It can take data from outside, but you cannot drag anything from it. 
