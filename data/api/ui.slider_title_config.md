title
=============


@short: text over slider bar
	

@type: string,function
@example:

webix.ui({
    view:"slider",
    title:"Select range from 0 to 100",
    ...
});


@template:	api_config
@descr:


Can be defined as function

~~~js
webix.ui({
    view:"slider",
	title:function(obj){
   	     return "Value: "+ obj.value;
	}
    ...
});
~~~

@related:
	desktop/slider.md
@relatedsample: 
	13_form/05_extras/05_slider_title.html