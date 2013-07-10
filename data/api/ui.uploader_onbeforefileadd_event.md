onBeforeFileAdd
=============


@short: fires the moment you try to add file to uploader 

@example:
$$("uploader_1").attachEvent("onBeforeFileAdd", function(item){
				var type = item.type.toLowerCase();
				if (type != "jpg" && type != "png"){
					webix.message("Only PNG or JPG images are supported");
					return false;
					}
				});
@relatedsample:
	21_upload/06_integration.html
    
@related:
	desktop/apionly_uploader.md
    
@relatedapi:
	api/ui.uploader_onafterfileadd_event.md


@template:	api_event
@descr:


