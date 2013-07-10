offset
=============


@short: returns the position of an HTML element on the page
	

@params:
- node		element		an HTML element

@returns:
- position	object	the position object
	

@example:

var elem = document.getElementById("myDiv")
webix.html.offset(elem); //returns {y:100, x:500} - the top and left absolute position


@template:	api_method
@defined:	html	
@descr:



@relatedapi:api/html_pos.md, api/html_posRelative.md