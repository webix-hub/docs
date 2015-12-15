
{{memo a suggest control}}

Can be used standalone or as an editor for other components. Check [suggest](desktop/suggest.md) documentation for more detailed description.


### Constructor

~~~js
webix.ui({
	view:"text", 
  	width: 300,
  	name:"country", 
  	label:"Country", 
  	value:"Belarus", suggest:[
  		{id:1, value: "Albania"},
		{id:2, value: "Bhutan"},
		{id:3, value: "Colombia"},
		{id:4, value: "Denmark"},
		{id:5, value: "Germany"},
		{id:6, value: "Moldova"}
    ]         
});
~~~

### Where to start

- [Overview of Suggest List](desktop/suggest.md)
- [Samples](http://docs.webix.com/samples/13_form/01_controls/)
