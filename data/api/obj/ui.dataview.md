{{memo a control for displaying data in a tabular format}}

The component presents a collection of objects according to a user-defined template. Support for various template forms and the possibility to sort, filter data.  Check [dataview](desktop/dataview.md) documentation for more detailed description.


### Constructor

~~~js
var dataview = webix.ui({
	view:"dataview", 
  	id:"dataview1",
    xCount:3,
  	type: {
    	height: 60,
  	},
  	template:"<div class='webix_strong'>#title#</div> Year: #year#, rank: #rank#",
  	data:[
   		{ id:1, title:"The Shawshank Redemption", year:1994, rank:1},
    	{ id:2, title:"The Godfather", year:1972, rank:2},
    	{ id:3, title:"The Godfather: Part II", year:1974, rank:3},
    	{ id:4, title:"The Good, the Bad and the Ugly", year:1966, rank:4}
  	] 
});
~~~

### Where to start

- [Overview of the Dataview Widget](desktop/dataview.md)
- [Samples](http://docs.webix.com/samples/06_dataview/index.html)
