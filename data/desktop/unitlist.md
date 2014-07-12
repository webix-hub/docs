Unitlist
==============

###Overview

Unitlist presents data in groups derived from initial non-hierarchical dataset. Data items are sorted and then united by common values. 

<img style="display:block; margin-left:auto;margin-right:auto;"   src="desktop/unitlist.png"/>

###Initialization

{{snippet
List items are groupped by title
}}
~~~js
webix.ui({
	view:"unitlist", 
    sort:{
        by:"#title#",
        dir: 'asc'
    },
    uniteBy:function(obj){
        return obj.title.substr(0,1); 
    },
    template:"#title#</br>#year#<br/>#votes#",
    data: set
});
~~~


{{sample 05_list/11_unitlist.html }}

- The **uniteBy** property groups data according to the specified criterion, the unit value (here it's the first letter to the data item title);
- In addition it sets **unit headers** (unit values) and, additionally, sets [template](desktop/html_templates.md) for them;
- **Sorting** is applied to unit headers as well as to data items within the units. 

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

###Working with Unitlist

**Working with Unit Values**

Unitlist API makes it possible to get text values of unit headers (unit values) as well as get data items that comply with this or that unit criterion. 

- **getUnits()** - returns JS array of unit values defined by the **uniteBy** property. The values are arranged in the alpabetical order, numbers first;
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

If there're several data items that comply to the unit value criterion, they are returned in a **JS array**, and should be treated accordingly. 

**Common Functionality:**

- [Data Loading](desktop/data_loading.md). 
- [Defining Data Template](desktop/html_templates.md).
- [Adding/Deleting Items](desktop/add_delete.md).
- [Editing Data](desktop/edit.md).
- [Data Filtering and Sorting](desktop/filter_sort.md)
- [Selection](desktop/selection.md)
- [Paging](desktop/paging.md)

{{note
Note that there's no built-in possibility to edit data with unitlist. You should create a prototype **editlist** object beforehand.
}}

###API Reference 

[Methods, properties and events](api__refs__ui.unitlist.html)

###Related Articles
- desktop/data_object.md
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [List](desktop/list.md)
- [Grouplist](desktop/grouplist.md)
- [X-list](desktop/xlist.md)
- [Unitlist CSS Image Map](desktop/unitlist_css.md)