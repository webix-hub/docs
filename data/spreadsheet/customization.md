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
- DataTable


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
spreadsheet.$$("bar");
~~~

Customizing toolbar's buttons
---------------------------

The settings for toolbar are specified in the api/ui.spreadsheet_buttons_config.md configuration object. It contains the names of button blocks as parameters.
The parameters' values are arrays of buttons that are included into this or that block.

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

###Removing a block or a button

In case you want to remove some block or button specified in the default configuration, you need just not to define them in the buttons object.

###Adding a custom block or a button

To add your own block of buttons into the toolbar, you should specify its name as a property in the "buttons" configuration. The value of this property is an array of buttons. 

To add a custom button, you should specify its name in the array of buttons of the corresponding block.

If you don't want to show the block's name, add the "$" sign before the block's name.

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

