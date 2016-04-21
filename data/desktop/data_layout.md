Data Layout
============

The "datalayout" view is intended for creating complex data structures, e.g. big lists with dynamic data subloading, multipage forms, etc.

Thus, a datalayout can contain several templates with data, for example:

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

{{sample 60_pro/13_layout/02_listlayout.html}}

###Repeater mode

Data Layout can also be used in the repeater mode which allows setting a particular pattern in the configuration with the help of templates. 
Then this pattern can be repeated and filled with different data from the dataset.

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

In the above example, there are two templates: one for the header and one for data. For the header the month's value is taken from the dataset and
data in rows includes the income and the count values.

{{sample 60_pro/13_layout/03_repeater.html}}

@edition:pro