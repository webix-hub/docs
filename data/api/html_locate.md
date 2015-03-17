locate
=============


@short: searches a node with the specified attribute in all parents of the specified node (or from the target of the specified event) inclusively and returns the value of the first occurrence

	

@params:
- ev	Event,HTMLElement		a DOM node or a native HTML event
- name	string		the name of an attribute

@returns:
- needle	string		the attribute value or <i>null</i>
	

@example:

<input type="radio" id="myradio" name="Color" value="Blue">
~~~

~~~js
var elem = document.getElementById("myradio");
var ev = elem.onclick = locateFunc;

function locateFunc(e)
{
	alert(webix.html.locate(e, "name"));     //returns 'Color' (takes the event object)
    alert (webix.html.locate(elem, "value")); //returns 'Blue'  (takes the node)
}



@template:	api_method
@descr:


