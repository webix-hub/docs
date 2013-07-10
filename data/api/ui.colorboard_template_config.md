template
=============


@short: defines a custom template that will be applied to the component
	

@type: function
@example:
webix.ui({
	container:"box",
	view:"colorboard",
	cols	:7,
	rows	:4,
	width	:600,
	height	:370,
	template:"<div class=\"value_cell\">" +
			"<div>{obj.val}</div>" +
			"<div class=\"color_block\" style=\"background:{obj.val};\"></div>" +
			"</div>"
});
        
@relatedsample:
	24_colorpicker/02_custom_template.html
@related:
	desktop/html_templates.md
    desktop/colorboard.md
@template:	api_config
@descr:


