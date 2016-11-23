mode
=============

@short:
	defines the mode of moving portlets

@type: string
@example:

webix.ui({
    type:"space",
    view:"portlet",
    // "cols"/"rows"
    mode:"replace", 
    body:{
        template:"Drag and drop portlets"
    }
});

@template:	api_config
@descr:
The possible modes of moving portlets are:

- "replace" - portlets replace one another after drag-n-drop
- "cols" - only horizontal movement is allowed
- "rows" - only vertical movement is allowed

@related:
desktop/portlet.md#modesofmovingportlets

@relatedsample:
60_pro/09_portlet/01_portlet_replace.html
60_pro/09_portlet/05_one_direction.html
