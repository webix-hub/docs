yCount
=============


@short:
	defines height of view in items

@type:  number
@example:

//height of view will be enough to show 10 items
webix.ui({
	view:"list",
    yCount:10
})


@template:	api_config

@relatedapi:
	api/ui.list_xcount_config.md
@related:
	desktop/list.md
@relatedsample:
	05_list/13_yCount.html
@descr:

Possible values for the property are:

- desired **number**;
- 0 to disable yCount ( calculate the number of item on the base of component size).

{{sample 10_window/05_popup_menu.html}}


