onAfterFileUpload
=============

@short:
	fires after a file has been uploaded successfully and the response from server has come

@params:
- response 		object 			server response 

@example:
$$("fmanager").attachEvent("onAfterFileUpload", function(response){
    // your code
});


@template:	api_event
@descr:
A typical response may contain:

folder: "/" <br>
id: "Data1.csv" <br>
status: "server" <br>
type: "csv" <br>
value: "Data1.csv" <br>


@relatedapi:
api/ui.filemanager_onbeforefileupload_event.md
api/ui.filemanager_uploadfile.md

