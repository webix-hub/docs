remove
=============

@short: removes an HTML element from DOM
	
@params:
- node		element/array		an HTML element (or an array of elements)

@example:
<a id="l1" href='http://google.com'>Google</a>
<a id="l2" href='http://yahoo.com'>Yahoo</a>
<button type="text" onclick="myfunc()">Remove the link</button>
~~~

~~~js
function myfunc ()
{
	var link1 = document.getElementById("l1");
    var link2 = document.getElementById("l2")
    
    webix.html.remove(link1);
    //or webix.html.remove([link1,link2])
}



@template:	api_method
@descr:

@relatedapi:api/html_insertbefore.md