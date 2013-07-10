moveSelection
=============



@short: moves selection in the specified direction 
	

@params:
- direction	string	the move direction

	

@example:
dtable.moveSelection('right');


@template:	api_method
@descr:
The method can take only one of a predefined set of values.<br>
The predefined values are:

- **'up'**	( *cell* and *row* selection modes)
- **'down'** (*cell* and *row* selection modes)
- **'right'** (*cell* and *column* selection
modes)
- **'left'**  (*cell* and *column* selection modes)

@relatedapi:
	api/ui.datatable_getselectedid.md
    api/ui.datatable_getselection.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md
@related:
	datatable/selection.md