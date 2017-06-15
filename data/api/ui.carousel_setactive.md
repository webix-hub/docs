setActive
=============

@short: selects the item with the specified id
	

@params:
- id	string		the item id

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
$$('carousel1').setActive("cell2");



@template:	api_method
@relatedapi:
    api/ui.carousel_getactiveid.md
	api/ui.carousel_getactiveindex.md
    api/ui.carousel_setactiveIndex.md
@related:
	desktop/carousel.md
@descr:




@seolinktop: [widget library](https://webix.com)
@seolink: [javascript image slideshow](https://webix.com/widget/carousel/)