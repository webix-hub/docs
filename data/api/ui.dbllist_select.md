select
=============


@short:
	selects the specified items (moves them to the right list) or unselects them 

@params:

- id			string|array		the id (ids) of the items to select 
- mode			boolean				true - to select items, false - to unselect them


@example:
// selects items with ids 3,4 
$$("dbl1").select([3,4],true);
// unselects items with ids 3,4 
$$("dbl1").select([3,4],false);

@template:	api_method
@descr:


@related:
desktop/double_list.md

@relatedsample:
13_form/01_controls/25_dbllist.html