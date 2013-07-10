refresh
=============



@short:
	repaints the component

@example:
webix.ui({
	container:"box",
	view:"calendar",
    id:"calendar1"
});
            
$$("calendar1").define("weekNumber", true);
$$("calendar1").refresh();

@template:	api_method
@related:
	desktop/redefinition.md
@defined:	ui.calendar	
@relatedapi:
	api/ui.calendar_render.md
@descr:


