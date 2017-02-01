Initialization
=================

Since Pivot tool comes as an add-on to Webix library you need to include both **Webix and Pivot scripts** and **CSS files** on your page to make everything work. 
Make sure you specify relative paths to these files:

~~~html
<html>
 <head>
  <!-- js files -->
  <script src="codebase/webix.js" type="text/javascript"></script>
  <script src="codebase/pivot.js" type="text/javascript"></script>
  <!-- css files -->
  <link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="codebase/pivot.css" type="text/css" charset="utf-8">
 </head>
 <body>
   <div id = "testA"></div>  <!-- container for Pivot -->
 </body>
</html>
~~~

The initialization of Pivot doesn't differ from that of other [Webix components](desktop/components.md) and is done with **webix.ui()** constructor function where you enumerate all the necessary properties:

~~~js
webix.ui({
	view: "pivot",
	container: "testA",
	id: "pivot",
	max: true,
	structure: { 
		rows: ["form", "name"],
		columns: ["year"],
		values: [
        	{ name: "gdp", operation: "sum"},
            { name: "oil", operation: "sum"}
        ],
    	filters: []
  	}
});
~~~

{{sample 61_pivot/01_init/01_inline_data.html}}

##Properties

- **id** - *string, number* - component ID, should be unique within a page. In Webix, any component is referred to by its ID, **$$("id")**, to perform various operations with it;
- **container** - *string* - ID of an HTML container Pivot will be put to (optional);
- **fieldMap** - *object* - can be used to define custom labels for fields (optional). The details are described in the [Renaming fields](pivot/configuration.md#renamingfields) section of Pivot configuration; 
- **max** - *boolean* - enables or disables GREEN highlighting of a cell(s) with the biggest value in a row (optional);
- **min** - *boolean* - enables or disables RED highlighting of a cell(s) with the least value in a row (optional);
- **data** or **url** - *string* - defines dataset (see the details in the pivot/data_loading.md article);
- **structure** - *object* - defines initial display and analysis pattern;

<h3 id="struct">Structure Object</h3>

- **rows** - array of fields that will be used as pivot's rows and displayed in the treetable on the left;
- **columns** - array of fields that will be used as pivot's columns and will be displayed above the datatable area;
- **values** - array of fields that will be used as pivot's data (will be displayed in datatable cells);
- **filters** - array of fields that will be used as filters and will be displayed above the datatable columns. Read about work with filters in [a separate article](pivot/filters.md).