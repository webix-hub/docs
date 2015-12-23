find
=============

@short: returns rows that match the criterion
	

@params:
- criterion	function	match criteria
* first		boolean		if true, only the first found result is returned. False by default.

@returns:
rows	array,object		array of found rows or a row object in case of "first".



@example:
//finds all rows which title match the given value
table.find(function(obj){
	return obj.title.toLowerCase().indexOf(value) != -1;
});


@template:	api_method
@relatedapi:
	api/link/ui.datatable_filter.md
@relatedsample:
	15_datatable/03_filtering/11_find_api.html
@descr:

