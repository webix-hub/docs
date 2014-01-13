moveSelection
=============

@short: moves selection in the specified direction 
	

@params:
- direction	string	the move direction

	

@example:
  $$("list").moveSelection("top");


@template:	api_method
@descr:
The method can take only one of a predefined set of values.<br>
The predefined values are:

- **'top'**	 - the selection is moved to the first item of the dataview
- **'bottom'**  - the selection is moved to the last item of the dataview
- **'up'** (**'left'**)	 - the selection is moved one item left
- **'down'** (**'right'**) - the selection is moved one item right
- **'pgup'**  - the selection is moved to the first item of the previous page ( a page is the currently visible dataview)
- **'pgdown'**  - the selection is moved to the first item of the next page(a page is the currently visible dataview)

@relatedapi:
	api/link/ui.dataview_getselectedid.md
    api/link/ui.dataview_select.md
    api/link/ui.dataview_unselect.md
@related:
	desktop/selection.md