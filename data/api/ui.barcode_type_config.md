type
=============

@short:
	sets the barcode type

@type: string 
@example:
webix.ui({
    view:"barcode",
    type: "upcA"
});
 
//or
var barcode = webix.ui({
    view:"barcode"
});
barcode.define("type", "upcA");

@template:	api_config
@descr:
 there are 3 built-in types: "ean8", "ean13" and "upcA" ("ean13" is the default one)

