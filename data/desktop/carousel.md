Carousel
==========================

###Overview

Ui-related carousel helps to present images as well as picture-based data-presenting components (e.g. [chart](desktop/chart.md)) in one view with the ability to switch between 
them by clicking on the dedicated buttons or sliding (on touch devices).

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/carousel.png"/>


###Initialization

Carousel items are arranged into either rows to scroll through them vertically or in cols to scroll horizontally. Each row/column contains a Webix component. 

~~~js
var achart = { view:"chart", id:"cell1",...};
var bchart = {...};
var cchart = {...};

{view:"carousel", id:"parts", cols:[
		achart, bchart, cchart
	]
}                
~~~
{{sample 20_multiview/06_carousel.html}}

Components for carousel item are stored in the **cols/rows** array. Normally, they are declared beforehand in the variables and later included in the **cols** property. It  makes 
code clear and easy to read. 

####Carousel Panel

Carousel comes equipped with a **panel**, an area that shows the number of items in the carousel and highlights the opened one. By default, it features **bottom** alignment and **16-pixel** size. Its properties are controlled 
via the panel object property: 

~~~js
webix.ui({
	view:"carousel",
	panel: {
		align: "bottom",
    	itemSize: 16,
    	size: 14
	}
});
~~~

**"Top"** and **"bottom"** alignment suits **horizontal** scrolling when items are arranged in cols, while **"left"** and **right** alignment is used for **vertical** scrolling (items defined in the rows array):

####Scrolling Speed

The **default scrolling speed** of the carousel is **300ms**. To change it, use the following: 

~~~js
webix.ui({
    view:"carousel",
    scrollSpeed: "500ms"
});
~~~
 
###Working with Carousel

1 . Switching function can be attached to button on each of the carousel sides (right-left or tom-bottom). They are as follows:
	 - **showPrev()** - takes to the previous view;
     - **showNext()** - takes to the next view.

~~~js
 { view:"button", value:"prev", click:function(){ $$('parts').showPrev(); }
~~~

2 . With touch-based devices initial scrolling pattern can be changed depending on the screen orientation. Scrolling is adjusted by the dedicated method: 

~~~js
$$("parts").adjustScroll(); 
~~~

####Setting the Active Element for the Carousel

3 . Active carousel item is the one that is currently shown. To items are treated either by their IDs or by their position in the **cols** array. 

- **setActive**('cell1'); 
- **setActiveIndex**(0);  - the same item is selected (zero-based numbering). 

4 . The same way you can get the currently shown (active) item: 

- **getActiveId()**; //->returns ID of the active item;
- **getActiveIdIndex()**; //->returns index of the active item. 

~~~js
$$("parts").getIndexActive();
~~~

###API Reference

[Methods, properties and Events](api/refs/ui.carousel.md)

###Related Articles

- [Adding Headers to Components](desktop/setting_headers.md)
- [Event Handling](desktop/event_handling.md)
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of Components](desktop/redefinition.md)
- [Layout](desktop/layout.md) 
- [Multiview](desktop/multiview.md)
- [Scrollview](desktop/scrollview.md)
- [Carousel CSS Image Map](desktop/carousel_css.md)
