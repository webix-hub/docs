Adding Subrows
==============

In case you need to give some additional information for the content of a datatable row, you can add a subrow after it. 

<img src="datatable/subrows.png">

To add a subrow into Datatable, use the *subrow* property. 
As the value you should pass a string with the names of properties that should be set in the subrow and their values in the form of templates, e.g.:

~~~js
subrow:"Rating: #rating#, Category: #category#"
~~~

Then you need to specify a subrow template in the first column of the datatable like this:

~~~js
columns:[
	{ id:"title",	header:"Title", 
		template:"{common.subrow()} #title#", width:220 },
	{ id:"year",	header:"Year", 		width:100, sort:"int"},
	{ id:"votes",	header:"Rating", 	width:100,	sort:"int"}
]
~~~

*template:"{common.subrow()} #title#"* will insert a subrow with the necessary data after the row with the "title" id.

Setting autoheight for subrows
-------------------------------

If the text in a subrow is too long, you can set the **subRowHeight** property with the *auto* value.
It will make the subrow to adjust it height to the size of the text:

<img src="datatable/subrows_autoheight.png">

~~~js
webix.ui({
	view:"datatable",
	subrow:"#details#",
	columns:[
		{ id:"title",	header:"Title", 
			template:"{common.subrow()} #title#", width:220 },
		{ id:"year",	header:"Year", 		width:100, sort:"int"},
		{ id:"votes",	header:"Rating", 	width:100,	sort:"int"}
	],
	subRowHeight:"auto",
	autoheight:true,
	autowidth:true,
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, 
			details:"Long text Long text Long text Long text Long text Long text Long text 
            			Long text Long text Long text Long text Long text Long text 
                        	Long text Long text Long text Long text Long text "},
		{ id:2, title:"The Godfather", year:1972, votes:511495, 
						details:""},
		{ id:3, title:"The Godfather: Part II", year:1974, votes:319352, 
						details:"Short text"}
	]
});	
~~~

API
------

There's a set of API functions you can use to manipulate the subrows in a datatable:

- openSub() - opens a subrow by its id:

~~~js
$$("myDatatable").openSub("subrowId");
~~~

- closeSub() - closes an opened subrow by its id:

~~~js
$$("myDatatable").closeSub("subrowId");
~~~

- getItem() - returns the subrow data by its id:

~~~js
$$("myDatatable").getItem("subrowId");
~~~