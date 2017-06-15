showPrev
=============

@short:
	shows the previous item of the carousel
	

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
$$('carousel1').showPrev();

@template:	api_method

@relatedapi:
	api/ui.carousel_shownext.md    
@relatedsample:
	20_multiview/06_carousel.html
@related:
	desktop/carousel.md

@seolinktop: [easy javascript framework](https://webix.com)
@seolink: [slideshow javascript](https://webix.com/widget/carousel/)