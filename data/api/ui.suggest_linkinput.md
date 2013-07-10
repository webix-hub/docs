linkInput
=============


@short: links a suggest list to an input field
	

@params:
- input		obj		input object 



@example:
var year_suggest = webix.ui({
				view: "suggest",
				data:years,
				width: 70, yCount:8
			});
            
var grid =  new webix.ui({
	view:"datatable",
    ..//congig
});

grida.attachEvent("onAfterEditStart", function(object) {
		if (object.column == "year") { // links suggest to the "year" column
			var editor = this.getEditor(object);
			year_suggest.linkInput(editor.type.getInputNode());
		}
});

@template:	api_method
@relatedsample:
	15_datatable/04_editing/14_autosuggest.html
@related:
	desktop/suggest.md
@relatedapi:
	api/ui.suggest_input_config.md
@descr:


