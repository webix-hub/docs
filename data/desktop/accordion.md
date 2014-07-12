Accordion
===================

###Overview

<a href="http://webix.com/widget/layout-accordion/" title="webix accordion widget">Accordion</a> consists of panes arranged into layout rows and cols. Each pane, or **accordion item**, features **body** and **header** and can be fully expanded and collapsed by clicking its header. 
You can place text or any component into each pane. The component inherits from [layout](desktop/layout.md). 

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/accordion_front.png"/>

<br>


###Initialization

{{snippet
Accordion with three panes
}}

~~~js
webix.ui({
	view:"accordion",
    multi:true,
	cols:[ //or rows 
		{ header:"col 1", body:"content 1" }, 
		{ header:"col 2", body:"content 2" },
		{ header:"col 3", body:"content 3" }
	]
});
~~~
{{sample
01_layout/05_header_complex.html
}}


####Comments: 

- By essence, each row/column is a ui-related [accordionitem](desktop/accordionitem.md) component; however, it's direct initialization isn't compulsory - you can just enumerate its **properties** in the row (column) as shown above. 
- Moreover, you can omit the *view:"accordion"* line as well. The component will be drawn anyway as soon as you divide a row/column into **header** and **body** parts. 
- There can be as well rows/ cols without headers. It goes without saying that they are non-collapsable. 

<img src="desktop/headers.png"/>

{{sample 01_layout/03_header.html }}

{{note
Note that **view name can be omitted** (view:"accordion"). If you place an array of objects with **body** and **header** into row or column  - the view will be automatically recognized as accordion. 
}}

~~~js
webix.ui({
	cols:[ //or rows 
		{ header:"col 1", body:"content 1" }, 
		{ header:"col 2", body:"content 2" }
	]
});
~~~

{{sample 01_layout/07_header_all.html}}

###Working with Accordion

Accordions differ by their possibility to show and hide panes at the same time. There's a special **multi** parameter 
to set the necessary mode. 

- **multi:true (default)** - all panels can be expanded as well as collapsed at a time;
- **multi:false** - only one panel can be (and must be) visible at a time;
- **multi:"mixed"** - all panels can be expanded at a time, but you cannot close them all. One panel remains visible. 

###API Reference

[Methods, parameters and events](api__refs__ui.accordion.html)

###Related Articles

- [Setting Borders to the Components](desktop/borders.md)
- [Adding Headers to Components](desktop/setting_headers.md)
- [Sizing Components](desktop/dimensions.md)
- [Resizing Components](desktop/resizing.md)
- [Layout](desktop/layout.md)
- [Multiview](desktop/multiview.md)
- [Scrollview](desktop/scrollview.md)
- [Carousel](desktop/carousel.md)
- [Accordion CSS Image Map](desktop/accordion_css.md)

@index: 
  - desktop/accordionitem.md