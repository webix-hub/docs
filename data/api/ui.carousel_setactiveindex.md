setActiveIndex
=============

@short:selects the item with the specified index
	
@params:
- index		number	the item index (zero-based numbering)


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
$$('carousel1').setActiveIndex(0);



@template:	api_method
@relatedapi:
    api/ui.carousel_getactiveindex.md
	api/ui.carousel_getactiveid.md
    api/ui.carousel_setactive.md
@related:
	desktop/carousel.md
@descr:

