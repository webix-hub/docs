@link: api/ui.button_getvalue.md

@relatedapi:
	api/link/ui.multitext_setvalue.md
    api/link/ui.form_getvalues.md
    api/ui.multitext_getvaluehere.md
    api/ui.multitext_separator_config.md

@descr:

The method collects values from all the fields of a multitext control and aggregates them into a **string with a comma separator**. 

The **separator** can be redefined with the help of a api/ui.multitext_separator_config.md property. 

To get the value of the basic field only, use the api/ui.multitext_getvaluehere.md method. 


####Common info

Value of the control may be:

- text value in the input [text](desktop/controls.md#text) and [textarea](desktop/controls.md#textarea) field;
- text value aggregated from all control fields and separated by comma (default) for the 
[multitext](desktop/controls.md#multitext) control. 
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/controls.md#checkbox), [radio](desktop/controls.md#radio), [toggle](desktop/controls.md#toggle));
- ID of selected option of integral buttons ([tabbar](desktop/controls.md#tabbar), [tabview](desktop/tabview.md), [segmented](desktop/controls.md#segmented)
or selected option of [select](desktop/controls.md#select), [richselect](desktop/controls.md#richselect) 
and [combo](desktop/controls.md#combo));

