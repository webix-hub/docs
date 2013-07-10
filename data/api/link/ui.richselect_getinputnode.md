@link: api/ui.button_getinputnode.md


@example:

var unit = $$('unit').getInputNode().value;

@relatedsample:
	98_docs/unit_items.html
@descr:

The method can be used to get the actual **text value** of the [combo](api/refs/ui.combo.md) while the
[getValue()](api/link/ui.combo_getvalue.md) function will return the **ID** of the chosen option. 

The same is true about [select](api/refs/ui.select.md) and [richselect](api/refs/ui.richselect.md). 
	