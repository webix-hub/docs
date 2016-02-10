The Structure of SpreadSheet
===============================

SpreadSheet consists of two main parts: a toolbar with instruments panel and a stylized datatable.

The full structure of SpreadSheet can be presented:

- Toolbar:
 - Undo/Redo buttons
 - Font section: Font family and Font size selectors
 - Text section: Font weight buttons and Font color selector (colorboard)
 - Cell section: Background color selector, Borders selector with colorboard and Merge button
 - Align section: Horizontal and vertical align buttons and Word wrap button
 - Format section with the selector of the cell's content format 
- DataTable:
 - Columns
 - Rows
 - Cells

Toolbar
---------

The toolbar contains a panel with instruments for editing and formatting of the content of table's cells.

<img src="spreadsheet/instruments_panel.png">

~~~js
var bar = {
	view: "toolbar",
	css: "webix_ssheet_toolbar webix_layout_toolbar",
	id: "bar",
	elements: [{...}]
}
~~~

###Undo/Redo Buttons

<img src="spreadsheet/undo_redo.png">

The Undo and Redo buttons are based on Webix Button Control. They are used to undo and redo changes in the cells' content.

~~~js
// the Undo button
{ name: "undo", icon: "undo", tooltip: "Undo" }

// the Redo button
{ name: "redo", icon: "undo", tooltip: "Redo" }
~~~

###Separator

The separator is used to separate the sections of the instruments' panel:

~~~js
ui.separator();
~~~

###Font attributes selectors 

<img src="spreadsheet/font.png">

The selectors of font family and font size are based on the Select Control. They allow choosing the necessary font settings.

~~~js
// the font-family select
{name: "font-family", tooltip: "Font family", options: fontFamily, width: 100}

// the font-size select
{name: "font-size", tooltip: "Font size", options: getFontSize(), width: 62}
~~~

###Text formatting controls group

<img src="spreadsheet/text.png">

~~~js
{ name: "font-weight", label: "B", css: "webix_ssheet_bold",
	tooltip: "Bold", onValue: "bold", offValue: "normal" }
{ name: "font-style", label: "I", css: "webix_ssheet_italic", 
	tooltip: "Italic", onValue: "italic", offValue: "normal" }
{ name: "text-decoration", label: "U", css: "webix_ssheet_underline", 
	tooltip: "Underline", onValue: "underline", offValue: "normal"}
~~~

###Cell editing controls group

<img src="spreadsheet/cell.png">

###Text align controls group

<img src="spreadsheet/align.png">

###Format selector

<img src="spreadsheet/format.png">
