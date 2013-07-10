showNext
=============
@short:
	shows the next item of the carousel


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
$$('carousel1').showNext();

@template:	api_method
@relatedsample:
	20_multiview/06_carousel.html
@relatedapi:
	api/ui.carousel_showprev.md
@related:
	desktop/carousel.md
@descr:


