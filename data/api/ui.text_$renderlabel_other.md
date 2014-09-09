$renderLabel
=============

@short: renders html for the label
	

@params:
- config       object      control configuration
- id        id          unique id of the control

@returns:
- text		string		html code of control label


@example: 
var label = input.$renderLabel(input.config, "id");

@template:	api_method
@descr:


{{note Not purposed for direct calls }}

Can be used in custom views to redefine html content of the control's label.   