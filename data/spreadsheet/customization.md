Customizing SpreadSheet
========================

SpreadSheet consists of two main parts: a toolbar with instruments panel and a stylized datatable.

The full structure of SpreadSheet can be presented as:

- Toolbar:
	- <a href="spreadsheet/customization.md#undo">Undo/Redo block</a>
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
	- <a href="spreadsheet/customization.md#format">Format block</a>:  
    	- Format select
- DataTable


Toolbar
---------

The toolbar contains a panel with instruments for editing and formatting the content of table's cells.

<img src="spreadsheet/default_toolbar.png">

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

In this section we will consider the blocks of buttons and their purpose in detail.

<h3 id="undo">Undo/Redo block</h3>

<img src="spreadsheet/undo_redo.png">

It includes two buttons:

- the *Undo* button discards the recent change and reverts Spreadsheet into the previous state
- the *Redo* button restores the applied change one more time

<h3 id="font">Font block</h3> 

<img src="spreadsheet/font.png">

This block contains a large group of buttons intended for handling font and cell borders' settings:

- the *Font family* select allows choosing the necessary font for the cell's text
- the *Font size* select sets the font size of the cell's text 
- the *Font type* group of buttons helps to define the weight, style and decoration of the font:
	- Bold
    - Italic
    - Underline
- the *Font color* select sets the font color 
- the *Background color* select sets the cell color
- the *Borders* select lets apply a new or different style for cell borders    

<h3 id="align">Align block</h3>

<img src="spreadsheet/align.png">

Besides managing Horizontal and Vertical cell alignment, this block also includes means of text wrapping and merging cells' content:

- the *Horizontal align* select allows specifying one of three modes of text alignment in a cell: left, right or center 
- the *Vertical align* select defines the mode of vertical text alignment in a cell: top, middle or bottom
- the *Text Wrap* button lets wrap text in a cell
- the *Merge* button allows merging the content of several cells and unmerging it as well

<h3 id="format">Format block</h3> 

<img src="spreadsheet/format.png">

The only button of this block is the *Format* select, which sets the format of cell content. The available formats are:

- Common
- Currency
- Number
- Percent

Customizing toolbar's buttons
---------------------------

The settings for toolbar are specified in the api/ui.spreadsheet_buttons_config.md configuration object. It contains the names of button blocks as parameters.
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

