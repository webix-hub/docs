AtomDataLoader 
=============

{{memo Primitive data loader. }}





<div class='h2'>Methods</div>

{{api
- api/atomdataloader_load.md - loads data from an external data source
- api/atomdataloader_parse.md - loads data to the component from an inline data source
}}


<div class='h2'>Events</div>


{{api
- api/atomdataloader_onafterload_event.md - fires after server side loading is complete
- api/atomdataloader_onbeforeload_event.md - occurs immediately before data loading has been started
- api/atomdataloader_onloaderror_event.md - fires when an error occurs during data loading (invalid server side response)
}}


<div class='h2'>Properties</div>

{{api
- api/atomdataloader_data_config.md - JavaScript array containing data for the component
- api/atomdataloader_datafeed_config.md - the URL that the component will use to reload data during binding
- api/atomdataloader_datatype_config.md - the type of loaded data
- api/atomdataloader_url_config.md - the URL the component will use to load data after its initialization
}}





@index:
- api/refs/atomdataloader_methods.md
- api/refs/atomdataloader_props.md
- api/refs/atomdataloader_events.md
