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

