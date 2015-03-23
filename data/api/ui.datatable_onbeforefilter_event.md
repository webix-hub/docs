onBeforeFilter
=============


@short: called when filtering process is started, but data is not filtered yet
	

@params:
- id     id   the column id
- value       id    the value to be fitlered by
- config      object            the filter configuration

@returns:
- result  boolean  returning <i>false</i> will prevent data filtering

@example:

dtable.attachEvent("onBeforeFilter", function(id, value, config){
    //ignores short filter-strings during filtering
    if (value.length < 3) return false;
})

@template:	api_event

@relatedapi:
	api/ui.datatable_onafterfilter_event.md
	api/link/ui.datatable_filter.md
    api/ui.datatable_filterbyall.md
    api/ui.datatable_registerfilter.md
    api/ui.datatable_getfilter.md
@related:
	datatable/filtering.md
@descr:


