insertBefore
=============

@short: inserts a new node before the specified sibling (the **before** parameter) or as the last child of the specified parent (the **rescue** parameter) if the sibling doesn't exist. <br>
The third parameter is optional and used just to avoid errors in case the specified subling doesn't exist.


@params:
- node		element		a new DOM node
- before	element		the sibling node that the new node will be inserted before
* rescue	element		the parent node used if the subling doesn't exist


@template:	api_method
@descr:


@example:
var newdiv=document.createElement("div");
webix.html.insertBefore(newdiv,document.getElementById("myDiv"))

@relatedapi:api/html_remove.md