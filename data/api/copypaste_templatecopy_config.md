templateCopy
=============


@short: sets the template according to which data will be copied to the clipboard
	

@type:function 
@example:
webix.ui({
	view:"list", 
	...
	clipboard: "custom",
	templateCopy: function(item) {
		return [item.title, item.year, item.votes, item.rating, item.rank].join(" , ")
	}
});

@template:	api_config
@relatedapi:
	api/copypaste_clipboard_config.md
@relatedsample:
	05_list/09_copypaste.html
    05_list/04_list_grouping.html
@related:
	desktop/clipboard.md
@descr:
As a parameter, the template function takes the data item object.
