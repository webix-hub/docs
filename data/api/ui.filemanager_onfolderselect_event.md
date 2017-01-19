onFolderSelect
=============

@short:
	fires when a folder is selected in the Tree view

@params:
- id		string		the id of the selected folder

@example:
$$("files").attachEvent("onFolderSelect",function(id){
	webix.message("Active folder is '" +this.getItem(id).value+"'");
});


@template:	api_event
@descr:

@relatedsample:
64_file_manager/02_events/01_selection.html