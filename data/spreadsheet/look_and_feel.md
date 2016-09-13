Tuning Look and Feel of Spreadsheet
==================================

Conditional Cells Formatting
-------------------------------

You can specify various style conditions for cell formatting, depending on data set in a cell.

The button calling a popup for setting conditional styles is called "conditional-format".
It is specified in the "Styles" block of the *buttons* configuration object:

~~~js
buttons:{
	"undo": ["undo", "redo"],
	"text": ["font-weight", "font-style", "text-decoration", "color"],
	"cell": ["background", "borders", "span"],
	"format": ["format"],
	"Styles": ["conditional-format"]
}
~~~
