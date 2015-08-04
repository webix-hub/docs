Slider
===================

##API Reference

- [Methods, properties and events](api__refs__ui.slider.html)
- [Shared functionality](desktop/controls_guide.md)

##Overview

Slider is designed for setting a numeric value from a predefined range of values. It's done by dragging a marker to the left and to the right over the value line. 

<img src="desktop/slider.png">

Negative values are possible.

##Initialization

~~~js
{ view:"slider", label:"Level", value:"20", min:10, max: 120; name:"s1"}
~~~

{{sample 13_form/05_extras/03_slider.html}}

####Main Properties

- **value** (number) - initial value of the control;
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **name** (string) - name of the control used to get its value in the form;
- **step** (number) - distance to the next selectable value (1 by default);
- **min** (number) - minimal value of a slider control. 0 by default. 
- **max** (number) - maximum value of the slider control. 100 by default.
- **title** (template, function) - text label over the slider marker 

{{sample 13_form/05_extras/04_slider_step.html}}.

{{note
Note that if you set **min** and **max** parameters, the initial control **value** should be within their range.
}}

##Slider Title

Slider Title is based on the current value of the control.

For simple title that displayes current value and **static text**, set a template via **webix.template** class:

~~~js
{view:"slider", title:webix.template("Selected: #value#")}
~~~

For complex title that **changes its text** depending on the current value, define a function template:

~~~js
{view:"slider", title:function(obj){
	var text = obj.value > 20 ? "Minimum level reached. " : ""; //title for values over 20
	return text + "Value: "+ obj.value;} //title for other values
}
~~~

##Slider Events

Make use of slider events to set changing title for a drag marker:

- **onChange** - a common event for all conrtol that fires each time control value changes. For slider it takes place as soon as you **stop dragging** the marker, which sets a new value. 
- **onSlider Drag** - fires each time you drag the marker over the line while paying attention to the changing value. 

~~~js
{view:"slider", on:{
	onChange:function(){
		this.define("title", "Final value " + this.getValue());
		this.refresh();
	},
	onSliderDrag:function(){
		this.define("title", "Dragging... Currently "+this.getValue());
		this.refresh();
	}
}}
~~~

{{sample 13_form/05_extras/05_slider_title.html}}

The new title is set with the help of **define()** method while current value of derived with **getValue()**.  Read more about [Changing Component properies](desktop/redefinition.md). 

