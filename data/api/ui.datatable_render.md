render
=============


@short: renders the specified item or the whole component
@params:
- id		id		the item id
- data		object		the hash of data for the rendered item
- operation 	string		the type of the operation: <i>'update'</i>, <i>'add'</i>, <i>'delete'</i>, <i>'move'</i>ype

@example:
dtable.render();


@template:	api_method
@defined:	RenderStack	
@related:
	desktop/redefinition.md
@relatedapi:
	api/link/ui.datatable_refresh.md
@relatedsample:
	06_dataview/19_paging/03_paging_custom.html
@descr:

When no parameters are specified, the method renders the whole view.

Types of the operation:

- **update** - replaces the existing HTML with the new one
- **add** - place a new HTML at the required position
- **delete** - removes the related HTML
- **move** - simulates add-delete sequence



