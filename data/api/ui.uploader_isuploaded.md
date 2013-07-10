isUploaded
=============

@short: checks whether all sent files have been uploaded to server

@returns:
state	 bool 	*true* if all files are uploaded
	
@example:
$$("uploader_1").isUploaded();

@template:	api_method
@descr:
The function goes through all the uploaded files and checks their state. If at least one of the files has status different from "server", the method returns **false.**

