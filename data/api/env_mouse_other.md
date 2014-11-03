mouse
=============

@short: set of mouse-specific properties

@type: object

@example:
//attaching handler to the mousedown event on the document body
webix.event(document.body, webix.env.mouse.down, do_something);

@template:	api_config
@descr:

- **down** - "mousedown";
- **up** - "mouseup";
- **move** - "mousemove";
- **context** - mouse event context that contains:
	- *target* - target HTML element;
    - *x* - x coordinate value;
	- *y* - y coordinate value;
    - *time* - time of the event. 

