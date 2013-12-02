Integration with DHTMLX Components
===================================

<a href="http://www.dhtmlx.com">DHTMLX</a> is a **component Javascript Library** for building enterprise-level Web apps with clean interface, fast performance, and rich user experience. Since, DHTMLX is our friendly project, 
Webix components resemble DHTMLX ones, so the views from both libraries can naturally co-exist in one and the same application. 

{{note
JS file that contains the integration code can be taken from [Github](https://github.com/webix-hub/components) while the needed components are downloaded from [DHTMLX site](http://www.dhtmlx.com).
}}

**DHTMLX** is comprised from **various components** each of which can be downloaded separately to minimize the total weight of dependent scripts in the application. Yet, you need to enumerate them all in your document head. 

~~~html
<!-- compulsory: JS file with the code that integrated Webix and DHTMLX -->
<script type="text/javascript" src="./dhtmlx.js"></script> 

<!--up to your choice: dependencies for the needed components -->
<script type="text/javascript" src="./dhtmlx/dhtmlxcommon.js"></script>
<script type="text/javascript" src="./dhtmlx/dhtmlxcontainer.js"></script>
<script type="text/javascript" src="./dhtmlx/dhtmlxlayout.js"></script>
<link rel="stylesheet" href="./dhtmlx/dhtmlxlayout.css" type="text/css">

<!--up to your choice: skin for the needed component -->
<link rel="stylesheet" href="./dhtmlx/skins/dhtmlxlayout_dhx_skyblue.css">	
~~~

The compulsory dependency creates a **dhtmlx** object on the page. It helps you to set the chosen skin:

~~~js
dhtmlx.skin = "dhx_skyblue";
~~~

Now lets, create some DHTMLX component. Let it be the [DHTMLX Layout](http://www.dhtmlx.com/docs/products/dhtmlxLayout/index.shtml) where we put [Webix layout](desktop/layout.md) and [Webix Datatable](datatable/index.md).

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

Related Sample: [Integration with DHTMLX Layout](http://localhost/components/dhtmlx/sample.html)

All methods of DHTMLX Layout you can find in [DHTMX documentation](http://docs.dhtmlx.com/doku.php?id=dhtmlxlayout:toc).
