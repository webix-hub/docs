Adding/Removing Views Dynamically
===============

You can add and remove components dynamically after you've already inited layout and set some components. It works for:

- **layout** rows and cols;
- **multiview** cells;
- **accordion** and **carousel** panels;
- **toolbar** controls;
- **form** controls.
	
Adding and removing views is implemented with the help of the **addView()** and **removeView()** methods. 

###Adding View

To add the new view (layout row and column, multiview cell, accordion panel, as well as any toolbar or form control) - specify the **view object** and **position** to insert. 

{{snippet
Adding a button to the toolbar
}}
~~~js
var added = [];
var id = $$("toolbar").addView({
	view:"button", value:"new button", 
}, index);
added.push(id);
~~~

The newly added view can be sized during adding according to [common rules](desktop/dimensions.md) as well as later on via [property (re)defining](desktop/redefinition.md).

###Removing View

**RemoveView()** method removes only the views added with the **addView()**. The method takes **view object** or its **id** as an argument.

{{snippet
Removing a buttom from the toolbar
}}
~~~js
var id = added.pop();
if (id)
	$$("toolbar").removeView(id);
~~~
