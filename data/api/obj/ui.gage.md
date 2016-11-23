{{memo a gage widget with a dial to visualize data updates }}

The Gage widget allows visualizing alteration of data values with the help of HSL-based color representation of the displayed value.

Check desktop/gage.md documentation for more details.

###Constructor 

~~~js
var gage = webix.ui({
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

### Where to start

- [Overview of the Gage Widget](desktop/gage.md)
- [Samples](http://docs.webix.com/samples/60_pro/15_gage/index.html)
