Gage
=====

{{pronote
The widget is available in the **Webix Pro** edition.
}}

API Reference
---------------

- [Methods, parameters and events](api/refs/ui.gage.md)
- [Samples](http://docs.webix.com/samples/60_pro/15_gage/index.html)

Overview
-------------

The Gage widget allows visualizing alteration of data values with the help of HSL-based color representation of the displayed value.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/gage.png">

Initialization
------------------

Basic configuration for Gage initialization looks like this:

~~~js
webix.ui({
    view: "gage",
    id: "gage1",
    value: 60,
    minRange: 0,
    maxRange: 100,
    label: "Speed",
    placeholder: "km/hour",
    smoothFlow: false,  
	scale:5,
    stroke:10
});
~~~

{{sample 60_pro/15_gage/01_init.html}}

**Main Properties**

- **value** - (number) the initial value of the Gage widget. It should be set within the range of the *minRange* and *maxRange* parameters' values or equal to one of them.
- **minRange** - (number) the maximum range value of the Gage scale. 0 by default
- **maxRange** - (number) the maximum range value of the Gage scale. 100 by default 
- **label** - (string) the text label of the control
- **placeholder** - (string) the text placeholder for the measurement unit of the Gage widget
- **smoothFlow** - (boolean) defines whether the change of values in the Gage will flow with smooth animation. *True* by default
- **stroke** (number) - defines the width of the gage scale
- **scale** (number) - defines the size of the gage scale

The full list of available configuration properties is given in the [Gage API](api/refs/ui.gage_props.md).

Setting Custom Colors
---------------------

You can specify custom colors for the Gage widget, using the **color** property. There are two possible options:

- to set one fixed color for the control, set the color as a string value

~~~js
webix.ui({
	view: "gage", 
    minRange: 0,
    maxRange: 100,
 	color:"green"
});
~~~

- to set different colors for particular ranges of values, specify a function that will define the logic of applying colors

~~~js
var color = function(val){
	if (val < 40) return "green";
	if (val < 80) return "orange";
	return "red";
};

webix.ui({
	view: "gage",
	minRange: 0,
	maxRange: 100,
	color:color,
	label: "Pressure"
});
~~~

{{sample 60_pro/15_gage/02_color.html}}

Specificity of Loading Data
------------------------

It is possible to load data into Gage from an external data source and get data from gage as well.

###Loading data to Gage

You can choose one of two ways to load data into Gage (set the gage value):

- use Gage as a Form control and apply the *load()* method of Form, as follows:

~~~js
webix.ui({
   view:"form", 
   id:"form1", 
   width: 500, 
   elements:[
   	{ view:"gage", name:"value"}
   ]
});

$$("form1").load(url);
~~~

- use [*webix.ajax*](helpers/ajax_operations.md#promiseapiforajaxrequests) and then the api/ui.gage_setvalue.md method of Gage

~~~js
webix.ui({
 	view:"gage",
	id: "gage2"
});

webix.ajax(url).then(function(data){
  	// console.log(data.json());
  	$$("gage2").setValue(data.json().value)
});
~~~

###Getting Gage data

To get data from Gage (the set value), you can use the api/ui.gage_getvalue.md method:

~~~js
webix.ui({
 	view:"gage",
  	id: "gage3"
});

webix.ajax(url).then(function(data){
	$$("gage3").setValue(data.json().value)
  	var gageValue = $$("gage3").getValue(data.json().value);
   	// console.log("gage value is " + gageValue);
});
~~~

Adjusting Animation Speed
------------------------

If you need to change the speed of animation, you can do this via CSS by addressing the following classes:

- **.webix_gage_gradient_point_animated** - it is the arrow pointer that shows changing data values. You should configure its property *transition* 

~~~css
.webix_gage_gradient_point_animated {
    transition: transform 1.3s linear;
}
~~~

- **.webix_gage_animated** - the colored line. You need to adjust its properties *transition* and *animation*.

~~~css
.webix_gage_animated {
    animation: gage_dash 1.3s linear forwards;
    transition: stroke 1.3s linear, stroke-dasharray 1.3s linear;
}
~~~

~~~css
@keyframes gage_dash {
  to {
    stroke-dashoffset: 0;
  }
}
~~~

@edition:pro

@seolinktop: [web ui framework](https://webix.com)
@seolink: [javascript gage](https://webix.com/widget/gage/)