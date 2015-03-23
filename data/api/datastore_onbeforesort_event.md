onBeforeSort
=============


@short:
	fires before sorting dataset

@params:
- by		string,function		template of sort-by field
- dir		string		direction of sorting
- as		string,function		type of sorting

@returns:
- result  boolean  returning false will prevent sorting

@example: 
	
some.attachEvent("onBeforeSort", function(by, dir, as){
    //... some code here ... 
    //return false to block operation
    return true;
});

@template:	api_event
@defined:	DataStore

@relatedapi:
	api/datastore_sort.md
    api/datastore_onaftersort_event.md
@related:
	datatable/sorting.md#programmaticsorting
    desktop/filter_sort.md
    datatree/sorting.md 
	desktop/chart_operations.md
	
@descr:


