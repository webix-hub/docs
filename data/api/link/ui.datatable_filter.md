filter
=============


@short:
	filters the component

@params:
- text		template,function		a template of filtered value or function
- value		string		the filtering mask
- preserve	boolean		if set to <i>true</i>, each next filtering criteria will be applied to the already filtered list	

	

@example:
//filters all fields with 'abc' in the 'text' property
//using a template
list.filter('#text#',"abc")

//using a function
list.filter(function(obj){
	return obj.text.toString().indexOf("abc") != -1;
});

@template:	api_method
@defined:	DataStore	
@descr:


@related:
	datatable/filtering.md
    datatree/filtering.md
    desktop/filter_sort.md

@relatedapi:
	

@relatedsample:
    08_chart/08_dynamic/04_filtering.html
    15_datatable/03_filtering/05_custom.html
    05_list/10_filtering.html
