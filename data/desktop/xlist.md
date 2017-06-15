X-List
===============

##Overview

UI-related X-List inherits from [List](desktop/list.md) and differs from it in the way of data presenting: while all lists arrange items vertically, 
X-List offers the horizontal pattern.

<img src="desktop/xlist.png"/>

{{sample 05_list/08_xlist.html }}

##Initialization

~~~js
webix.ui({
	view:"list",
	scroll:"x",
	layout:"x", // responsible for horizontal arrangement
	select:true,
	data: ...
});
~~~

##Working with X-List

- [Data Loading](desktop/data_loading.md). 
- [Defining Data Template](desktop/template.md).
- [Adding/Deleting Items](desktop/add_delete.md).
- [Editing Data](desktop/edit.md).
- [Data Filtering and Sorting](desktop/filter_sort.md)
- [Selection](desktop/selection.md)
- [Paging](desktop/paging.md)
- [Adding Active Elements to List Items](desktop/active_content.md)

{{note
Note that there's no built-in possibility to edit data with list. You should create a prototype *editlist* object beforehand.
}}

##API Reference

[Methods, properties and events](api/refs/ui.list.md)

###Related Articles

- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [X-List CSS Image Map](desktop/xlist_css.md)
- [List](desktop/list.md)
- [UnitList](desktop/unitlist.md)
- [GroupList](desktop/grouplist.md)
- [Double List](desktop/double_list.md)

@seolinktop: [web ui framework](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)