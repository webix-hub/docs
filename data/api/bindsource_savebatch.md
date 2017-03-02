saveBatch
=============


@short:
	makes simultaneous saving of several components

@params:
- handler		function		user-defined handler function



@example:
$$('myform1').bind('myStore');
$$('myform2').bind('myStore');


$$("datatable1").saveBatch(function(){
   $$("form1").save();
   $$("form2").save( $$("form2").getDirtyValues() );
});

@template:	api_method
@defined:	BindSource	
@descr:

The code snippet above shows the most popular use case - saving changes made in 2 bound forms.<br><br>
Both forms store the entire data object. As a result, the second form will overwrite all changes that were made in the first one.<br><br>
To save data simultaneously, we use the saveBatch() method. 
To prevent data overwriting, it's also necessary to use the api/values_getdirtyvalues.md method. It returns only the fields that were changed in the form.


