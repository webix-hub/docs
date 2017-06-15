DoubleList
==========

##API Reference

- [Methods, parameters and events](api/refs/ui.dbllist.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/25_dbllist.html)


##Overview

DoubleList widget is based on [Layout](desktop/layout.md) and includes features peculiar to the desktop/list.md widget and the desktop/select.md control. 
It presents data items in two lists: the left list contains all available items and the right one displays selected items.

There's a variety of ways to select items. You can use the related buttons, drag-n-drop items or simply double click on the necessary item.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/doublelist.png"/>


##Initialization

~~~js
webix.ui({
 	view:"dbllist", 
    list:{ autoheight: true },
    labelLeft:"Available screens",
    labelRight:"Selected",
	data:[
        {id:"1", value:"Contacts"},
        {id:"2", value:"Products"},
        {id:"3", value:"Reports"},
        {id:"4", value:"Customers"},
        {id:"5", value:"Deals"}
    ]
});
~~~

{{sample 13_form/01_controls/25_dbllist.html}}


**Main Configuration Properties**

- **labelLeft** - (string) sets a label for the left list
- **labelLeft** - (string) sets a label for the right list
- **labelBottomLeft** - (string) sets a label for the left list at the bottom
- **labelBottomRight** - (string) sets a label for the right list at the bottom
- **list** - sets the configuration of lists in the Double List widget. The lists' config is inherited from Webix desktop/list.md
- **buttons** - (string|boolean) sets a custom template for buttons or hides them. Details are given [below](desktop/double_list.md#customizingbuttons)
- **value** - (string|array) sets the ids of items initially selected (placed into the right list)


##Customizing Buttons

The default DoubleList buttons look as follows:

<img src="desktop/doublelist_default_buttons.png">

You can define custom buttons for your interface by using the api/ui.dbllist_buttons_config.md property.
There are two ways to customize the buttons' appearance:

- specify a custom template for buttons:


<img src="desktop/doublelist_custom_buttons.png">

~~~js
webix.ui({
	view:"dbllist", 
	buttons:"<button class='dbllist_button'>Select</button>
    			<button class='dbllist_button'>Remove</button>"
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"}
    ]
});
~~~

- hide the buttons by setting the api/ui.dbllist_buttons_config.md property to *false* and apply a custom method of selecting list items. 
For example, you can set arrow icons in the list template and specify onClick behavior:

<img src="desktop/doublelist_no_buttons.png">

~~~js
webix.ui({
 view:"dbllist",
 list:{ 
    autoheight: true,
    select: false,
    template:function(obj, common){
      var dir = (common.id  === "left" ? "right" : "left");
      return obj.value + "<span class='select_one webix_icon fa-arrow-"+dir+"'></span>"
    },
    onClick:{
      "select_one":function(e, id){
         var mode = this.config.$id === "left";
         this.getTopParentView().select(id, mode);
         return false;
      }
    }
 },
 buttons:false,
 data:[
   {id:"1", value:"Contacts"},
   {id:"2", value:"Products"}
 ]
});
~~~

{{sample  13_form/01_controls/26_dbllist_buttons.html}}

##Manipulating List Items

###Selecting Items 

You can specify what items should be selected (placed to the right list) initially. 
For this, you should use the api/ui.dbllist_value_config.md property and ids of the necessary items.

It is possible to set the ids either as a string or as an array:

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

You can also select items via calling the api/ui.dbllist_select.md method. It can both select the specified items (move them to the right list)
or return them back to the left list.

The method takes two parameters:

- **id** - (*string|array*) the id (ids) of the items to select
- **mode** - (*boolean*)	true - to select items (move them to the right list), false - to unselect items 

~~~js
// selects items with ids 3,4 to the right list
$$("dbl1").select([3,4],true);
// returns items with ids 3,4 back to the left list
$$("dbl1").select([3,4],false);
~~~

###Setting/Getting Value

There's a pair of methods that allow specifiying the values of items to select and getting the list of selected items.

The *setValue()* method defines the item(s) that should be selected (moved to the right list). It takes the items ids as a string or as an array:

~~~js
webix.ui({
    view:"dbllist", 
    id:"dbl1",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
});
 
$$("dbl1").setValue([1,3]); 
 
//or
$$("dbl1").setValue("1,3")
~~~

The *getValue()* method returns the list of selected values:

~~~js
webix.ui({
    view:"dbllist", 
    id:"dbl1",
    value:"1,2",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}       
    ]
});
 
$$("dbl1").getValue(); // returns "1,2"
~~~

##Configuring Lists

If you want to configure the lists of the widget, you can make use of the **list** property:

~~~js
webix.ui({
	view:"dbllist", 
    list:{ height: 200, scroll:false },   
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"}       
    ]
});
~~~

To access the left or right lists separately, you can address to them by ids. The left list has the id **"left"** and the right one - **"right"**, correspondingly.

You can apply the [List API](api/refs/ui.list.md) to separate lists of the DoubleList widget. For example:

~~~js
$$("$dbllist1").$$("left").disable();
~~~

##Related Articles

- [DoubleList CSS Image Map](desktop/doublelist_css.md)
- [UnitList](desktop/unitlist.md)
- [X-List](desktop/xlist.md)
- [GroupList](desktop/grouplist.md)


@seolinktop: [javascript component library](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)