validate
=============


@short: validates value of input
	
@returns:
- result		boolean		result of validation

@example:
if ($$("mytext").validate()){
	....
}    

@template:	api_method

@related: 
	desktop/data_validation.md
@relatedsample:
	13_form/04_validation/11_per_item_validation.html
@descr:

Note that for proper validation:

- input should be nested into a form;
- but only its own validation rule will be considered.

~~~js
webix.ui({
	view:"form", 
    elements:[
		{ view:"text", required:true, name:"text1" },
		{ view:"text", validate:webix.rules.isNumber, name:"text2" },
    ],
    elementsConfig:{
		on:{
           'onChange':function(newv, oldv){
              this.validate();
            }
        }
    }
});
~~~

