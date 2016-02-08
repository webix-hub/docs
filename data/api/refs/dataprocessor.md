DataProcessor 
=============

{{memo Handles client-server data saving operations. }}





<div class='h2'>Methods</div>

{{api
- api/link/dataprocessor_attachevent.md - attaches the handler to an inner event of the component (allows behaviour customizations)
- api/dataprocessor_attachprogress.md - assigns handler for data saving actions
- api/link/dataprocessor_blockevent.md - temporarily blocks triggering of ALL events of the calling object
- api/link/dataprocessor_callevent.md - calls an inner event
- api/link/dataprocessor_clearvalidation.md - removes "data incorrect" highlighting from invalid text fields
- api/link/dataprocessor_define.md - redefines a single configuration property (or a hash of properties)
- api/link/dataprocessor_detachevent.md - detaches a handler from an event (which was attached before by the attachEvent method)
- api/dataprocessor_escape.md - escapes data
- api/dataprocessor_getitemstate.md - return update state for the item in question
- api/dataprocessor_getstate.md - gets the current DataProcessor state
- api/link/dataprocessor_hasevent.md - checks whether the component has the specified event
- api/dataprocessor_ignore.md - the code that you pass here as the parameter will not react on any data changes (will not be affected by 'onStoreUpdated' event handler)
- api/link/dataprocessor_mapevent.md - routes events from one object to another
- api/dataprocessor_off.md - disables dataProcessor
- api/dataprocessor_on.md - enables dataProcessor
- api/dataprocessor_processresult.md - process data saving results
- api/dataprocessor_reset.md - reset updated state for all items
- api/dataprocessor_save.md - mark data record as changed and initiates data saving
- api/dataprocessor_send.md - sends a request to server. Allows to save data changes on server.
- api/dataprocessor_setitemstate.md - set update state for the item
- api/link/dataprocessor_unblockevent.md - cancels blocking events that was enabled by the 'blockEvent' command
- api/link/dataprocessor_validate.md - checks data in the form
}}


<div class='h2'>Events</div>


{{api
- api/dataprocessor_onafterdatasend_event.md - fires the moment data has gone to server
- api/dataprocessor_onafterdelete_event.md - fires after successful data deletion
- api/dataprocessor_onafterinsert_event.md - fires after successful data insertion
- api/dataprocessor_onaftersave_event.md - fires after serverside response has been received and processed
- api/dataprocessor_onaftersaveerror_event.md - fires for data saving errors
- api/dataprocessor_onaftersync_event.md - called when server side response received and processed
- api/dataprocessor_onafterupdate_event.md - fires after successful data insertion
- api/link/dataprocessor_onaftervalidation_event.md - fires after data has been validated
- api/dataprocessor_onbeforedatasend_event.md - called before sending data to server side
- api/dataprocessor_onbeforedelete_event.md - fires before sending data for item insertion
- api/dataprocessor_onbeforeinsert_event.md - fires before sending data for item insertion
- api/dataprocessor_onbeforesaveerror_event.md - fires for data saving errors
- api/dataprocessor_onbeforesync_event.md - called when server side response received, but not processed yet
- api/dataprocessor_onbeforeupdate_event.md - fires before sending data for item insertion
- api/link/dataprocessor_onbeforevalidate_event.md - called before running validation
- api/dataprocessor_onloaderror_event.md - occurs when server side response is invalid and can't be procesed
- api/link/dataprocessor_onvalidationerror_event.md - fires when the form fails to pass validation
- api/link/dataprocessor_onvalidationsuccess_event.md - fires after the form has passed validation successfully
}}


<div class='h2'>Properties</div>

{{api
- api/dataprocessor_autoupdate_config.md - enables automatic data updating on server while any changes on client-side are done
- api/dataprocessor_escape_config.md - custom escaping function
- api/link/dataprocessor_id_config.md - the component ID
- api/dataprocessor_master_config.md - the linked data source. It can be both some independent data source and one of components operated on data (e.g. grid)
- api/dataprocessor_mode_config.md - type of request
- api/link/dataprocessor_on_config.md - allows attaching custom handlers to inner events of the component
- api/dataprocessor_operationname_config.md - name of parameter which will hold operation type
- api/link/dataprocessor_rules_config.md - defines a set of rules for input field(s) of the form(htmlform)
- api/dataprocessor_store_config.md - allows to define datastore which will be monitored for changes
- api/dataprocessor_trackmove_config.md - enables data moving tracking
- api/dataprocessor_undoonerror_config.md - 
- api/dataprocessor_updatefromresponse_config.md - server data update mode
- api/dataprocessor_url_config.md - server side data saving script
}}





<div class='h2'>Other</div>


{{api
- api/link/dataprocessor_config_other.md - all options from initial component configuration
- api/link/dataprocessor_name_other.md - indicates the name of the component (a read-only property)
}}


@index:
- api/refs/dataprocessor_methods.md
- api/refs/dataprocessor_props.md
- api/refs/dataprocessor_events.md
- api/refs/dataprocessor_others.md

