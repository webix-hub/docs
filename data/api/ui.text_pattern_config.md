pattern
=============

@todo:
	check 

@short:
	a formatting pattern applied to a text input

@type: object,string
@example:
// input formatting pattern set as object
{ 
    view:"text", 
    name:"phone", 
    label:"Phone", 
    pattern:{ mask:"###-## ########", allow:/[0-9]/g}
}

// input formatting pattern set as string
{ view:"text", name:"phone", label:"Phone", pattern:"###-## ########"}

@template:	api_config
@descr:

If set as an object, pattern includes two properties:

- mask - a string that consists of the "#" signs for input characters (can be restricted by the *allow* parameter) and pattern symbols, such as hyphens, dots, spaces, etc.
- allow - a set of characters that are allowed for entering into the field regardless of their position

If pattern set as a string, the *allow* property will take the default value - /[A-Za-z0-9]/g.

@related:
desktop/text.md#formattedtextinputs