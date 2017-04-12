DoubleList
==========

##API Reference

- [Methods, parameters and events](api/refs/ui.dbllist.md)
- [Samples](http://docs.webix.com/samples/05_list/18_dbllist.html)


##Overview

DoubleList widget is based on [Layout](desktop/layout.md) and includes features peculiar to the desktop/list.md widget and the desktop/select.md control. 
It presents data items in two lists and allows selecting items in one of the lists and
drag-n-drop them to the other one using the corresponding buttons between the lists.

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/doublelist.png"/>


##Initialization

~~~js
webix.ui({
 	view:"dbllist", 
    value:"1,2",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
});
~~~

{{sample 05_list/18_dbllist.html}}