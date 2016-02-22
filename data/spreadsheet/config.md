Configuring Spreadsheet
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

Math operations
----------------

Math functionality is also enabled in the configuration of the component. Just set the api/ui.spreadsheet_math_config.md property to true.

~~~js
webix.ui({
	view:"spreadsheet",
	data: base_data,
	math:true
});
~~~

To get more information about math in SpreadSheet, read the spreadsheet/math.md article.

Setting the count of rows and columns
----------------------------------

If you need to specify a certain number of columns or rows in the SpreadSheet, make use of the api/ui.spreadsheet_columncount_config.md and api/ui.spreadsheet_rowcount_config.md properties.

~~~js
// setting the number of columns
$$("ss").config.columnCount = 10;
// setting the number of rows
$$("ss").config.rowCount = 20;
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
65_spreadsheet/03_customization/02_cell_input.html
}}


Making SpreadSheet readonly
--------------------

To activate the readonly mode, you need to set the **readonly** property to **true** in the SpreadSheet configuration:

~~~js
webix.ready(function(){
	webix.ui({
		view:"spreadsheet",
        data: base_data,
		readonly:true
	});
});
~~~

From now on, users won't be able to manipulate the cells. The Instruments panel and the subbar will be hidden.

{{sample
65_spreadsheet/01_basic/04_readonly.html
}}



