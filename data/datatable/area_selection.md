Area Selection in DataTable
=============================

Webix DataTable features Excel-like area selection. You can click on any cell in the DataTable and move the mouse pointer over the grid, a block of cells will be selected and colored in grey.

<img src="datatable/block_selection.png">

When you release the mouse pointer, the selection will remain and marked with bold border with a handle.

<img src="datatable/area_selection.png">

To enable area selection in DataTable, you should specify the **areaselect** property with the *true* value in the datatable configuration.

~~~js
{
	view:"datatable",
	id: "table",
	columns:[
		{ id:"rank",	header:"", css:"rank",  width:50},
		{ id:"title",	header:"Film title", 	width:200},
		{ id:"year",	header:"Released", 		width:80},
		{ id:"votes",	header:"Votes", 		width:120},
		{ id:"rating",	header:"Rating", 		width:80},
	],
	areaselect:true,		/*!*/
	data:small_film_set
}
~~~

{{note Area selection will work only with other selection types disabled. So, the *select* and *selectcell* properties shouldn't be enabled.}}

You can apply custom area selection in the DataTable. 

<img src="datatable/custom_selection.png">

For this purpose, you need to use the api/ui.datatable_addselectarea.md method.
This method allows creating a custom select area. 

~~~js
$$("dtable").addSelectArea(start,end,preserve);
~~~

The parameters are:

- start	- (object) the id object of the left top cell, contains two parameters: the row id and the column id
- end - (object) the id object of the right cell, contains two parameters: the row id and the column id
- preserve - (boolean)	defines, if the previous select area should be saved, false by default
- area_name - (string)	optional, the name used to address to an area to change or to delete it
- css - (string) optional, the css style for the border of an area. By default, the border of area selection is black
- handle - (boolean) optional, defines, whether selection will be resized with or without a handle

The first three parameters are mandatory, all others are optional.




























@edition:pro