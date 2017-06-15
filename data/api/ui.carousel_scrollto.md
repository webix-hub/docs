scrollTo
=============



@short:
	scrolls the carousel and scrollview container to a certain position

@params:
- x		number		the value of the horizontal scroll
- y		number		the value of the vertical scroll


@example:
webix.ui({
    view:"carousel",
    container:"box",
    id:"carousel1",
    cols:[
       { id:"cell1", template:"<img src='spring.jpg'/>" },
       { id:"cell2", template:"<img src='summer.jpg'/>" }
    ]
});

$$('carousel1').scrollTo(100,0);

@template:	api_method
@related: 
	desktop/scrollview.md
@defined:	ui.carousel	
@descr:

@seodescr:

- See more information about Webix [javascript website framework](https://webix.com) and [Data Table widget](https://webix.com/widget/datatable/) there.

@metadescr: This documentation page describes how you can control the scrolling process while using the JavaScript Carousel widget using the scrollTo method.
@doctitle: The documentation page for the scrollTo method of Carousel. 



@seolinktop: [mvc library](https://webix.com)
@seolink: [carousel slider](https://webix.com/widget/carousel/)