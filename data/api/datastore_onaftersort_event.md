onAfterSort
=============


@short:
	fires after sorting dataset

@params:
- by		string/function			template of sort-by field
- dir		string					direction of sorting
- as		string/function  		type of sorting

@example: 
	
some.attachEvent("onAfterSort", function(by, dir, as){
    //... some code here ... 
});

@template:	api_event
@defined:	DataStore

@relatedapi:
	api/datastore_sort.md
    api/datastore_onbeforesort_event.md
@related:
	datatable/sorting.md#programmaticsorting
    desktop/filter_sort.md
    datatree/sorting.md
	
@descr:


