$setValue
=============


@short: called each time when component need to set value in related html input
	

@params:
- value      string       new value for the input

@example:

input.$setValue("new value");

@template:	api_method
@descr:

{{note Not purposed for direct calls }}
Can be redefined in a custom view  
Is called only when component was rendered for sure ( and components html is ready and accessible ) 
