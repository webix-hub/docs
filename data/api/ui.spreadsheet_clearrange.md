clearRange
=============

@short:
	clears either selected or specified range of cells

@params:
- rangeStr		string		optional, the range of cells 
- type			object 		optional, defines clearing options (see details)


@example:
$$("ssheet").clearRange("B2:D2", {values:true, styles:true});

@template:	api_method
@descr:
If the *rangeStr* parameter isn't set, the method will clear the selected range, if there is any.

The *type* object can have two attributes: 

- *values* - (boolean) true by default, to clear cell values
- *styles* - (boolean) true by default, to clear cell styles

@seolinktop: [ui widget library](https://webix.com)
@seolink: [spreadsheet javascript library](https://webix.com/spreadsheet/)