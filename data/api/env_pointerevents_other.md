pointerevents
=============

@todo:
	check!


@short:
	indicates whether pointer-events are supported

@type:boolean

@example:

webix.env.pointerevents = (
  !webix.env.isIE ||(new RegExp("Trident/.*rv:11")).exec(navigator.userAgent) !== null
);

@template:	api_config
@descr:
You can read about pointer-events [here](https://developer.mozilla.org/en-US/docs/Web/CSS/pointer-events) 

