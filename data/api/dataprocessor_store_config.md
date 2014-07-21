store
=============


@short: allows to define datastore which will be monitored for changes
	

@type: object
@example:

var dp = new webix.DataProcessor({
    store:$$("list").data
});

@template:	api_config
@relatedapi:
	api/dataprocessor_master_config.md
@descr:

You need to either define "store" or "master".


