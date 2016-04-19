pointerevents
=============

@todo:
	add description and type


@short:
	indicates whether [pointer-events](https://developer.mozilla.org/en-US/docs/Web/CSS/pointer-events) are supported

@type:

@example:

webix.env.pointerevents = (
  !webix.env.isIE ||(new RegExp("Trident/.*rv:11")).exec(navigator.userAgent) !== null
);

@template:	api_config
@descr:


