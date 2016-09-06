ungroup
=============



@short:
	ungroups data

@params:
- mode		boolean		defines whether the component should be re-rendered after ungrouping (<i>true</i> by default)


@example:
myview.group({
    by:"company", // 'company' is the name of data property
    map:{
        sales:["sales","sum"]
    }   
});
...
myview.ungroup();

@related:
	desktop/grouping.md
@relatedapi:
	api/group_group.md

    
@template:	api_method
@defined:	Group	
@descr:


