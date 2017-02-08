DataLayout
============

The  view is based on Layout and operates the [DataStore API](api/refs/datastore.md). 

It's intended for creating complex data structures, e.g. big lists with dynamic data sub-loading, multipage forms, etc. and allows placing several data components into one layout.

##Simple mode

In order to create a simple data layout, you need to define an empty rows or cols collection that will define the arrangement of elements on the page (vertical or horizontal).

Then place configurations of the necessary views into the data configuration object. 
For example, a DataLayout can contain several templates:

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

Pay attention that in the above example the view:"template" definition is omitted for simplicity, as specifying the view type as "template" is [optional](desktop/template.md#initialization). 

{{sample 60_pro/13_layout/02_datalayout.html}}

##Repeater mode

To create a more complex structure, you should specify a common template for DataLayout elements as a value of its rows/cols property.
It will be applied for each layout element (a row or a column).

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

In the above example, the rows collection contains a common template that defines that two views will be shown in each DataLayout element: a template view for the header and a list with data.

Each view in DataLayout has the **name** property that defines which data elements will be passed to the view. This property can have one of the two values:

- *"$value"* - presupposes that the whole data item is passed to the view, and a view "decides" what data property should be displayed;
- *"some_property"* - implies that the value of a particular property in the data item will be passed and displayed in the view.

The view displays the passed data in the following way:

1) If the view is a data component, the passed data will be parsed into the view;

2) If the view is a single-value component (e.g. a label or a button), the passed data will be used as a value of this view.


{{sample 60_pro/13_layout/03_datalayout_repeater.html}}

##Loading data

Data can be loaded into DataLayout in the same way as into any other data component, i.e. by:

- [parsing](desktop/data_loading.md#parsing) from a string or an array:

~~~js
webix.ui({
	view:"datalayout",
    type:"space",
    rows:[
       	{ name:"$value", type:"header", template:"#month# 2016" },
   		{ name:"data", view:"list", template:"#income#, #count#" }
    ],
    data:[
       	{ month:"January", data:[{ income: 122342, count:12 }] },
        { month:"February", data:[{ income: 2342, count:2 }] }
    ]
});
~~~

- [loading from an external file](desktop/data_loading.md#loadingfromexternalresource) by means of the load method or the url property:

~~~js
webix.ui({
	view:"datalayout",
    id:"data",
    type:"space",
    rows:[
      { name:"$value", type:"header", template:"#month# 2016" },
      { name:"data", view:"list", autoheight:true, template:"#income#, #count#" }
    ],
    url:"data/data.js"
});
~~~

The details are given in the article desktop/data_loading.md.


##Operations with data

You can perform usual operations with data of Data Layout, e.g. add, update, remove elements:

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

Specify the layout you want to embed into the DataLayout:

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

Define the config of the DataLayout and specify the sub-layout in the rows collection. Set the data source as well:

~~~js
webix.ui({
	view:"datalayout",
	id:"data",
	type:"space",
	rows:[
		subconfig
	],
	url:"data/data.js"
});
~~~

{{sample 60_pro/13_layout/05_datalayout_complex.html}}


@edition:pro