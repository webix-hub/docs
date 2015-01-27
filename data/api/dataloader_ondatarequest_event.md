onDataRequest
=============


@short: fires when data from the server is requested for linear data structures (List, DataTable, DataView etc.) to implement dynamic data loading

@params:
- start       number      the position which data starts to be loaded from
- count       number      the count of records that need loading
* callback    function    the method called after data loading
* url         string      the data URL

@example:
dtable.attachEvent("onDataRequest", function (start, count) {
  var data = custom_load_data(start, count);
  dtable.parse(data, "json");
));

@related:
	desktop/serverside.md
    desktop/dynamic_loading.md

@template:	api_event
@descr:

[Dynamic loading for linear data structures](desktop/plain_dynamic_loading.md) is triggered during scrolling and paging.
For [hierarchical data structures](datatree/dynamic_loading.md) such as Tree or TreeTable, dynamic data loading is triggered when nodes with
the `webix_kids` flag are expanded.

The component will use the data source specified by its api/atomdataloader_url_config.md property
or via the `url` parameter passed to the api/atomdataloader_load.md method.
