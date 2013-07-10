getVisibleCount
=============


@short:
	returns count of visible rows	



@returns:
- count		number		count of visible rows

@example:

var count = $$("mytable").getVisibleCount();

@template:	api_method
@descr:

It returns not ALL rows, and not actual count of loaded rows - but how many rows can be visible with current datatable height

@relatedapi:
	api/datastore_count.md
@related:
	desktop/data_object.md