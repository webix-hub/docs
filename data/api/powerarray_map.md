map
=============



@short:
	transforms the initial calling array according to the functor

@params:
- functor		function		the method which needs executing
- master		object		the object that the method should be applied to

@returns:
- array		array	the transformed initial array

@example:
view:"datatable",
scheme:{
	$group:{
		by:"year",
		map:{
    		votes:["votes", "sum"]
    	}
	}
}

@related:
	desktop/grouping.md#groupingfunctors
@relatedsample:
	15_datatable/32_grouping/03_aggregation.html
@relatedapi:
	api/refs/groupmethods.md
@template:	api_method
@defined:	PowerArray	
@descr:


