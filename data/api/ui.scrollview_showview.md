showView
=============

@short:
	places focus on the necessary scrollview item

@params:
- id	id		ID of the view to scroll to

@example:
webix.ui({
	view:"scrollview", 
    id:"verses", 
    body:{
       rows:[
           { id:"verse_1", template:".."},
           { id:"verse_2", template:".."},
           { id:"verse_3", template:".."}
       ]
});

function scroll(id){
            $$("verses").showView("verse_"+id);
        }

@template:	api_method
@relatedsample:
	04_template/10_scrollview.html
@related:
	desktop/scroll_control.md
@descr:


