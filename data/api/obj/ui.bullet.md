
{{memo a gage-based compact widget to compare a value against the target and qualitative ranges}}

The Bullet Graph widget serves for rich displaying of data in a relatively small area. It is based on the Gage API and allows configuring its own features, such as the bar and bands (ranges) colors, the speed of animation, the position of the target value, the layout orientation, the label height or width, etc.

Check desktop/bullet_graph.md documentation for more details.

###Constructor 

~~~js
var bullet = webix.ui({
	view:"bullet", 
	id:"b1",
	minRange:0, 
	maxRange:120,
	value:40, 
	label:"2015 YTD", 
	placeholder:"expected #value#", 
	marker:70
});
~~~

### Where to start

- [Overview of the Bullet Graph Widget](desktop/bullet_graph.md)
- [Samples](http://docs.webix.com/samples/60_pro/16_bulletgraph/01_init.html)