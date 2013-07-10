color
=============


@short: a popup editor for hex code values. Allows for picking a color from the colorboard.


@type:string 

@example:
//for a datatable column
{ id:"start", editor:"color", template:tpl, header:"Color A", width:120},

@template:	api_config

@relatedsample:
	15_datatable/04_editing/11_colorpicker.html
@related:
	desktop/editing.md
@descr:

###Data Item Template

To display the necessary color in a component item, you should create a proper template for it: 

~~~js
var tpl = "<span style='background-color:#value#; border-radius:4px; padding-right:10px;'>
 &nbsp</span> #value#"; 
~~~

Here we have a square with rounded edges and a hex code for the corresponding color. Otherwise, just hex codes will be shown. 

###Colorboard configutation

By default, a standard colorboard is shown. For further customization, you should configure your popup:

~~~js
webix.editors.$popup = {
        color:{
            view:"popup",
            body:{ view:"colorboard", width:200, height:200, rows:20, cols:20 }
        }
    };
~~~