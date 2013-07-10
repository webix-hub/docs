toHex
=============


@short: 	converts a decimal number to the hexadecimal format

@params:
- number	number	the decimal number
* length	number	the length of the hexadecimal number

@returns:
- number	string	the hexadecimal number	

@example:
webix.color.toHex(123456);// -> "1E240"

webix.color.toHex(123456, 10);// -> "000001E240"

@template:	api_method
@descr:
Note, the **length** parameter is used to add leading zeros to the number. 

@relatedapi:
	api/color_hextodec.md