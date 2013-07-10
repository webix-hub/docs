onIdChange
=============


@short: event fires when id of record changed
	

@params:
- oldid    id    old record id
- newid  id    new record id

@example:
dtable.attachEvent("onIdChange", function(oldid,newid){
    webix.message("Id was changed");
));

@relatedapi:
	api/datastore_id.md
    api/datastore_changeid.md

@template:	api_event
@descr:

