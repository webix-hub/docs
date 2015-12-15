
{{memo a slider component with two markers for selecting a range of values}}

Unlike a standard slider, this control allows choosing a particular range of values due to its two handlers. The part of the value line which corresponds to the selected set of values is highlighted in blue color.

Check [rangeslider](desktop/rangeslider.md) documentation for more detailed description.

### Constructor

~~~js
var rangeslider = webix.ui({
	view:"rangeslider", 
  	label:"Level A", 
  	value:"10,100", 
  	title: webix.template("#value#")
});
~~~

### Where to start

- [Overview of the Range Slider Control](desktop/rangeslider.md)
- [Samples](http://docs.webix.com/samples/13_form/05_extras/07_rangeslider.html)
