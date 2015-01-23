Multiview
==========================

##API Reference 

- [Methods, properties and events](api__refs__ui.multiview.html)
- [Samples](http://docs.webix.com/samples/20_multiview/index.html)


##Overview

Multiview  helps you rationally use space on the page by placing different views into one and the same area. Only one view is visible at a time the others accessable with the help of dedicated buttons. 

Multiview inherits from [layout](desktop/layout.md) and if combined with a switching control like a [tabbar](desktop/controls.md#tabbar),
form a [tabview](desktop/tabview.md).

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/multiview.png"/>

<br>

##Initialization
{{snippet
Multiview with three views
}}
~~~js
webix.ui({
	view:"multiview", 
	cells:[
         {id:"listView", view:"list", .... },
         {id:"formView", view:"htmlform", .... },
         {id:"emptyView"}
    ]
});
~~~

{{sample
20_multiview/05_tabbar_with_icons.html
}}

{{note
The direct initialization of the component (**view:"multiview"**) is optional and you can just init **cells** and the view will be automatically recognized.
}}

~~~js
webix.ui({
	cells:[
         {id:"listView", view:"list", .... },
         {id:"formView", view:"htmlform", .... },
         {id:"emptyView"}
    ]
});
~~~

##Working with Multiview

###Adjusting tab dimensions

The **dimensions** of multiview cells are adjusted to their content. By default, the whole multiview (all the cells) take the size of smallest cell. To adjust it to the biggest cell, use **fitBiggest** property:

~~~js
webix.ui({
	view:"multiview", 
	cells:[],
    fitBiggest:true
});
~~~

###Managing animation

My default multiview cells are switched with horizontal animation of a "slide" type. To disabled animation, or chnge animation type, configure the **animate** property: 

~~~js
webix.ui({
	view:"multiview", 
	cells:[],
    animate:false
});
~~~

{{sample 20_multiview/07_no_animation.html }}

Learn more about animation types in the desktop/animation.md article.

###Switching between views

1 . **[Tabbar and Segmented Integral Buttons](desktop/tabbar_switching.md).**

Here switching is implemented with the help of special library controls that have built-in switching functionality as soon as they are bound with multiview cells by ID of these cells. 

2 .**[Tabview Functionality](desktop/tabview.md).**

Multiview built-in means of changing the view cells. Look very much like the tabbar from the previous point. 

3 . **[Functions for Switching Actions](desktop/show_switching.md)**. 

Here you use common methods (**show and back**) and create custom buttons each of which can take you to the necessary view. **Show()** method in conjunction with its counterpart **hide()** are as well used for 
[changing visibility](desktop/visibility.md) of UI components. 

###History API

Learn how to "memorize" the currenty opened tab in the [related article](desktop/history_track.md). 


##Related Articles

- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Setting Borders to the Components](desktop/borders.md)
- [Controls](desktop/controls.md)
- [Tabview Functionality](desktop/tabview.md)
- [Layout](desktop/layout.md)
- [Scrollview](desktop/scrollview.md)
- [Accordion](desktop/accordion.md)
- [Carousel](desktop/carousel.md)

@index:
  - desktop/tabbar_switching.md
  - desktop/show_switching.md