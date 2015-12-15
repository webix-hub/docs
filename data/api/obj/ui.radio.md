
{{memo a radio button}}

You can group multiple component instances together to provide the desired set of choices. Check [radio](desktop/radio.md) documentation for more detailed description.

### Constructor

~~~js
var radio = webix.ui({
	view:"radio", 
  	label:"Branch", 
  	value:1, options:[
    { id:1, value:"Master" }, 
    { id:2, value:"Branch" }]
});
~~~

### Where to start

- [Overview of the Radio Control](desktop/radio.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/04_radio.html)
