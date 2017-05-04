onApply
=============

@short:
	fires when the action has been applied by clicking the "Apply" button 

@params:
- selected_structure			object			the structure object with chosen "filters", "rows", "columns" and "values"

@example:
// specifying header sorting before applying the selected structure
webix.ui({
    view: "pivot",
    on:{
        onApply: function(structure){
            //your code
        }
    }
});

@template:	api_event

@related:
pivot/customization.md#changingpivotstructure


@relatedapi:
- api/ui.pivot_oncancel_event.md
- api/ui.pivot_onbeforeapply_event.md
