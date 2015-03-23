escape
=============


@short: enables/activates the escape mode (activated by default)
	

@type: boolean

@example:

webix.csv.escape = false;

@template:	api_config
@defined:	csv	
@descr:

The CSV parser can work in two modes:

- **Simplified**; 
- **Escape** (full escape processing)

The difference between modes is that the **escape** mode treats escaped data, special chars and the **simplified** mode doesn't.

Therefore:

- The **simplified** mode is much faster than the **escape** one but can break the parser.
- If your data might have some escaped or quoted text  - use the **escape** mode.
- If you sure that data doesn't contain any special chars - use the **simplified** mode which will improve performance of CSV parsing/serialization.




