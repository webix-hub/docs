RangeSlider
===================

{{pronote
The control is available only in **Webix Pro** edition.
}}

##API Reference

- [Methods, properties and events](api/refs/ui.rangeslider.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview 

Range Slider is an advanced [slider](desktop/slider.md) control that allows selecting a specific range of values with two markers. 
The colored space between the markers defines the values included into the range.

<img src="desktop/range_slider.png">

##Initialization 

~~~js
{ view:"rangeslider", label:"Level B", value:[0,50], name:"s2"}
~~~

{{sample 13_form/05_extras/07_rangeslider.html}}

####Main Properties

- **value** (string/array) - the starting and the ending values of the range;
- **label** (string) - text label of the control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **name** (string) - name of the control used to get its value in the form;
- **title** (template, function) - text label over the slider marker 

