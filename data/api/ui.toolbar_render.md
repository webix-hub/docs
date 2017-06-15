render
=============



@short:
	renders the specified item or the whole component

@params:
- id		id		the item id
- data		object		the hash of data for the rendered item
- type		string		the type of the operation: <i>'update'</i>, <i>'add'</i>, <i>'delete'</i>, <i>'move'</i>


@example:
$$('view').render();

@relatedsample:
	06_dataview/19_paging/03_paging_custom.html
@related: 
	desktop/redefinition.md

@template:	api_method
@defined:	RenderStack	
@descr:
When no parameters are specified, the method renders the whole view.

Types of the operation:

- **update** - replaces the existing HTML with the new one
- **add** - place a new HTML at the required position
- **delete** - removes the related HTML
- **move** - simulates add-delete sequence







@seolinktop: [javascript ui library](https://webix.com)
@seolink: [toolbar js](https://webix.com/widget/toolbar/)