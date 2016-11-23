@link: api/ui.button_label_config.md

@short:
	the text label of the rich text editor

@example:

webix.ui({
	view:"form",
	elements:[
		{ view:"text", label:"Email"},
		{ view: "richtext", label:"Mytext"}
		{ cols:[
			{ view:"button", label:"Login" , type:"form" },
			{ view:"button", label:"Cancel" }
		]}
	]
});
