removeMissed
=============


@short: defines how to treat items in case of reloading
	

@type:  bool
@example:

dtable.config.removeMissed = true;
dtable.load("updated.json");

@template:	api_config
@related: 
	desktop/data_loading.md
@descr:
The property specifies how to treat data items that were deleted from the data source but still 
exist on the client.

- *false* - (default value) the items will be left on the client after reloading data.
- *true* - the items will be removed from the client after reloading data.