toFunctor
=============


@short: converts a string to a function
	

@params:
- name	  string 	a string to convert
@returns:
- function	function	a function object

@example:
function check(){
	alert("I'm alive!");
}
webix.toFunctor("check")();

@template:	api_method
@descr:
@relatedapi: api/_toarray.md, api/_tonode.md

