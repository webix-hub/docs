getHeaderContent
=============


@short: returns set of helpers for header content manipulation
	

@params:
- id         id         content id

@returns:
- obj        hash        hash of helpers

@example:

webix.ui({
    view:"datatable", id:"mytable",
    columns:[
        { header:{ content:"masterCheckbox", contentId:"cm1" } }
    ] 
});
$$("mytable").getHeaderContent("cm1").check();


@template:	api_method
@descr:


currently it works only with masterCheckbox

#### masterCheckbox

Available API

~~~js
var control = $$("mytable").getHeaderContent("cm1");

//check master checkbox
control.check();

//uncheck master checkbox
control.uncheck();

//get master checkbox state
var state = control.isChecked();
~~~