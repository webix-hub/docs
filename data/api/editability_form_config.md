form
=============


@short: linked form
	

@type: string
@example:

webix.ui({
  view:"popup", id:"popupform",
  body:{ view:"form", elements:[ /*...*/ ]}
});

webix.ui({
  view:"datatable", editable:true, form:"popupform"
});



@template:	api_config
@descr:

ID of linked form, which will be used for edit operations


