moveSelection
=============


@short: moves cell selection in the specified direction 
	

@params:
- direction	string	the move direction


@example:
  $$("colorboard").moveSelection("top");


@relatedapi: api/ui.colorboard_setvalue.md

@template:	api_method
@descr:
The method can take only one of a predefined set of values.<br>
The predefined values are:

- "up/down"  - selects the above/below cell;
- "left/right" - selects the cell to the left/right;
- "top" - selects the first cell;
- "bottom" - selects the last cell.

If no cell is selected at the moment, the first visible cell gets selection.
