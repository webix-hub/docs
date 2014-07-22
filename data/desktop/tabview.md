Tabview
==========================

Tabview is a hybrid component that encompasses [multiview](desktop/multiview.md) and [switching buttons](desktop/tabbar_switching.md). Tabview tabs don't differ from [tabbar](desktop/controls.md#tabbar)
in design yet the difference between them hides in the code. 

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/tabview.png"/>

<br>

###Initialization

There's no need to create either a special switching button, or separate multiview. Everything lies within one and the same view called **"tabview"** that **tabs** and **cells** properties that contains collections of tab
button and corresponding views.

{{snippet
Tabview
}}

~~~js
webix.ui({
	view:"tabview",
    animate:false,
	cells:[
		{
		 header:"List",
		 body:{
			id:"listView",
			view:"list", ...
			}
		},
        {
		 header:"Form",
		 body:{
			id:"formView",
			view:"form", ...
			}
		}
	]
});

~~~
{{sample 02_toolbar/03_tabview.html }}

Each tabview cell features:

- **header** - string with a heading for the cell, displayed as **tab title**;
- **body** - **component** object that is placed in this cell. 



{{note
Note that unlike with [multiview and tabbar](desktop/multiview.md), there's no *multiview* parameter in the tabview constructor. Switching is enabled
automatically. 
}}

###Related Articles

- desktop/show_switching.md
- desktop/tabbar_switching.md


