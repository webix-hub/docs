onBeforeDynParse
=============

@short:
	fires before the data loaded from the server-side script will be parsed into the widget

@params:

- folder		object			the object of the folder data was loaded into
- data			hash			the data that will be parsed into FileManager (see details) 
- mode			string			the name of the dynamic loading mode

@returns:
- state		boolean		false, if the operation needs to be blocked


@example:
$$("fmanager").attachEvent("onBeforeDynParse",function(folder, data, mode){
    // your code
    return true;
});

@template:	api_event
@descr:

The *folder* object contains all the properties of the related folder.

The *data* parameter is a hash that includes two "key:value" pairs:

- *data* - (array) the loaded data
- *parent* - (string)  id of the folder where we load new data

@relatedapi:
api/ui.filemanager_onafterdynparse_event.md
api/ui.filemanager_onbeforedynload_event.md

@related:
file_manager/loading_data.md

