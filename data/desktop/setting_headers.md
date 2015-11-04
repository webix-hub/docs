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

If you want to make a header for, say, dataview, make two rows and place header in the first row while the dataview should be in the second one.  

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
- [Tabview Tabs](desktop/tabview.md)
- [Property Sheet](desktop/property_sheet.md)

**Accordion item** is divided into **body** and **header**

~~~js
{ view:"accordionitem", header:"Pane ", body:"text' }
~~~

Headers of **tabview tabs** are defined as header properties of tabview **cells**:

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

@complexity:2