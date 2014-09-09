setValue
=============

@short: selects an item in the option list	

@params:
- value		string, number		ID of an option to select

@example:
//master is a control with a popup list of options
var suggest = master.getPopup();
master.setValue(2);

@related:
	desktop/suggest.md
@relatedapi:    
	api/ui.suggest_getvalue.md
@template:	api_method
@descr:

The method doesn't set value for the **master control** ([text](desktop/controls.md#text), [combo](desktop/controls.md#combo), 
[richselect](desktop/controls.md#richselect), [multiselect](desktop/controls.md#multiselect)), it selects an option in the suggest list only. 

To set the value of the master control, apply the the api/datavalue_setvalue.md method to it. 

