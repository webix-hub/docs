excel
=============

@short:
	the parser for data in Excel format

@type: object

@example:
webix.ui({
	type:"space", cols:[ buttons, {
		id:"ss1",
		view:"spreadsheet",
		url: "binary->../common/test.xlsx",
		datatype:"excel",
		math:true
	}]
});


@template:	api_config
@descr:

~~~js
url: "binary->../common/test.xlsx(at)Data[0-10]"
~~~

- string
- @
- name



