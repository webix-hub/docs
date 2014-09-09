@link: api/ui.button_setvalue.md

@example:
//three-field multitext
miltitext.setValue("valueA, valueB, valueC");

@relatedapi:
	api/link/ui.multitext_getvalue.md
    api/ui.multitext_setvaluehere.md
    api/ui.multitext_separator_config.md

@descr:

To set values for multiple multitext fields, provide a **comma-separated** string for this method, 
if other delimiter is not set by a api/ui.multitext_separator_config.md property. 

The values are set one after another: 

- If there are **fewer** values than multitext fields, the unused fields as well as their values
are **removed**;
- If there are **more** values than available multitext fields, the additional fields are
**added**. 

To set value only for the **first (basic) field**, use the api/ui.multitext_setvaluehere.md 
method. It  resets only the basic field  while other fields together with 
their values are preserved. 