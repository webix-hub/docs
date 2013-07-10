validate
=============



@short: checks data in the component during adding new item or editing existing ones
	

@example:

webix.ui({
	view:"datatable",
    ready:function(){
			this.validate();
	}
});


@template:	api_method

@relatedapi: 
	api/refs/rules.md
    api/validatedata_clearvalidation.md
@related:
	desktop/data_validation.md
@relatedsample:
	15_datatable/25_validation/01_existing_data.html
@descr:

Form is validated according to the rules you ought to define for the necessary form fields. See the [corresponding
chapter](api/refs/rules.md) of the API reference. 

