saveBatch
=============


@short:
	makes simultaneous saving several components

@params:
- func		function		user-defined handler function



@example:
$$('myform1').bind('myStore');
$$('myform2').bind('myStore');
 
$$('myStore').saveBatch(function(){
        $$('myform1').save();
        $$('myform2').save();
});

@template:	api_method
@defined:	BindSource	
@descr:

The code snippet above shows the most popular use case - saving changes made in 2 bound forms.\\
Sequential saving provokes data loss: when we save data in one form, the second form is updated by old data. The method helps to prevent losses and save data simultaneously.
