getActiveId
=============



@short:
	gets the id of the current selected item


@returns:
-id		string		the id  of the current selected item	

@example:
webix.ui({
	view:"carousel",
 	id:"carousel1",
    container:"box",
 	cols:[
       { id:"cell1", template:"<img src='spring.jpg'/>" },
       { id:"cell2", template:"<img src='summer.jpg'/>" }
	]
});
$$('carousel1').setActive("cell2");
$$('carousel1').getActiveId(); // -> 'cell2'

@template:	api_method
@relatedapi:
	api/ui.carousel_getactiveidIndex.md
    api/ui.carousel_setactive.md
    api/ui.carousel_setactiveIndex.md
@related:
	desktop/carousel.md
@defined:	ui.carousel	
@descr:


