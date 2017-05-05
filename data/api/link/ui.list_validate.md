@link: api/validatecollection_validate.md

@example:

mylist = webix.ui({
    view:"list",
    template:"#rank#. #title#",
    ...
    rules:{
		title:webix.rules.isNotEmpty
	}
});

/*validate all records*/
var result = mylist.validate();

/*validate first record*/
var result = mylist.validate(mylist.getFirstId());
