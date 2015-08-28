Colorpicker
======================

##API Reference

- [Methods, properties and events](api__refs__ui.colorpicker.html)
- [Shared functionality](desktop/controls_guide.md)

##Overview

<a href="http://webix.com/widget/colorpicker/" title="webix colorpicker widget">Colorpicker</a>  allows for selecting a color from the dedicated 
[colorboard](desktop/colorboard.md) that is initialized on clicking its input field. 

<img src="desktop/colorboard.png"/>

##Initialization

~~~js
{ view:"colorpicker", label:"Front color", name:"color", value:"#ffaadd" }
~~~

{{editor http://webix.com/snippet/9ed4eab3	Colorpicker in Form}}

####Main Properties

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container;   
- **value** (hex code) - the initial value of the picker that is changed by picking any color from the colorboard.
