onBeforeFilter
==============


@short: fires before datatable filtering
	
@params:

- columnId  id  id of column for filtering
- value  string  filter string
* compare  function  custom comparation function

@returns:

- result  boolean  returning false will prevent filtering 

@example:
dtable.attachEvent("onBeforeFilter", function(column, value){
    if (value == 0) return false;
    
    webix.message("Filtering...");
    return true;
});

@template:	api_event

@relatedapi:
	api/datastore_filter.md
    api/datastore_onafterfilter_event.md
    
@related:
	datatable/filtering.md
    datatree/filtering.md
    desktop/filter_sort.md
    
@descr:

{{note If you have multiple filters assigned - event will fire for all of them }}
