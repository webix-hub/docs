posRelative
=============

@short: 
	returns the pointer's position relative to the object firing the event

@params:
- ev    event     a native HTML event

@returns:
- position    object      the position object

@example:
<div id="mydiv" style="width:100px; height:100px;border: 1px solid #781351;"></div>
~~~

~~~js
var elem = document.getElementById("mydiv");

elem.onclick = function (e){
	var posRel = webix.html.posRelative(e||event);
    var pos = webix.html.pos(e||event);
    
    console.log(pos);    // returns {x:20,y:501}
	console.log(posRel); // returns {x:20,y:21}
}


@template:	api_method
@relatedapi: api/html_pos.md, api/html_offset.md

@descr:

- **Internet Explorer, WebKit-based browsers** - the method retrieves the pointer's position relative to the object firing the event. <br>
- **Firefox** - the method the pointer's position relative to the last positioned ancestor element.

