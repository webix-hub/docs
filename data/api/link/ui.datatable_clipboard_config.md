@link: api/tablepaste_clipboard_config.md

@short: enables/disables clipboard support
@type: boolean,string

@values:
- block (true)
- selection
- repeat
- false
- custom

@example:
webix.ui({
	view:"datatable",
	clipboard:true,
	...
});

@template:	api_config

@relatedsample:
	15_datatable/06_clipboard/01_cell_selection.html
	15_datatable/06_clipboard/05_two_grids.html
    15_datatable/06_clipboard/09_paste_custom.html

@related:
	datatable/copying.md

@descr:
If clipboard is defined as *"custom"*, you need to specify [onPaste](api/copypaste_onpaste_event.md) behavior attached to the same-name event. 
