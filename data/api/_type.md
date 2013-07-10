type
=============

@short: defines new rendering type for the component

@params:
- config      object     type configuration

@example:
webix.type(webix.ui.list, {
   name:"myItems",
   template:"Item #name#, from #origin#"
});

//...
//defined type can be used during view creating
//...

webix.ui({ view:"list", type:"myItems" })

@related:
	desktop/type.md
@template:	api_method
@descr:
