DataRecord 
=============

{{memo Data View-less component that stores a single data record. }}





<div class='h2'>Methods</div>

{{api
- api/link/datarecord_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/link/datarecord_bind.md - binds components
- api/link/datarecord_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/datarecord_callevent.md - calls an inner event
- api/link/datarecord_define.md - redefines a single configuration property (or a hash of properties)
- api/link/datarecord_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/datarecord_getvalues.md - gets hash of data values
- api/link/datarecord_hasevent.md - checks whether the component has the specified event
- api/datarecord_isvisible.md - returns true if current view is visible
- api/link/datarecord_load.md - loads data from an external data source.
- api/link/datarecord_mapevent.md - routes events from one object to another
- api/link/datarecord_parse.md - loads data to the component from an inline data source
- api/datarecord_refresh.md - repaints the whole view or a certain item
- api/datarecord_setvalues.md - sets values for all inputs in the component
- api/link/datarecord_unbind.md - breaks "bind" link
- api/link/datarecord_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
}}


<div class='h2'>Events</div>


{{api
- api/link/datarecord_onafterload_event.md - fires after data loading is complete
- api/link/datarecord_onbeforeload_event.md - occurs immediately before data loading has been started
- api/link/datarecord_onbindrequest_event.md - fires when the component is ready to receive data from the master component
- api/datarecord_onchange_event.md - fires when the user changes the value of the DataRecord object
- api/link/datarecord_onloaderror_event.md - fires when an error occurs during data loading ( invalid server side response )
}}


<div class='h2'>Properties</div>

{{api
- api/link/datarecord_data_config.md - JavaScript array containing data for the component
- api/link/datarecord_datafeed_config.md - the URL that the component will use to reload data during binding
- api/link/datarecord_datatype_config.md - the type of loaded data
- api/link/datarecord_id_config.md - the component ID
- api/link/datarecord_on_config.md - allows attaching custom handlers to inner events of the component
- api/link/datarecord_url_config.md - the URL which the component will use to load data after its initialization
}}





<div class='h2'>Other</div>


{{api
- api/link/datarecord_config_other.md - all options from initial component configuration
- api/link/datarecord_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/datarecord_methods.md
- api/refs/datarecord_props.md
- api/refs/datarecord_events.md
- api/refs/datarecord_others.md

