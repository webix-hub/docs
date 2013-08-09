@link: api/datastore_getitem.md

@related:
	datatable/get_set_data.md#gettingthevalue
    desktop/data_object.md

@example:
//'record' variable will contain an object of the related DataTable row, 
var record = dtable.getItem("rowId");
 
//you can access data members directly
var title = record.title;

