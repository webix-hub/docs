UnitList
==============

##API Reference 

- [Methods, properties and events](api/refs/ui.unitlist.md)
- [Samples](http://docs.webix.com/samples/05_list/index.html)

##Overview

UnitList presents data in groups derived from initial non-hierarchical dataset. Data items are sorted and then united by common values. 

<img style="display:block; margin-left:auto;margin-right:auto;"   src="desktop/unitlist.png"/>

##Initialization

{{snippet
List items are grouped by title
}}
~~~js
webix.ui({
	view:"unitlist", 
    uniteBy:function(obj){
        return obj.title.substr(0,1); 
    },
    type:{//setting item properties, optional
    	height:50,
        headerHeight:30,
    },
    template:"#title#</br>#year#<br/>#votes#",
    data: set
});
~~~


{{sample 05_list/11_unitlist.html }}

- The **uniteBy** property groups data according to the specified criterion, the unit value (here it's the first letter to the data item title);
- In addition it sets **unit headers** (unit values) and, additionally, sets [template](desktop/html_templates.md) for them.

{{snippet
Unit header template
}}
~~~js
view:"unitlist",
uniteBy:function(obj){
    return "<span style='background-color:"+obj.color+";'>"+
    	obj.title.substr(0,1)+"</span>"; 
}
~~~

##Working with UnitList

**Working with Unit Values**

UnitList API makes it possible to get text values of unit headers (unit values) as well as get data items that comply with this or that unit criterion. 

- **getUnits()** - returns JS array of unit values defined by the **uniteBy** property. The values are arranged in the alphabetical order, numbers first;
- **getUnitList(id)** - returns the ID (or, more often, IDs) of data records united by "unit" criterion. 

~~~js
var units = $$('list').getUnits(); // -> // -> [1, C, M, T]

var unit = $$('unit').getInputNode().value; //getting value of the combo box text field
var id = $$("list").getUnitList(unit); 
~~~

{{sample 80_docs/unit_items.html}}

If you know the ID of any data item, you can easily get to all its properties:

~~~js
var title = $$("list").getItem(id).title;
~~~

If there are several data items that comply to the unit value criterion, they are returned in a **JS array**, and should be treated accordingly. 

**Common Functionality:**

- [Data Loading](desktop/data_loading.md). 
- [Defining Data Template](desktop/html_templates.md).
- [Adding Active Elements to UnitList Items](desktop/active_content.md)
- [Adding/Deleting Items](desktop/add_delete.md).
- [Editing Data](desktop/edit.md).
- [Data Filtering and Sorting](desktop/filter_sort.md)
- [Selection](desktop/selection.md)
- [Paging](desktop/paging.md)
- desktop/export_png.md
- desktop/data_components_export.md

{{note
Note that there's no built-in possibility to edit data with UnitList. You should create a prototype **editlist** object beforehand.
}}


##Related Articles
- desktop/data_object.md
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Changing Component Properties](desktop/redefinition.md)
- [List](desktop/list.md)
- [GroupList](desktop/grouplist.md)
- [X-list](desktop/xlist.md)
- [UnitList CSS Image Map](desktop/unitlist_css.md)

@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)

@metadescr:  UnitList presents data in groups derived from initial non hierarchical dataset. Data items are sorted and then united by common values. Initialization snippet List items