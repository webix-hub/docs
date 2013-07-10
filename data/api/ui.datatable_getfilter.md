getFilter
=============
@short:returns the filter object that the component uses to filter the values of the specified column

	

@params:
- columnID    id    the id of a column 


@returns:
- filter    object   the filter object

@example:
columns:[
	{ id:"title",	header:["Film title", {content:"textFilter"}],width:200,	sort:"string"},
	{ id:"year",	header:["Released",  {content:"selectFilter"}] , width:80,	sort:"int"},
]
....

//gets to the filter object of each column and retrieves its current value
var title = this.getFilter("title").value; 
var year = this.getFilter("year").value;  

@template:	api_method

	
@descr:


@relatedapi:
		api/link/ui.datatable_filter.md
        api/ui.datatable_filterbyall.md
        api/ui.datatable_registerfilter.md
@related:
	datatable/filtering.md
@relatedsample:
	15_datatable/03_filtering/03_or.html
