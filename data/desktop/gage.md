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
    id:"gage1",
    value: 60,
    minRange: 0,
    maxRange: 100,
    label: "Speed",
    placeholder: "km/hour",
    animation: true
});
~~~

{{sample 60_pro/15_gage/01_init.html}}

















@edition:pro