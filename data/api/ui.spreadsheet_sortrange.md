sortRange
=============


@short:
	sorts a range of cells

@params:

- range		string		range (optional)
- dir		string		sorting direction: "asc" or "desc" (optional)



@example:

// sorts a selected range
$$("ssheet").sortRange();
// sorts a certain range
$$("ssheet").sortRange("B2:B4", "desc");

@template:	api_method
@descr:

