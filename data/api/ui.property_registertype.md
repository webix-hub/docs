registerType
=============

@short: registeres a new type for property sheet elements
	

@params:
- name		string		name of the new editor
- data		object  	data object that includes template, click behaviour and editor


@example:
prop.registerType("popup",{ 
		editor:"popup"
	}); 

@template:	api_method
@relatedsample:
	07_property/02_custom_checkbox.html
@related:
	desktop/property_sheet.md
@descr:

Editors are based on standard [Webix editors](desktop/editing.md) that can be either taken as they are or with extra functionality
added with the help of extend() method. 

Study the [Property Sheet](desktop/property_sheet.md) article for details. 

