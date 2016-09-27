General Configuration Settings
===========================

The SpreadSheet component can be easily configured according to your needs. 
You can enable work with math operations, cells resizing, specify the exact number of rows and columns in the spreadsheet.

Resizing cells
-------------------

To enable resizing of cell, you need to set the api/ui.spreadsheet_resizecell_config.md property with the true value in the Spreadsheet configuration:

~~~js
webix.ui({
	view:"spreadsheet",
	data: base_data,
	resizeCell:true
});
~~~

{{sample 65_spreadsheet/01_basic/08_cell_resize.html}}


Enabling formula editor
------------------------------

You can add an inline editor of formulas in Spreadsheet. It allows creating a new formula and edit the existing one in a cell.

There's the *liveEditor* property in the Spreadsheet API that will let you to switch the editor on. You just need to set it to true in the config.

~~~js
webix.ui({
	view: "spreadsheet",
    data: base_data,
	liveEditor: true
});
~~~

You can find a more detailed description of the editor in the [corresponding section](spreadsheet/math.md#formulaeditor).

Setting the count of rows and columns
----------------------------------

If you need to specify a certain number of columns or rows in the SpreadSheet, make use of the api/ui.spreadsheet_columncount_config.md and api/ui.spreadsheet_rowcount_config.md properties.

~~~js
webix.ui({
	view:"spreadsheet",
	data: base_data,
    // setting the number of columns
	columnCount:10,
    // setting the number of rows
    rowCount:20
});
~~~

{{sample
65_spreadsheet/02_api/01_subbar_and_reset.html
}}

Adding subbar
-----------

To show some additional elements/views into Spreadsheet, you can use the api/ui.spreadsheet_subbar_config.md property. It allows adding views below the toolbar, but above the datatable.

Inside of the subbar property you can define a view, e.g. toolbar, apply some css to it and specify the elements that will be shown in the view.

~~~js
webix.ui({
	view:"spreadsheet",
	data: base_data,		
	subbar:{
		view:"toolbar", css:"webix_ssheet_toolbar", 
		elements:[
			{ view:'label', template:"Custom cell editor: ", width:190},
			{ view:'text', id:'text', width:250 },
			{}
		]
	},	
});
~~~

{{sample
65_spreadsheet/03_customization/02_subbar.html
}}


Making SpreadSheet readonly
--------------------

To activate the readonly mode, you need to set the **readonly** property to **true** in the SpreadSheet configuration:

~~~js
webix.ui({
	view:"spreadsheet",
    data: base_data,
	readonly:true
});
~~~

From now on, users won't be able to manipulate the cells. The Instruments panel and the subbar will be hidden.

{{sample
65_spreadsheet/01_basic/04_readonly.html
}}

Adding Menu
-----------

You can add a dropdown menu at the top of SpreadSheet. It allows saving space on the toolbar and leave just the most prominent buttons on it.

<img src="spreadsheet/menu.png">

To add a menu, make use of the **menu** property with the **true** value.

~~~js
webix.ui({
	view:"spreadsheet",
	data: math_data_simple,
	menu: true
});
~~~

{{sample 65_spreadsheet/01_basic/05_menu.html}}


@spellcheck:api
