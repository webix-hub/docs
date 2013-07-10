css
=============


@short:
	the name of a css class that will be applied to the view container

@type: string
@example:
<style>
.myClass {
	font-style: italic;
}
</style>
~~~
~~~js
webix.ui({
	css:"myClass",
    view:"dataview",
	...
});


@template:	api_config
@defined:	ui.baseview	
@related:
	desktop/styling.md
@relatedsample:
	15_datatable/21_styling/01_basic.html
@descr:

Setting the parameter, for example, to the *"myClass"* value will produce HTML like this:
~~~html
<div class='myClass'>...</div>
~~~
