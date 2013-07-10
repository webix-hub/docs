@link: api/ui.baseview_show.md

@short: shows the tooltip at a specific position
	

@params:
-data	any		the tooltip content
- pos	object	the position that the tooltip will appear at



@example:
myView = webix.ui({
    view:"dataview",
    ...
    tooltip:{
        template:" Rating: #rating# <br> Votes: #votes#"
    }
});
 
myView.config.tooltip.show({rating:7.8, votes:300}, {y:30,x:40})

@template:	api_method
@descr:
The **pos** parameter has 2 properties:

- **x**	- (*number*) the horizontal location of the tooltip relative to the upper-left corner of the screen.
- **y** - (*number*) the vertical location of the tooltip relative to the upper-left corner of the screen.

@related:
	desktop/tooltip.md

@relatedsample:
@relatedapi:
@descr: