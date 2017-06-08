onPaste
=============

@short:
 fires when the <a href="api/tablepaste_clipboard_config.md">clipboard</a> is enabled and the user presses CTRL+V keys combination
	

@params:
- text		string		the text to paste

@example: 
grid.attachEvent("onPaste", function(text) {
    webix.message("Custom paste behavior: " + text);
});

@template:	api_event
@descr:

@relatedsample:
    15_datatable/06_clipboard/09_paste_custom.html
@related:
	desktop/clipboard.md
    datatable/copying.md#customcopying
