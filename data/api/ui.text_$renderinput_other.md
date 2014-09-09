$renderInput
=============

@short: renders html for the input 
	
@params:
- obj       object      input configuration
- html      string      inner html of the input
- id        id          unique id

@returns:
- text		string		html string with full code of input


@example: 
var id = webix.uid();
var html = "some html content"
var text = input.$renderInput(input.config, html, id);

@template:	api_method
@descr:


{{note Not purposed for direct calls }}

Can be used in custom view to redefine html content of the input.   

