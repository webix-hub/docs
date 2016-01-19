Copy-Pasting DataTable Data
==========================
To enable the possibility to copy/paste DataTable data by the CTRL+C/CTRL+V keyboard shortcuts you should 
use parameter api/link/ui.datatable_clipboard_config.md.

The parameter can have one of 3 values:

1. *'block'* ( or *true*. It's the default value);
2. *'selection'*;
3. *'repeat'*.

Each of the types has its specificity and define its behavior of copying.

{{snippet
Setting the desired behavior of copying
}}

~~~js
webix.ui({
	view:"datatable",
	...
	clipboard:"selection",
});
~~~
{{editor http://webix.com/snippet/ba30834b	Copying between Grids }}

'Block' copying
-----------------------
It's the default type and can be also specified by setting the **true** value.

It's can be characterized as follows:

- When the copy area is less than the one selected, copied cells are not repeated and fill only the related selected cells.
- When the copy area is greater than the one selected, copied cells fill not only the selected area but also the related cells nearby.

{{editor http://webix.com/snippet/079ae54b	"Block" Copying }}

'Selection' copying
-------------------

- When the copy area is less than the one selected, copied cells are not repeated and fill only the related selected cells.
- When the copy area is greater than the one selected, copied cells fill only the selected area and don't 'touch' the cells nearby.

{{editor http://webix.com/snippet/5d26bfb9	"Selection" Copying }}


'Repeat' copying
-----------------------

- When the copy area is less than the one selected, copied cells are repeated a specific number of times to fill the selected cells.
- When the copy area is greater than the one selected, copied cells fill only the selected area and don't 'touch' the cells nearby.

{{editor http://webix.com/snippet/b1da8abd	"Repeat" Copying }}


@keyword: 
	copy,paste,ctrl, clipboard
    