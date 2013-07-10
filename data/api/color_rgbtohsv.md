rgbToHsv
=============


@short:
	converts an RGB color code to the HSV format

@params:
- r		number		the Red color value
- g		number		the Green color value
- b		number 		the Blue color value

@returns:
-hsv	array 		the array with HUE SATURATION BRIGHTNESS values	

@example:
webix.color.rgbToHsv(115,116,133);
// -> [236.66666666666669, 0.13533834586466165, 0.5215686274509804]

@template:	api_method
@descr:

@relatedapi:
	api/color_hsvtorgb.md
