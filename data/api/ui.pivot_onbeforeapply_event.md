onBeforeApply
=============

@short:
	fires on the "Apply" button click 

@params:
- selected_structure			object			the structure object with chosen "filters", "rows", "columns" and "values"

@example:
// specifying header sorting before applying the selected structure
webix.ui({
    view: "pivot",
    on:{
        onBeforeApply: function(structure){
            var columns = structure.columns;
            // apply header sorting
            for(var i =0; i < columns.length; i++){
                if(typeof cols[i] == "string"){
                    cols[i] = {id: cols[i], sort: "string"};
                }
                else
                    cols[i].sort = "string";
            }
        }
    }
});

@template:	api_event
@descr:

Returning *false* within the handler will prevent the execution of further logic and the action will not be applied.

@related:
pivot/customization.md#changingpivotstructure


@relatedapi:
- api/ui.pivot_onapply_event.md
- api/ui.pivot_onbeforecancel_event.md


@seolinktop: [widget library](https://webix.com)
@seolink: [pivot table web](https://webix.com/pivot/)