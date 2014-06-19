Component Styling
===============


##Basic Principles of Styling


All the library components are styled with the help of an external style sheet "webix.css" you specify in the document head area alongside with the "webix.js" lib file. It's a mandatory step. 

After that, the styling can be customized in two modes: 

1 . With **embedded styles** you define in the document head between < style > tags.

~~~js
<style>
	.my_style  {
		font-style: italic;
	}
</style>
<script>
	webix.ui({
         view:"dataview",
         css:"my_style",
         template: "#title#<br/> Year: #year#, rank: #rank#",
	});
</script>
~~~

<img src="desktop/dataview_italic.png"/>

{{sample 80_docs/dataview_italic.html}}

2 . By means of **inline styling** where you insert CSS into HTML tags during [defining an appropriate template](desktop/html_templates.md) for data rendering.

**Setting CSS class:**

~~~js
webix.ui({
    view:"dataview",
    template:""<div class='my_style'>#title#<br/> Year: #year#, rank: #rank#</div>",
    data:"..."   
});
~~~

The result will be the same as above.

**Adding Style**

~~~js
view:"window",
body:{
	template:"<span style='font-size:14px;font-style:italic'>Styled Window</span>"
}
~~~

<img src="desktop/window_styled.png"/>

{{sample 80_docs/styled_window.html }}

##Styling inside Type Parameter

When you set dimensions of component items, you use the **type** property that contains an object with an item's width and height. There you can as well put
other parameters including template and css. 

~~~js
webix.ui ({
	view:"dataview", 
	type:{
    	height: 45,
	    width: 300,
		template:"<span style='color:#67B802; font-style:italic'>#name#</span>"				
	}
    ...
})
~~~

Type can also be created separately through the **webix.type** class. 

~~~js
webix.type(webix.ui.dataview,{
	name:"custom",
	template:"<span style='color:#67B802; font-style:italic'>#name#</span>",
    height: 45,
	width: 300
});
 
webix.ui ({
	view:"dataview", 
	type: "custom",
    ...
})
~~~

<img src="desktop/dataview_type_styling.png"/>

{{sample 80_docs/dataview_type.html }}

##Adding Predefined Webix CSS Classes

You can either **apply predefined CSS** as it is:

~~~js
webix.ui({
	view:"dataview",
	template:"<div class='webix_strong'>#title#</div> Year: #year#, rank: #rank#",
    ...
});
~~~

{{sample 06_dataview/01_initialization/03_fixed_sizing.html}}

Or **redefine default CSS** for this document: 

~~~css
.mywin .webix_win_head .webix_template{
	background: #444; color:#AFA;
}
~~~

<img src="desktop/window_styled.png"/>

{{sample 80_docs/styled_window.html }}

As far as you've noticed, **Webix default CSS classes** are marked by a **"webix_"** prefix. Moreover, each component part has its peculiar CSS class, you can redefine. Read below to learn more about it.

##Styling of a Specific Part of a Component (CSS maps)

CSS maps help stylize a specific part of a component. You should refer to its CSS map, pick the css class to the needed part and define the style in the document head. 

Style applies to the header of the unitlist:

<img src="desktop/unitlist.png"/>

~~~js
<style>
.webix_unit_header{
	color:#cb4c26;
	font-style:italic;
}
</style>
  
~~~

CSS classes for each component are described in [CSS Image Maps](desktop/css_image_maps.md) Section

##Styling Instances of One and the Same Object

Controls are most frequently used components so one and the same control type, e.g. button, occurs more than once on the page, as a rule. 

<img src="desktop/styled_buttons.png"/>

Take, for instance, buttons. If you want to style each button differently, you should define a separate CSS class for each button, like this: 

~~~css
.bt_1 input{
	border-radius:12px; -moz-border-radius:12px; -webkit-border-radius:12px;
	background: #396D9E;
	...
}
.bt_2 input{
	border-radius: 4px; -webkit-border-radius: 4px;-moz-border-radius: 4px;
	border: 1px solid #3D7113;
	...
}
~~~

Here **.bt1** and  **bt2** are class names for two different buttons while **input** specifies that the button's input area should be styled as well. 

{{sample 02_toolbar/12_styled_buttons.html }}

##Changing Default Icons

Default [FontAwesome icons](http://fortawesome.github.io/Font-Awesome/icons/) that are used for various controls can be changed to custom ones, which is described in detail in 
a [separate documentation article](desktop/icon_types.md).


@index: 
  - desktop/css_image_maps.md
  
  

@complexity:2