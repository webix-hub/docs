SpreadSheet General How-Tos
============================

How to make SpreadSheet readonly?
----------------------

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

From now on, users won't be able to manipulate the cells. The Instruments panel will be hidden.
