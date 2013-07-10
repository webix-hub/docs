onValidationError
=============


@short: fires when newly loaded/added/edited data fails to pass validation
	

@params:

@example: 
webix.ui({
	view:"datatable", 
	rules:{
		title:webix.rules.isNotEmpty
	},    
	on:{
		onValidationError:function(id, details){
			var index = this.getIndexById(id)+1;
			webix.message({ type:"error", text:"Empty title for row "+index });
		}
     }
});


@template:	api_event

@relatedsample: 
	15_datatable/25_validation/04_message.html

@relatedapi:
	api/validatecollection_validate.md
    api/refs/rules.md
    api/validatecollection_onvalidationsuccess_event.md
    
@related:
	desktop/data_validation.md
	
@descr:


