@link: api/validatedata_validate.md

@example:
	var form1 = [
			{ view:"text", label:'Login', name:"login" },
			{ view:"text", label:'Email', name:"email" },
			{ view:"button", value: "Submit", click:function(){
					this.getParentView().validate(); //form.validate()
				}
			}
		];

@relatedsample:
	13_form/04_validation/01_basic.html
@relatedapi:
	api/link/ui.form_clearvalidation.md
    api/link/ui.form_rules_config.md