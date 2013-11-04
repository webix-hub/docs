$getValue
=============


@short: called each time when component need to get value from related html input
	

@returns: 
- value      string      value from the html input
@example:

var value = button.$getValue();

@template:	api_method
@descr:

{{note not purposed for direct calls }}

Can be redefined in a custom view to support custom html inputs   
Is called only when component was rendered for sure ( and components html is ready and accessible ) 