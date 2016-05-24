Initialization
===================

Since Pivot Chart tool comes as an add-on to Webix library you need to include both **Webix and Pivot Chart scripts** and **CSS files** on your page to make everything work. 
Make sure you specify relative paths to these files: 

~~~html
<html>
 <head>
  <!-- js files -->
  <script src="codebase/webix.js" type="text/javascript"></script>
  <script src="codebase/pivotchart.js" type="text/javascript"></script>
  <!-- css files -->
  <link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="codebase/pivotchart.css" type="text/css" charset="utf-8">
 </head>
 <body>
   <div id = "testA"></div>  <!-- containter for Pivot Chart-->
 </body>
</html>
~~~

The initialization of Pivot Chart doesn't differ from that of other [Webix components](desktop/components.md) and is done with **webix.ui()** constructor function where you enumerate all the necessary properties:

~~~js
webix.ui({
	container:"testA",
	id:"pivot",
	view:"pivot-chart",
	structure:{
		groupBy: "continent",
		values: [
        	{name:"balance", operation:"max", color: "#eed236"},
            {name:"oil", operation:"max", color: "#36abee"}
        ],
		filters:[{name:"year", type:"select"}]
	},
	url: "../common/data.json"
});
~~~


###Properties

- **id** - *string, number* - component ID, should be unique within a page. In Webix, any component is referred to by its ID, **$$("id")**, to perform various operations with it;
- **container** - *string* - ID of an HTML container Pivot Chart will be put to (optional);
- **fieldMap** - *object* - can be used to define custom labels for fields (optional) ([details](pivot_chart/configuration.md#renamingfields)); 
- **data** or **url** - *string* - defines dataset ([details](pivot_chart/data_loading.md));
- **structure** - *object* - defines initial display and analysis pattern ([details](#struct)); 
- **chart** - *object* -  defines the chart configuration options that you want to redefine, i.e. object with a set of redefined properties ([details](pivot_chart/configuration.md#definingchartproperties));
- **chartType** - *string* - sets the default chart type;
- **chartMap** - *object* - can be used to redefine default types of a chart ('bar', 'line', 'radar') or add a new one ('stacked bar' or 'area') ([details](#custom_type));
- **filterWidth** - *number* - sets the width of filters (both input and label) in the header of the chart;
- **filterLabelWidth** - *number* - sets the width of the filters' labels;
- **filterLabelAlign** - *string* - sets the horizontal alignment of the filters' labels;
- **editButtonWidth** - *number* - sets the width of the "Settings" button;
- **singleLegendItem** - *boolean* - specifies whether the legend should be displayed if it contains only 1 item; 
- **palette** - *array* - specifies the pop-up color pallete of the **Values**' values<br> <code>palette:[ ["#e33fc7","#a244ea",...],["#d3ee36","#eed236",.. ],.. ]</code>  - each inner array specifies a row in the pallete

#### Structure Object {#struct}

- **values** - array of fields that will be used as pivot's data (will be displayed in datatable cells);
- **filters** - array of fields that will be used as filters and will be displayed above the datatable columns;
- **groupBy** - the name of the field that will be used to group values by.