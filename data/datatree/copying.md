Copy-Pasting Tree Data
==========================
To enable the possibility to copy/paste Tree data by the CTRL+C/CTRL+V keyboard shortcuts you should use parameter [clipboard](api/link/ui.tree_clipboard_config.md).

The parameter can have one of 3 values:

1. ['modify'](#modifycopying) ( or true. It's the default value);
2. ['insert'](#insertcopying);
3. ['custom'](#customcopying).

Each of the types has its specificity and define its behavior of copying.

{{snippet
Setting the desired behavior of copying
}}

~~~js
tree = new webix.ui({
	view:"tree",
	...
	clipboard:"insert"
});
~~~
{{editor http://webix.com/snippet/c1125a1e	Pasting New Items}}

'Modify' copying
-----------------------
It's the default type and can be also specified by setting the *true* value.

The type of copying can be characterized as in:

- When you copy the selected node in the tree, you copy  the node title (doen't matter it's a parent or child node);
- When you paste a text to the tree, it will be pasted as the title of the selected node.

{{snippet
Setting the 'modify' behavior of copying 
}}

~~~js
tree = new webix.ui({
	view:"tree",
	...
	clipboard:true
});
~~~

{{editor http://webix.com/snippet/a0492d1c	Pasting Items' Titles}}

'Insert' copying
-------------------

- When you copy the selected node in the tree, you copy the node's title (doesn't matter whether it's a parent or a child node);
- When you paste a text to the tree, it will be added as a child item of the selected node.

{{snippet
Setting the 'insert' behavior of copying
}}

~~~js
tree = new webix.ui({
	view:"tree",
	...
	clipboard:"insert"
});
~~~

{{editor http://webix.com/snippet/c1125a1e	Pasting New Items}}


Custom copying
-----------------------
The *'custom'* value allows you to specify a custom logic for the paste operation. 

To apply a custom 'paste' behaviour to the tree:

- Set the [clipboard](api/link/ui.tree_clipboard_config.md) parameter to *"custom"*.
~~~js
tree = new webix.ui({
	view:"tree",
	...
	clipboard:"custom"
});
~~~
*This command will cancel the predefined behaviour for the paste operation.*

- Specify custom logic in the api/link/ui.tree_onpaste_event.md event handler.
~~~js
//the code does nothing but alerts messages
tree.attachEvent("onPaste", function(text) {
	webix.message("Node is pasted: " + text);
});

~~~
*Tree invokes the api/link/ui.tree_onpaste_event.md event when the user presses CTRL+V keys combination.*

{{editor http://webix.com/snippet/4c655c8e	Custom Clipboard Operations}}


@keyword: 
	copy,paste,ctrl, clipboard
    