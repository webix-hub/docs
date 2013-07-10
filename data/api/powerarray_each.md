each
=============


@short:
	executes a method for each element of an array

@params:
- functor		function		the method that needs executing
- master		object		the object that the method should be applied to


@example:
data.each(function(obj){  
	if (obj.status == "server")
		//statement 1
	else
		//statement 2


@template:	api_method
@defined:	PowerArray	

@relatedsample:
	21_upload/05_attachment.html
@related: 
	desktop/data_object.md
@descr:

In sample above  method is applied to **data** array of data objects, each of which has *status* property and checks the value of this property. 


