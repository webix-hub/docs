@link: api/validatecollection_onvalidationerror_event.md

@descr:

The above pattern of validation goes for collections (used for validating data in datatable, list, dataview, etc.) 

Since **forms** are validated differently, the event changes slightly and has different parametes, 
namely: 

- key (string) - data key that is being validated
- obj  (object) - data object 

~~~js
on:{
	onValidationError:function(key, value ){
		var index = this.getIndexById(id)+1;
		webix.message({ type:"error", text:"Empty title for row "+index });
	}
}
~~~

{{sample 13_form/04_validation/04_message_complex.html}} 

@relatedsamples:
	15_datatable/25_validation/04_message.html
    13_form/04_validation/04_message_complex.html