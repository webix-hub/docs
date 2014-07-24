Carousel
==========================

##Overview

Ui-related <a href="http://webix.com/widget/multiview-scrollview-carousel/" title="javascript webix slider">carousel</a> is designed to present Webix components in one view with the ability to switch between them by clicking on the dedicated buttons or sliding (on touch devices).

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/carousel.png"/>

{{sample 26_carousel/01_init.html}}

##Initialization

Carousel items are arranged into either **rows** to scroll through them vertically or in **cols** to scroll horizontally. Each row/column includes Webix component, e.g: 

- simple or data [template](desktop/template.md) for showing texts and images;
- any data component like [dataview](desktop/dataview.md), [chart](desktop/chart.md), [datatable](datatable/index.md); 
- [layout](desktop/layout.md) of any complexity.

~~~js
webix.ui({
	view:"carousel",
	id:"carousel",
	cols:[
		{ view:"template" },
		{ view:"chart" },
		{ view:"datatable" },
    	{ rows:[...]} //layout
	]
});
~~~

{{sample 26_carousel/01_init.html}}

Normally, component configuration is stored separately while **cols/rows** contain an array of corresponding variables. It makes code clear and easy to read. 

###Navigation Area

Carousel comes equipped with a **navigation** panel that contains:

- **navigation items** (circles) that show the number of carousel views and highlight the opened one;
- **navigation buttons** (right/left) placed together to the right of the circles.

You can either click buttons or items to get to the needed view. On touch devices views are switched by swipe movements. 

####Redefining Navigation 

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/carousel_side.png"/>

{{sample 26_carousel/02_types.html}}

Navigation area is controlled via **navigation** object property of the carousel component. From there you can:

- **separate navigation buttons** and place them on the right and left sides of the view, define **"side"** type;
- **remove** navigation **items** (circles) or **buttons** by setting *false* value to the corresponding property.

~~~js
view:"carousel",
cols:[...],
navigation:{
	type: "side",
    items:false,
    //buttons:false
}
~~~

####Custom Navigation Area

Any Webix component can be used to navigate through the carousel by using its API.

For instance, you can use one-row [dataview](desktop/dataview.md) with thumbnails of carousel views.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/carousel_nav.png"/>

{{sample 26_carousel/03_outer_navigation.html}}

In [layout](desktop/layout.md) carousel and the component used for navigation are stored in different rows or cols:

~~~js
rows:[
	{view: "carousel",
     id:"carousel",
	 cols: []
    },
	{view: "dataview",
	 id: "imageList",
	 yCount: 1, //one row
	 select: true, //item selection enabled
	 scroll: false, //non-scrollable
	 data: [...]
    }
]
~~~

Switching is enabled by catching carousel api/ui.carousel_onshow_event.md and dataview api/link/ui.dataview_onitemclick_event.md events:

~~~js
// when dataview item is clicked, the needed view is shown
$$("imageList").attachEvent("onItemClick",function(id){
	$$(id).show();
});

//when carousel item is shown, its thumbnail in dataview is selected
$$("carousel").attachEvent("onShow",function(id){
	$$("imageList").select(id);
});
~~~

Learn more about how to [show and hide Webix components](desktop/visibility.md) and study [selection pattern](desktop/selection.md) of data components.

###Scrolling Speed

The **default scrolling speed** of the carousel is **300ms**. To change it use the following: 

~~~js
webix.ui({
    view:"carousel",
    scrollSpeed: "500ms"
});
~~~

However, in case of significantly slower scrolling speed smoothness may degrade.
 
##Working with Carousel

1 . You can programmatically navigate through the carousel with the help of the following switching functions:
	 - **showPrev()** - takes to the previous view;
     - **showNext()** - takes to the next view.
     
These functions can be [attached](desktop/event_handling.md) to custom buttons or any on-page and application events:

~~~js
 { view:"button", value:"Previous View", click:function(){ $$('carousel').showPrev(); }
~~~

2 . With touch-based devices initial scrolling pattern can be changed depending on the screen orientation. Scrolling is adjusted by the dedicated method: 

~~~js
$$("carousel").adjustScroll(); 
~~~

####Setting the Active Element for the Carousel

3 . Active carousel item is a view that is currently shown. Carousel views can be treated either by their IDs or by their position in the **cols/rows** array (zero-based numbering). 

- **setActive**(id) - shows a view with the specified ID; 
- **setActiveIndex**(index) - shows a view with the specified index;. 

4 . The same way you can get the currently shown (active) item: 

- **getActiveId()**; - returns ID of the active view;
- **getActiveIdIndex()**; - returns index of the active view. 

~~~js
$$("carousel").getActiveIndex();
~~~

##API Reference

[Methods, Properties and Events](api/refs/ui.carousel.md)

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
