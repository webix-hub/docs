animate
=============


@short: animate some hmtl area
	

@params:

- html_element    HTMLElement    html object ( or html id ) which will be animated
- animation    object    configuration of animation


@example:
webix.animate("some_div", { type: "flip" });

@template:	api_method
@descr:

Method is not purposed for direct calls. It is called by multiview or some other components when necessary. 

### Configuration

- type:  {string} flip, slide, flipback, fade, show
- direction: {string} right, left, top, bottom
- subtype: {string }out, in (for slide), horizontal, vertical (for flip)
- x: {int} slide value for X
- y: {int} slide value for Y
- duration: {int} animation duration in ms
- delay: {int} delay before animation in ms
- timing: {int} animation timing in ms
- callback: {code} code to call after animation end
- master: {obj} object, which will be accessible by "this" in the callback method