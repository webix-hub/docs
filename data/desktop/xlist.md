X-list
===============

###Overview

UI-related x-list inherits from [list](desktop/list.md) and differs from it in the way of data presenting: while all lists arrange items vertically, 
x-list offers the horizontal pattern.

<img src="desktop/xlist.png"/>

{{sample 05_list/08_xlist.html }}

###Initialization

~~~js
webix.ui({
	view:"list",
	scroll:"x",
	layout:"x", // responsible for horizontal arrangement
	select:true,
	data: ...
});
~~~

###Working with X-list

- [Data Loading](desktop/data_loading.md). 
- [Defining Data Template](desktop/template.md).
- [Adding/Deleting Items](desktop/add_delete.md).
- [Editing Data](desktop/edit.md).
- [Data Filtering and Sorting](desktop/filter_sort.md)
- [Selection](desktop/selection.md)
- [Paging](desktop/paging.md)

{{note
Note that there's no built-in possibility to edit data with list. You should create a [prototype editlist object](desktop/edit.md) beforehand.
}}

###API Reference

[Methods, properties and events](api/refs/ui.list.md)

###Related Articles

- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [List](desktop/list.md)
- [Unitlist](desktop/unitlist.md)
- [Grouplist](desktop/grouplist.md)
- [XList CSS Image Map](desktop/xlist_css.md)