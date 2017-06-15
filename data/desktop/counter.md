Counter
==================

##API Reference

- [Methods, properties and events](api/refs/ui.counter.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

Counter is a spin-box that helps select a number by either entering the value in the input field or 
clicking "+" and "-" buttons to reach the necessary value. 

Negative values are possible.

<img src="desktop/counter.png"/>

{{sample 13_form/01_controls/05_counter.html }}

##Initialization 

~~~js
{ view:"counter", label:"Age", step:10, value:33, min:21, max:100}
~~~

####Main properties

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **step** (number) - sets a step to the next value (1 by default);
- **align** (string)- positions a button with relation to the parent view;
- **value** (number) - the initial value of a control. 0 by default;
- **min** (number) - minimal value for a control. 0 by default;
- **max** (number) - maximum value for a control.

{{note
Note that if you set **min** and **max** parameters, the initial control value should be within the range. 
}}



@metadescr:  Counter is a spin box that helps select a number by either entering the value in the input field or clicking and buttons to reach the necessary value. Negative values are