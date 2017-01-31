onAfterDynParse
=============

@todo:
	check

@short:
	fires after the data loaded from the server-side script will be parsed into the widget

@params:

- folder		object			the object of the folder data was loaded into
- data			hash			the data that will be parsed into FileManager (see details) 
- mode			string			the name of the dynamic loading mode

@example:
$$("fmanager").attachEvent("onAfterDynParse",function(folder, data, mode){
    // your code
});

@template:	api_event
@descr:

The *folder* object includes 2 properties:

- *action* - (string) the name of the dynamic loading mode
- *source* - (string) the id of the folder that requests for data

The *data* parameter is a hash that includes two "key:value" pairs:

- *data* - (array) the loaded data
- *parent* - (string)  id of the folder where we load new data

@relatedapi:
api/ui.filemanager_onbeforedynparse_event.md
api/ui.filemanager_onbeforedynload_event.md