Adding Headers to Components
=============

Header is a blue section above the main contents of a component or [layout](desktop/layout.md) row/column. 

Depending on the context, header is defined in two ways: 

- as template type;
- as component property. 

<img src="desktop/component_inside_window.png"/>

{{sample
10_window/06_component_inside.html
}}

##Header as Template Type

This way of header initialization is used within layout rows and columns. Here header is just one of [template](desktop/template.md) types. 

If you want to make a header for, say, DataView, make two rows and place header in the first row while the DataView should be in the second one.  

{{snippet
Type:"header"
}}
~~~js
webix.ui({
	rows:[
		{ view:"template", template:"some text", type:"header" }, //1st row
		{ ....} //2nd row
		]

});
~~~

<img src="desktop/header_tpl.png"/>

BTW, another template type, namely **section**, allows for setting a specific header that looks like a thin line that encircles the component and has a heading above. 

{{snippet
Type:"section"
}}
~~~js
{ view:"template", template:"some text", type:"section" }
~~~

<img src="desktop/template_section.png"/>

{{note
During header initialization the **view:template** line is optional. 
}}

{{sample 80_docs/template_types.html }}

##Header as Component Property

Still, some components have built-in means of header building. 

- [Accordion Items](desktop/accordionitem.md)
- [TabView Tabs](desktop/tabview.md)
- [Property Sheet](desktop/property_sheet.md)

**Accordion item** is divided into **body** and **header**

~~~js
{ view:"accordionitem", header:"Pane ", body:"text' }
~~~

Headers of **TabView tabs** are defined as header properties of TabView **cells**:

~~~js
{ view:"tabview", 
  cells:[
 	{
      header:"List",
      body:{
      	view:"list", ...
      }
    }
  ]
}
~~~

{{sample 20_multiview/08_tabview.html}}

**Property sheet** looks like a grid with sections separated by blue headers. In essence, any line without data becomes header, the heading text being defined by **label** property. 

~~~js
 { label:"Layout" }, //header
 { label:"Width", type:"text", id:"width"}, //line with data
~~~

{{sample 07_property/01_init.html }}

UI-related **[window](desktop/window.md)** features header defined by its **head** property. 

##Adding buttons into the header 

Since a header is a template, only HTML-buttons can be added into it.
If you want to add some buttons into the header of a component, the best solution is to use the desktop/toolbar.md component:

~~~js
webix.ui({
  view:"toolbar", 
  cols:[
    { view:"label", label:"Projects", width:400,},
    { view:"button", value:"Load" },
    { view:"button", value:"Save" },
    { view:"button", value:"Info" }
  ]
});
~~~

{{editor http://webix.com/snippet/1f562d52	Toolbar with Buttons in the Header}}

@complexity:2