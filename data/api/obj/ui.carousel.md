
{{memo a container control that provides continuous, circular navigation through a set of pictorial content blocks. One block is visible at a time}}

The control supports any content inside of it. The content blocks can be arranged vertically or horizontally, supplemented or not with the navigation control panel. Check [carousel](desktop/carousel.md) documentation for more detailed description.

### Constructor

~~~js
var carousel = webix.ui({
    view:"carousel",
    id:"carousel",
    width:464, 
    height:275, 
    cols:[
      { css:{"background-color":"#ffc4c4"}, template:"view1" },
      { css:{"background-color":"#ffffb1"}, template:"view2" },
      { css:{"background-color":"#c4ffc4"}, template:"view3" }
    ]
});
~~~
### Where to start

- [Overview of the Carousel Widget](desktop/carousel.md)
- [Samples](http://docs.webix.com/samples/26_carousel/index.html)


@seolinktop: [web development library](https://webix.com)
@seolink: [slideshow javascript](https://webix.com/widget/carousel/)