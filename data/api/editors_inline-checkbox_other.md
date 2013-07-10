inline-checkbox
=============


@short: a customizable checkbox editor
	

@type: string 

@example:
{ id:"ch1", header:"", template:custom_checkbox, width:40, editor:"inline-checkbox"},

@template:	api_config

@relatedsample:
	98_docs/editors.html
@related:
	desktop/editing.md
@descr:

If you want to display a checkbox icon within the item you'd like to edit, you should inlcude **{common.checkbox()}** into the data item. 

At the same time, there can be eny template for data edited with the help of a checkbox editor. Checkboxes will appear only on the editing stage for you to check/uncheck it: 

~~~js
function custom_checkbox(obj, common, value){
			if (value)
				return "<div class='webix_table_checkbox checked'> YES </div>";
			else
				return "<div class='webix_table_checkbox notchecked'> NO </div>";
		}
~~~


