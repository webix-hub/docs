Integration with DHTMLX Components
===================================

<a href="http://www.dhtmlx.com">DHTMLX</a> is a **component JavaScript Library** for building enterprise-level Web apps with clean interface, fast performance, and rich user experience. Since DHTMLX is our friendly project, 
Webix components resemble DHTMLX ones, so the views from both libraries can naturally co-exist in one and the same application. 

{{note
JS file that contains the integration code can be taken from [Github](https://github.com/webix-hub/components) while the needed components should be
downloaded from [DHTMLX site](http://www.dhtmlx.com).
}}

**DHTMLX** is comprised of **various components** each of which can be downloaded separately to minimize the total weight of dependent scripts in the application. 

First of all, we need to include a JS file with the code that integrates Webix and DHTMLX:

~~~html
<!-- compulsory: JS file with the code that integrates Webix and DHTMLX -->
<script type="text/javascript" src="./dhtmlx.js"></script>
~~~

Next we should include JS and CSS files of the needed DHTMLX component.
Let it be the [DHTMLX Layout](http://www.dhtmlx.com/docs/products/dhtmlxLayout/index.shtml). 

~~~html
<!-- JS file for the needed component  -->
<script type="text/javascript" src="./dhtmlx/dhtmlxlayout.js"></script> 

<!-- CSS file for the needed component -->
<link rel="stylesheet" href="./dhtmlx/dhtmlxlayout.css" type="text/css">
~~~

After that we will create DHTMLX Layout where we will put [Webix layout](desktop/layout.md) and [Webix Datatable](datatable/index.md):

~~~js
//creating layout with 3 cells (3U type)
dhxLayout = new dhtmlXLayoutObject("parentId", "3U"); 

//setting header texts for each cell
dhxLayout.cells("a").setText("Main Page");
dhxLayout.cells("b").setText("Layout");
dhxLayout.cells("c").setText("DataTable");
~~~

To put Webix component into DHTMLX layout, use **attachWebix()** method with a configuration object inside:

~~~js
//inserting Webix layout into the second cell
dhxLayout.cells("b").attachWebix({
	type:"wide", rows:[
		{ template:"1" },
		{ type:"wide", cols:[ 
			{ template:"2" },
			{ template:"3" }
        ]}
	]
});

//inserting Webix datatable into the third cell
dhxLayout.cells("c").attachWebix({
	view:"datatable",  
	columns:[...],
    data:[...]
});
~~~

Related Sample: [Integration with DHTMLX Layout](http://webix-hub.github.io/components/dhtmlx/sample.html)

You can find all methods of DHTMLX Layout in the [DHTMLX documentation](http://docs.dhtmlx.com/).
