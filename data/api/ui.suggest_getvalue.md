getValue
=============


@short: gets the ID of a selected item in the option list	

@params:

@returns:
- value		string, number 		ID of a selected option	

@example:
//master is a control with a popup list of options
var suggest = master.getPopup();
var sel = master.setValue();

@related:
	desktop/suggest.md
@relatedapi:    
	api/ui.suggest_setvalue.md
@template:	api_method
@descr:

The method doesn't get value of the **master control** ([text](desktop/text.md), [combo](desktop/combo.md), [multicombo](desktop/multicombo.md),
[richselect](desktop/richselect.md), [multiselect](desktop/multiselect.md)), it gets the ID of a highlighted (selected) option in the suggest list only. 

To get the value of the master control, apply the the api/datavalue_getvalue.md method to it. 
