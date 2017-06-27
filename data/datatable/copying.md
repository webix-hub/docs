Copy-Pasting DataTable Data
==========================

To enable the possibility to copy/paste DataTable data by the CTRL+C/CTRL+V keyboard shortcuts you should 
use parameter api/link/ui.datatable_clipboard_config.md.

The parameter can have the following values:

1. *"block"* ( or *true*. It's the default value);
2. *"selection"*;
3. *"repeat"*;
4. *"custom"*

Each of the types has its specificity and define its behavior of copying.

{{snippet
Setting the desired behavior of copying
}}

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	clipboard:"selection",
});
~~~
{{sample 15_datatable/06_clipboard/05_two_grids.html }}

"Block" copying
-----------------------
It's the default type and can be also specified by setting the **true** value.

It's can be characterized as follows:

- When the copy area is less than the one selected, copied cells are not repeated and fill only the related selected cells.
- When the copy area is greater than the one selected, copied cells fill not only the selected area but also the related cells nearby.

{{sample 15_datatable/06_clipboard/06_block_selection.html }}

"Selection" copying
-------------------

- When the copy area is less than the one selected, copied cells are not repeated and fill only the related selected cells.
- When the copy area is greater than the one selected, copied cells fill only the selected area and don't 'touch' the cells nearby.

{{sample 15_datatable/06_clipboard/04_paste_selection.html }}


"Repeat" copying
-----------------------

- When the copy area is less than the one selected, copied cells are repeated a specific number of times to fill the selected cells.
- When the copy area is greater than the one selected, copied cells fill only the selected area and don't 'touch' the cells nearby.

{{sample 15_datatable/06_clipboard/07_paste_repeat.html }}

"Custom" copying
-----------------

The *"custom"* value allows you to specify a custom logic for the paste operation. 

To apply a custom "paste" behavior to the datatable, you need to:

- set the [clipboard](api/link/ui.datatable_clipboard_config.md) parameter to *"custom"*.

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	clipboard:"custom"
});
~~~

*This command will cancel the predefined behavior for the paste operation.*

- Specify custom logic in the api/link/ui.datatable_onpaste_event.md event handler.

~~~js
//the code does nothing but alerts messages
grid.attachEvent("onPaste", function(text) {
    webix.message("Custom paste behavior: " + text);
});
~~~

*DataTable invokes the api/link/ui.datatable_onpaste_event.md event when the user presses CTRL+V keys combination.*


{{sample 15_datatable/06_clipboard/09_paste_custom.html}}


@keyword: 
	copy,paste,ctrl, clipboard
    