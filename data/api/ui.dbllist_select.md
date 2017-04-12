select
=============


@todo:
	check 

@short:
	moves the specified items to the list of selected items or returns them back 

@params:

- id			string|array		the id(ids) of the items to move 
- mode			boolean				true - to move items to the right list, false - to return items to the left list


@example:
// moves items with ids 3,4 to the right list
$$("dbl1").select([3,4],true);
// moves items with ids 3,4 back to the left list
$$("dbl1").select([3,4],true);

@template:	api_method
@descr:


@related:
desktop/double_list.md

@relatedsample:
05_list/18_dbllist.html