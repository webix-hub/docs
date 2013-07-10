group
=============



@short:
	groups data

@params:
- stats		object		object with group settings: 'by' and 'map' parameters


@example:
$$("mychart").group({
				by:"year",
				map:{
					sales:["sales","max"]
				}
			});

@template:	api_method
@related:
	desktop/grouping.md
@relatedsample: 
	08_chart/03_group/01_group.html
@relatedapi:
	api/groupstore_ungroup.md
@defined:	GroupStore	
@descr:


