dbllist
=============

@short:
	the default labels of the DoubleList widget

@type:object

@example:
webix.i18n.dbllist:{
	selectAll: "<span class='webix_icon fa-angle-double-right'></span>",
	selectOne: "<span class='webix_icon fa-angle-right'></span>",
	deselectAll: "<span class='webix_icon fa-angle-double-left'></span>",
	deselectOne: "<span class='webix_icon fa-angle-left'></span>",
};
webix.i18n.setLocale();

@template:	api_config
@descr:
- **selectAll** - the label of the button that selects all items
- **selectOne** - the label of the button that selects one item
- **deselectAll** - the label of the button that deselects all selected items
- **deselectOne** - the label of the button that deselects one of the selected item

{{note
You need to call the api/i18n_setlocale.md method to apply the new format settings
}}

@related:
	desktop/localization.md
    desktop/double_list.md

@relatedapi:
	api/i18n_setlocale.md



@seolinktop: [js frameworks](https://webix.com)
@seolink: [object list javascript](https://webix.com/widget/list/)