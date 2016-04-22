Data Layout
============

The "datalayout" view is based on [datastore](api/refs/datastore.md) and intended for creating complex data structures, e.g. big lists with dynamic data subloading, multipage forms, etc.
It allows placing data components into one layout.

##Simple mode

In order to create a simple data layout, you need to define an empty rows or cols collection that will define the arrangement of elements on the page (vertical or horizontal).

Then place the necessary views configs into the data configuration object. 
For example, a datalayout can contain several templates:

<img src="desktop/list_layout.png">


~~~js
webix.ui({
	view:"datalayout",
	type:"space",
	rows:[],
	data:[
		{ id:"a1", template:"A1", type:" header" },
		{ id:"a2", template:"A2", type:" header" },
		{ id:"a3", template:"A3", type:" header" },
		{ id:"a4", template:"A4", type:" header" }
	]
});
~~~

Pay attention that in the above example the view:"template" definition is omitted for simplicity, as specifying the view type as "template" is optional. 

{{sample 60_pro/13_layout/02_datalayout.html}}

##Repeater mode

To create a more complex structure, you should specify common configuration for elements with the help of templates.
It will be applied for each layout element.

As for data, it can be loaded into the layout in the same way as into any other data component. 

- parsed from a string or an array 
- loaded from an external file by means of the load method or the url property

The details are given in the article desktop/data_loading.md.

<img src="desktop/repeater_layout.png">

~~~js
webix.ui({
	view:"datalayout",
    type:"space",
    rows:[
       	{ name:"$value", type:"header", template:"#month# 2016" },
   		{ name:"data", view:"list", template:"#income#, #count#" }
    ],
    data:[
       	{ month:"January", 
          data:[
          	{ income: 122342, count:12 }, 
            { income: 92342, count:8 }, 
            { income: 222342, count:20 }
          ] 
       	},
        { month:"February", data:[{ income: 2342, count:2 }] }
    ]
});
~~~

In the above example, there are two templates: one for the header and one for data.

The first line in the rows config with the *name:"$value"* property means that the template's data will take the whole row.
The value of the *month* property is taken from the dataset and applied to the header.

The name:"data" in the second line implies that values from the data object (income and count) will be inserted into the next rows.

{{sample 60_pro/13_layout/03_datalayout_repeater.html}}


##Operations with data

You can perform usual operations with data of Data Layout - add, update, remove elements:

- adding new elements into layout

~~~js
$$("data").add({
  "month":"April", "data":[{"income":5894,"count":4}, {"income": 1458, "count":2}] 
});
~~~

- getting and updating elements

~~~js
var last = $$("data").getItem($$("data").getLastId());
if(last){
	last.month = "Hello, December";
	$$("data").updateItem(last.id, last)
}
~~~

- removing elements

~~~js
var first = $$("data").getFirstId();
if(first) 
 $$("data").remove(first);
~~~

{{sample 60_pro/13_layout/04_datalayout_crud.html}}

##Complex Data Layout

You can also create a complex data layout with nested rows and columns. It can be implemented like this, for example:

<img src="desktop/complex_data_layout.png">

Specify the layout you want to embed into the datalayout:

~~~js
var subconfig = {
	isolate:true,
	rows:[
		{ view:"toolbar", elements:[
			{ view:"button", value:"Add record", width: 120 },
			{ view:"label", name:"month" }
		]},
		{ cols:[
			{ id:"l1", name:"data", view:"list", template:"#income#" },
			{ },
			{ id:"l2", name:"data", view:"list", template:"#count#" }
		]}
   	]
};
~~~

Define the config of the datalayout and set the sublayout in the rows collection. Set the datasource as well:

~~~js
 var left = {
 	view:"datalayout",
 	id:"data",
 	type:"space",
 	rows:[
 		subconfig
	 ],
 	url:"data/data.js"
 };
~~~

{{sample 60_pro/13_layout/05_datalayout_complex.html}}


@edition:pro