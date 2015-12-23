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

- text value in the input [text](desktop/text.md) and [textarea](desktop/textarea.md) field;
- selected item like date in [calendar](desktop/calendar.md) and color in the [colorboard](desktop/colorboard.md);
- state of the two-state control ([checkbox](desktop/checkbox.md), [radio](desktop/radio.md), [toggle](desktop/toggle.md));
- selected option of integral buttons ([tabbar](desktop/tabbar.md), [tabview](desktop/tabview.md), [segmented](desktop/segmented.md);
- selected option of [select](desktop/select.md), [richselect](desktop/richselect.md), and [combo](desktop/combo.md);
- string with selected options of a [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) control.

