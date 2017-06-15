refreshFilter
=============


@short:
	rebuilds list of options in select filter

@params:
- id    id      id of column, where filter need to be refreshed


@example:

dtable.refreshFilter("price");


@template:	api_method
@descr:

When called without parameter - refreshes all filters
~~~js
dtable.refreshFilter(); //all filters
~~~


@seolinktop: [mvc library](https://webix.com)
@seolink: [html5 datatable](https://webix.com/widget/datatable/)