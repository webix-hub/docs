{{memo an editable table  that can easily display huge data sets }}

The component is full of various possibilities: filtering, sorting, pagination, editing, navigation, drag-and-drop, internationalization, export to PDF, Excel etc. It also provides the dynamic mode for handling thousands of records in a fast way.
  Check [datatable](datatable/index.md) documentation for more detailed description.

### Constructor

~~~js
var datatable = webix.ui({
	view:"datatable", 
  	columns:[
    	{ id:"rank",	header:"", 				width:50},
    	{ id:"title",	header:"Film title",	width:200},
    	{ id:"year",	header:"Released", 		width:80},
    	{ id:"votes",	header:"Votes", 		width:100}
  	],
  	data: [
    	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rank:1},
    	{ id:2, title:"The Godfather", year:1972, votes:511495, rank:2}
  	]
});	
~~~

### Where to start

- [Overview of the DataTable Widget](datatable/index.md)
- [Samples](http://docs.webix.com/samples/15_datatable/index.html)
