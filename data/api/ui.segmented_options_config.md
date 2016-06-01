options
=============


@short:
	defines data items of the drop-down list

@type: object
@example:
webix.ui({
	view:"segmented", value:"one", options:[
			{ id:"one", value:"One" },
			{ id:"two", value:"Two"},
			{ id:"three", value:"Three"}
			]
})

@template:	api_config
@defined:	ui.richselect	
@related:
	desktop/controls_guide.md
@relatedsample:
	13_form/01_controls/07_segmented.html
@relatedapi: 
	api/datavalue_getvalue.md
    api/datavalue_setvalue.md
	
	

@descr:
The property is an array of objects, each of which presents a singular select option on a toolbar.<br>

The objects in the array have **2 attributes**:

- **id** - (*id*) the item id
- **value** - (*string*) the item label
- **width** - (*number*) the item width

Nore that the [getValue()](api/link/ui.segmented_getvalue.md) method returns the **ID** of selected option. 



