onBeforeRun
=============

@short:
	fires before a selected file is downloaded

@params:

- id		string			the id of the downloaded item

@returns:

- result		boolean			if an event handler returns false, the onBeforeRun handler will not be called


@example:
$$("fmanager").attachEvent("onBeforeRun",function(id){
    webix.confirm({
        text:"Do you want to download this file?",
        ok:"Yes",
        cancel:"No",
        callback:function(result){
            if(result)
                $$("files").download(id);
        }
    });
    return false;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onafterrun_event.md

@relatedsample:
64_file_manager/02_events/02_download.html