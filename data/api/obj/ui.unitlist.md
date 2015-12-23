
{{memo a vertical list of items united into groups according to a template}}

Support for various data template formats, sorting and filtering features. Check [unitlist](desktop/unitlist.md) documentation for more detailed description.

### Constructor

~~~js
var unitlist = webix.ui({
    view:"unitlist", 
  	height: 200,
    uniteBy:function(obj){
        return obj.title.substr(0,1); 
    },
    type:{
        height:40,        
    },
    template:"#title#",
    data: [{ id:1, title:"The Shawshank Redemption", year:1994},
	{ id:2, title:"The Godfather", year:1972},
	{ id:3, title:"12 Angry Men", year:1974},
	{ id:4, title:"The Good, the Bad and the Ugly", year:1966},
	{ id:5, title:"My Fair Lady", year:1964},
	{ id:6, title:"Collector", year: 1987}]
});

~~~

### Where to start

- [Overview of the Unitlist Widget](desktop/unitlist.md)
- [Samples](http://docs.webix.com/samples/05_list/index.html)
