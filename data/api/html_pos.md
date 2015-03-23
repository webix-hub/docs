pos
=============


@short: returns the position of the mouse pointer relative to the upper-left corner of the screen

@params:
- ev	Event		a native HTML event

@returns:
- position	object		the position object

@example:
<input type="radio" id="myradio" name="Color" value="Blue">
~~~

~~~js
document.getElementById("myradio").onclick = function (e){
	var pos = webix.html.pos(e||event);
	console.log(pos);                   //returns { x:21, y:500 }
}


@template:	api_method
@descr:

@relatedapi:api/html_posrelative.md,api/html_offset.md


