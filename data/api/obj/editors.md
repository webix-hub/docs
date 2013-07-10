
{{memo set of editing tools}}

Editors are used for components in editable state. They define an editing pattern, whether it is text input, two-value choice, date and color selection.

~~~js
webix.ui({
 	view:"datatable",
    ..config..
    editable:true,
    editor:"text"
})
~~~
Editor type depends on data you'd like to edit. 

For more details check [Data Editors](desktop/editing.md)