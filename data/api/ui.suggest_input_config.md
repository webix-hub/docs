input
=============


@short: points to an  HTML input field that houses the suggest list
	

@type: 
@example:
webix.ui({
	width: 300,
	container:"data_container3",
	rows: [
		{ template:"<label for='country3'>Country</label>
        		<input type='text' id='country3' value='Colombia' />", 
          height: 36,
          borderless:true 
        },
	...
		]
});
	
webix.ui({
	view: "suggest",
	input: "country3",
	data:countries
});

@template:	api_config
@related:
	desktop/suggest.md
@relatedsample:
	13_form/01_controls/15_suggest_server.html
@relatedapi:
	api/ui.suggest_linkinput.md
@descr:


