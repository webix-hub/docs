onErrorResponse
=============

@short:
	fires if an error has occured during some operation

@params:

- requestData		object			the data sent with the request
- response			string			the server response

@example:

$$("files").attachEvent("onErrorResponse", function(requestData,response){
    var action = requestData.action;
    // your code
    return true;
});


@template:	api_event
@descr:

@relatedsample:
64_file_manager/02_events/06_error.html