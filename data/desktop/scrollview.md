ScrollView
======================

##API Reference

- [Methods, parameters and events](api/refs/ui.scrollview.md)
- [Samples](http://docs.webix.com/samples/04_template/index.html)

##Overview

Scrollview inherits from [view](desktop/view.md) and makes any of the nested components scrollable, either in horizontal or in vertical mode. It is handy in case of long 
homogenous data items, like text templates.

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/scrollview.png"/>


##Initialization

It's reasonable to use the scrollview just as a scrolling container while text into is stored in HTML.

~~~html
<div id="mybox1">Some very long article-1</div>
<div id="mybox2">Some very long article-2</div>
<div id="mybox3">Some very long article-3</div>
...
~~~

Then you can put these 'long articles' into the scrollview and form a very long list where you can scroll to any article you wish: 
HTML content is nested into UI component with the help of a dedicated [data template](desktop/html_templates.md):

~~~js
webix.ui{(
		view:"scrollview",
        id:"verses",
		scroll:"y", //vertical scrolling
		body:{
        	rows:[
        		{id:"verse_1", template:"html->my_box1"}, // corresponds to the dedicated div ID
                {id:"verse_2", template:"html->my_box2"}
            	{...}
            ]}
	})
~~~
{{sample 04_template/10_scrollview.html }}

Scrollview features a **body** object property where items (text templates, components) are stored in either **rows** or **cols** array for vertical or horizontal item arrangement respectively. 

##Working with Scrollview

Within scrollview as well as within any component with a scrollbar you can: 

- scroll to a definite position of the component;
- define your position - how far you have scrolled away from the top and left border of the scrollview;
- enable and disable scrolling and specify scrolling directions. 

Read more about **scroll control** in the [corresponding article](desktop/scroll_control.md) of the documentation. 



##Related Articles

- [Setting Borders to the Components](desktop/borders.md)
- [Adding Headers to Components](desktop/setting_headers.md)
- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Layout](desktop/layout.md)
- [Multiview](desktop/multiview.md)
- [Carousel](desktop/carousel.md)
- [Accordion](desktop/accordion.md)
