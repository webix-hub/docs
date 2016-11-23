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

@related:
pivot/customization.md#changingpivotstructure