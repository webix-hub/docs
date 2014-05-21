Dynamic Tabbar
=========================

Tabbar can take the following modifications: 

- Tabbar may have **non-static tab width** and **quantity** that are both changed dynamically on window resizing;
- Tabs can be pushed to a **related popup** while retaining their default behavior.

<img src="desktop/responsive_tabbar.png">

{{sample 20_multiview/10_many_tabs.html}}

Everything is done fully automatically - when window size changes, tabs are minimized and then pushed to a popup. So following code is enough: 

{{snippet
Default tabbar
}}
~~~js
{ view:"tabbar", options:["First tab", "Second Tab"] }
~~~

###Customization

- The minimal width of each tab is **100px** by default.  It is common for all the tabs of this tabbar and can be changed with the help of **tabMinWidth** property;
- The minimal width of an area to the right that triggers a popup is **40px**. By default an **ellipsis** icon is used. Both parameters can be changed:
	- **tabMoreWidth** sets the width of this area;
    - **moreTemplate** sets other icon/text/HTML of this area. Either function or string can be used;
- The width of the popup is **200px** by default. It can be changed with the **popupWidth** property;
- The default number of list items in the popup is **7**. It can be chaged with the **yCount** parameter. If there are more items in the popup, scroll will appear.
- By default list items feature *#value#* template. Other template can be set by **popupTemplate** property. 

{{snippet
Customized tabbar
}}
~~~js
{ 
	view:"tabbar", 
	tabMinWidth:150, 
    tabMoreWidth:80,
    moreTemplate:"Show more", 
    //or moreTemplate:function(){ return "Show more" },
    popupWidth:250,
    popupTemplate:"#text#"
    yCount:10
    options:[
    	{id:1, value:"First Tab", text:"Some text for first tab"},
        {id:2, value:"Second Tab", text:"Some text for second tab"}
		...
    ] 
} 
~~~

Note that **options** config for tabbar  must comnpulsory include **value** property, otherwise it will render *id* on tabs and through an error. Still, there can be other properties that can be rendered 
in popup list with **popupTemplate**. 

More info about Webix data templates can be found in the [dedicated documentation article](desktop/html_templates.md). 
