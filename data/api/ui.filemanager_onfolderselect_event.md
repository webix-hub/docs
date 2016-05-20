onFolderSelect
=============

@short:
	fires when a folder is selected

@params:
- id		string		the folder id

@example:
onFolderSelect: function(id){
	webix.message("Active folder is '" +this.getItem(id).value+"'");
}


@template:	api_event
@descr:

@relatedsample:
64_file_manager/02_events/01_selection.html