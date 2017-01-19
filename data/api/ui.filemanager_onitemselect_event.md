onItemSelect
=============

@todo:
	check 

@short:
	fires when a folder is selected in the "Files" or "Table" views

@params:
- id	string		the id of the selected folder

@example:
$$("files").attachEvent("onItemSelect",function(id){
    webix.message("The selected folder is '" +this.getItem(id).value+"'");
});

@template:	api_event
@descr:

