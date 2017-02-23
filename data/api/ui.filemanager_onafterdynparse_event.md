onAfterDynParse
=============

@short:
	fires after the data loaded from the server-side script has been parsed into the widget

@params:

- folder		object			the object of the folder data was loaded into
- data			object			the data that has been parsed into FileManager (see details) 
- mode			string			the name of the dynamic loading mode

@example:
$$("fmanager").attachEvent("onAfterDynParse",function(folder, data, mode){
    // your code
});

@template:	api_event
@descr:

The *folder* object contains all the properties of the related folder.

The *data* object includes 2 properties:

- *data* - (array) the loaded data
- *parent* - (string)  id of the folder where we load the new data

@relatedapi:
api/ui.filemanager_onbeforedynparse_event.md
api/ui.filemanager_onbeforedynload_event.md