options
=============


@short:
	defines data items of the drop-down list

@type: object
@example:
webix.ui({
    view:"richselect",
    value:1, //the initially selected one
    label: 'Fruit',
    options:[ 
        { value:1, label:"Banana"}, 
        { value:2, label:"Papai" }, 
        { value:3, label:"Apple" }
    ]
})

@template:	api_config
@defined:	ui.richselect	
@related:
	desktop/controls_guide.md
@relatedsample:
	13_form/01_controls/11_richselect.html
@relatedapi: 
	api/datavalue_getvalue.md
    api/datavalue_setvalue.md
	
	

@descr:
The property is an array of objects, each of which presents a singular select option in the drop-down list.<br>

The objects in the array have **2 attributes**:

- **id** - (*id*) the item id
- **value** - (*string*) the item label

Nore that the [getValue()](api/link/ui.richselect_getvalue.md) method returns the **ID** of selected option. 



