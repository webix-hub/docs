Default Toolbar and its Customization
========================

SpreadSheet consists of two main parts: a toolbar with instruments panel and a [stylized datatable](spreadsheet/customization.md#customizingdatatable).

The full structure of SpreadSheet can be presented as:

- Toolbar:
	- <a href="spreadsheet/customization.md#file">File block</a>
    	- Sheets select
        - Import from Excel
        - Export to Excel
	- <a href="spreadsheet/customization.md#undo">Undo/Redo block</a>
    	- Undo button
        - Redo button
	- <a href="spreadsheet/customization.md#font">Font block</a>: 
    	- Font family select
        - Font size select
    	- Font type buttons
        - Font color select 
    	- Background color select
        - Borders select  
	- <a href="spreadsheet/customization.md#align">Align block</a>: 
    	- Horizontal Align button
        - Vertical Align button
        - Text Wrap button
        - Merge button
	- <a href="spreadsheet/customization.md#number">Number block</a>:  
    	- Number format select
        - Custom format button
    - <a href="spreadsheet/customization.md#edit">Edit block</a>:  
    	- Sort A to Z button
        - Sort Z to A button
        - Creat filter button
        - Named range button
        - Condtitional format button
        - Lock/unlock cell button
        - Add link button
        - Create dropdown button
        - Clear styles button
    - <a href="spreadsheet/customization.md#insert">Insert block</a>:  
    	- Image  button
        - Graph  button
    - <a href="spreadsheet/customization.md#view">View block</a>: 
    	- Row button
        - Column button
        - Hide/show gridlines button
        - Hide/show headers button
        - Freeze/unfreeze rows button
        - Freeze/unfreeze columns button
- DataTable


Toolbar
---------

The toolbar contains a panel with instruments for editing and formatting the content of table's cells.

There are two modes of toolbar displaying: the "default" short one and the "full" one. 
In the default mode, toolbar is shown with a limited set of buttons. 

<img src="spreadsheet/short_toolbar.png">

To show all available buttons on the toolbar, you should specify the "full" mode, using the *toolbar* property:

~~~js
webix.ui({
	view:"spreadsheet",
    data: base_data,
    toolbar: "full"
});
~~~

{{sample 65_spreadsheet/01_basic/02_all_buttons.html}}


To refer to the toolbar object, firstly you need to specify the toolbar's id in the toolbar configuration.

~~~js
var bar = {
	view: "toolbar",
	css: "webix_ssheet_toolbar webix_layout_toolbar",
	id: "bar",
	elements: [{...}]
}
~~~

Then you can address to the toolbar via the corresponding id.

~~~js
spreadsheet.$$("bar");
~~~

Toolbar buttons
---------------

In this section we will consider the blocks of buttons, their names that you can use to refer to them and their purpose in detail.

<h3 id="file">File block</h3>

<img src="spreadsheet/file.png">

It includes the "sheet" select that allows working with sheet and contains three options:

- "new-sheet" - for creating a new sheet
- "copy-sheet" - for copying the sheet's content into a new sheet
- "remove-sheet" - for removing a sheet

and two buttons:

- "excel-import" button allows importing data from Excel
- "excel-export" button lets export data into Excel

<h3 id="undo">Undo/Redo block</h3>

<img src="spreadsheet/undo_redo.png">

It includes two buttons:

- the "undo" button discards the recent change and reverts Spreadsheet into the previous state
- the "redo" button restores the applied change one more time

<h3 id="font">Font block</h3> 

<img src="spreadsheet/font.png">

This block contains a large group of buttons intended for handling font and cell borders' settings:

- the "font-family" select allows choosing the necessary font for the cell's text
- the "font-size" select sets the font size of the cell's text 
- the Font group of buttons helps to define the weight, style and decoration of the font:
	- "font-weight" button
	- "font-style" button
	- "text-decoration" button
- the "color" select sets the font color 
- the "background" select sets the cell color
- the "borders" select lets apply a new or different style for cell borders    

<h3 id="align">Align block</h3>

<img src="spreadsheet/align.png">

Besides managing Horizontal and Vertical cell alignment, this block also includes means of text wrapping and merging cells' content:

- the "text-align" select allows specifying one of three modes of text alignment in a cell: left, right or center 
- the "vertical-align" select defines the mode of vertical text alignment in a cell: top, middle or bottom
- the "wrap" button lets wrap text in a cell
- the "span" button allows merging the content of several cells and unmerging it as well

<h3 id="number">Number block</h3> 

<img src="spreadsheet/format.png">

This block contains the *format* select, which sets the format of cell content. The available formats are:

- Common
- Currency
- Number
- Percent

One more element of the block is the "custom-format" button which allows setting a custom format for a number in a cell.

<h3 id="edit">Edit block</h3>

The block includes a set of buttons for editing the cell's content:

- "sort-asc" and "sort-desc" buttons are used for sorting in ascending and descending directions
- "create-filter" button sets a filter in a cell
- "add-range" button sets a named range of cells for using it further in math formulas
- "conditional-format" button allows specifiying a particular style for a cell, depending on a certain condition
- "lock-cell" button blocks/allows editing of the cell's value
- "add-link" button sets a link in a cell
- "add-dropdown" button creates an editor with options in a cell
- "clear-styles" button removes all the styles formatting in SpreadSheet

<h3 id="insert">Insert block</h3>

- "add-image" button adds an image into a cell
- "add-sparkline" button inserts a sparkline in a cell

<h3 id="view">View block</h3>

- "row" button allows manipulating rows:insert/delete/hide/show them
- "column" button lets manipulating columns:insert/delete/hide/show them
- "hide-gridlines" button hides/shows gridlines of the Spreadsheet
- "hide-headers" button hides/shows headers of rows and columns
- "freeze-rows" button freezes/unfreezes rows
- "freeze-columns" button freezes/unfreezes columns

Customizing toolbar's buttons
---------------------------

Settings for the default toolbar are specified in the api/ui.spreadsheet_buttons_config.md configuration object. It contains the names of button blocks as parameters.
The parameters' values are arrays of buttons that are included into this or that block.

~~~js
buttons: {
	"undo": ["undo","redo"],
	"font": ["font-family","font-size","font-weight","font-style",
	"text-decoration","color","background","borders"],
	"align": ["text-align","vertical-align","wrap","span"],
	"format": ["format"]
}
~~~

The button blocks' names correspond to the properties defined in the localization files that specify the language of its lables.
The default toolbar specified through the api/ui.spreadsheet_buttons_config.md configuration object has just one level.

If you want to create a two-level toolbar with more buttons or to customize the "full" toolbar with the full set of buttons, 
you should follow the instructions described in the [Customizing the "toolbar" collection](spreadsheet/ui_guide.md#customizingthetoolbarcollection) section of the spreadsheet/ui_guide.md chapter.

###Removing a block or a button

In case you want to remove some block or button specified in the default configuration, you need just not to define them in the buttons object.

###Adding a custom block or a button

To add your own block of buttons into the toolbar, you should specify its name as a property in the "buttons" configuration. The value of this property is an array of buttons. 

To add a custom button, you should specify its name in the array of buttons of the corresponding block.

If you don't want to show the block's name, add the "$" sign before the block's name.

<img src="spreadsheet/custom_buttons.png">

~~~js
 buttons: {
 	"$title": [{
 		view: "label", width: 150, label: "My SpreadSheet"
 	}],
 	"undo": ["undo","redo"],
 	"text": ["font-weight","font-style","text-decoration","color"],
 	"My Block": [{
 		view: "button", name: "my-button", width: 100, label: "My Button",
 		tooltip: "Click this button", click: function(){webix.message("Click")}
 	}]
 }
~~~

{{sample  
65_spreadsheet/03_customization/01_buttons.html
}}

Customizing Datatable
-----------------------

The datatable part of SpreadSheet features the same functionality that the Datatable widget does. 
So, you can customize the datatable in SpreadSheet in various ways. 

You can refer to the datatable object as follows:

~~~js
spreadsheet.$$("cells");
~~~

For example, you can attach a context menu with some actions for datatable cells and call the handler function on the right click.

~~~js
webix.ready(function(){
	webix.ui({
		view:"spreadsheet", 
        id:"ss",				
		math:true,		
		data:base_data
	});			

	webix.ui({
		view:"contextmenu",
		data:["Cut", "Copy", "Paste", "Delete"],
		click:function(id, event){
			var cell = this.getContext().id;
			webix.message(id+" on row "+cell.row+" of the column "+cell.column);							
	}).attachTo( $$("ss").$$("cells"));			
});
~~~

{{sample
65_spreadsheet/03_customization/05_context.html
}}

