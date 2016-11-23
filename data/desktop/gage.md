Gage
=====

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
    smoothFlow: false
});
~~~

{{sample 60_pro/15_gage/01_init.html}}

**Main Properties**

- **value** - (number) the initial value of the Gage wigdet. It should be set within the range of the *minRange* and *maxRange* parameters' values or equal to one of them.
- **minRange** - (number) the maximum range value of the Gage scale. 0 by default
- **maxRange** - (number) the maximum range value of the Gage scale. 100 by default 
- **label** - (string) the text label of a control
- **placeholder** - (string) the text placeholder for the measurement unit of the Gage widget
- **smoothFlow** - (boolean) defines whether the change of values in the Gage will flow with smooth animation. *True* by default








@edition:pro