Customizing SpreadSheet
========================

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

The toolbar contains a panel with instruments for editing and formatting the content of table's cells.

<img src="spreadsheet/instruments_panel.png">

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
$$("ss").$$("bar");
~~~

Customizing toolbar's buttons
---------------------------

The default styles for the toolbar's buttons look as follows:

~~~js
{
	"color": "#000",
	"background": "#fff",
	"font-family": "'PT Sans', Tahoma",
	"font-size": "15px",
    "text-align": "left",
    "vertical-align": "top",
    "white-space": "nowrap",
    "borders": ["no","#444"]
}
~~~

The settings for toolbar are specified in the *buttons* configuration object. It contains the names of button blocks as parameters.
The parameters' values are arrays of buttons that are icluded into this or that block.

~~~js
buttons:{
	"undo": ["undo", "redo"],
	"font": ["font-family", "font-size"],
	"text": ["font-weight", "font-style", "text-decoration", "color"],
	"cell": ["background", "borders", "span"],
	"align": ["text-align", "vertical-align", "wrap"],
	"format": ["format"]
}
~~~

The button blocks' names correspond to the properties defined in the localization files that specify the language of its lables.

###Adding a custom block

If you want to add your own block into the toolbar of spreadsheet, you should specify its name as a property of the buttons object and define the config of any view as its content.
To show the content of a block without its name, use the name of the block preceeded with the $ sign.

~~~js
 buttons: {
 	"$title": [{
 		view: "label", width: 150, label: "My SpreadSheet"
 	}],
 	"undo": ["undo","redo"],
 	"font": ["font-family","font-size"],
 	"text": ["font-weight","font-style","text-decoration","color"],
 	"cell": ["background","borders","span"],
 	"align": ["text-align","vertical-align","wrap"],
 	"My Block": [{
 		view: "button", name: "my-button", width: 100, label: "My Button",
 		tooltip: "Click this button", click: function(){webix.message("Click")}
 	}]
 }
~~~

Customizing Datatable
-----------------------

The datatable part of SpreadSheet features the same functionality that the Datatable widget does. 
So, you can customize the datatable in SpreadSheet in various ways. 

You can refer to the datatble object in the following way:

~~~js
$$("ss").$$("cells");
~~~

For example, you can attach a context menu with some actions for datatable cells and call the handler function on the right click.

~~~js
webix.ready(function(){
	webix.ui({
		view:"spreadsheet", id:"ss",				
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


