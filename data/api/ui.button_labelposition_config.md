labelPosition
=============


@short: positions label in relation to the control

@values:
- top	places label above the control
	

@type: string
@example:

{view: "text", label:"Some Text", labelPosition:"top"}

@relatedsample:
	13_form/02_api/03_label_position.html
@related: 
	desktop/controls_guide.md
@relatedapi:
	api/ui.text_bottomlabel_config.md

@template:	api_config
@descr:

By default label features left alignment, so the top label will be placed to the left upper corner of the control.

Top right alignment is achieved by applying both properties:

~~~js
{view: "text", label:"Some Text", labelAlign:"right", labelPosition:"top"}
~~~

@reserved: true