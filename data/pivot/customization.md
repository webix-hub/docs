Customizing Pivot
===================

##Getting Datatable Object

You can access the DataTable object by using the next code:

~~~js
var datatable = $$("pivot").$$("data");
~~~

It allows you to use any of datatable [events](api/refs/ui.datatable_events.md) or [API methods](api/refs/ui.datatable_methods.md). 
At the same time, it's not recommended to redefine datatable properties. 

~~~js
//attach event to selection
datatable.attachEvent("onAfterSelect", function (id) {
	webix.message("selected row: "+id);
});  

//or get the ID of the currently selected item.
var sel = datatable.getSelectedId();
~~~


##Popup customization

You can set the size of the popup with Pivot configuration with the help of the api/ui.pivot_popup_config.md object:

~~~js
webix.ui({
    view:"pivot",
    popup:{
        width:800, 
        height:600
    }
});
~~~

**Accessing Popup**

The *onPopup* event fires after a popup for configuring Pivot is created. The handler function takes one parameter:

- popup - (object) the popup object

~~~js
pivot.attachEvent("onPopup", function(popup){
	// your code
});
~~~

**"Fields" sorting**

The "Fields" list can be sorted by applying ["$sort" scheme](http://docs.webix.com/desktop__data_scheme.html#sortkey). 
The ascending order is default. So, you can define only "text" as a keyword: 

~~~js
webix.ui({
	view: "pivot",
	on:{
		onPopup: function(popup){
			popup.$$("fields").define("scheme",{
				$sort: {
					by: "text"
				}
			});
		}
	}
});
~~~

**Adding scrolls to all lists**

By default, only the "Fields" and "Values" lists are scrollable. Here is how you can add scrolls to all lists:

~~~js
webix.ui({
	view: "pivot",
	on:{
		onPopup: function(popup){
	    	// scroll for "Filters"
			popup.$$("filters").define("scroll",true);
			// scroll for "Columns"
			popup.$$("columns").define("scroll",true);
			// scroll for "Rows"
			popup.$$("rows").define("scroll",true);
		}
	}
});
~~~


##Changing Pivot Structure

The Pivot structure selected in the Popup can be customized with the help of the *onBeforeApply* event. 

The event is fired on the "Apply" button click and its handler takes the structure object with chosen "filters", "rows", "columns" and "values" as a parameter. 

For example, you can specify header sorting before applying the selected structure:

~~~js
webix.ui({
	view: "pivot",
	on:{
		onBeforeApply: function(structure){
			var columns = structure.columns;
			// apply header sorting
			for(var i =0; i < columns.length; i++){
		    	if(typeof cols[i] == "string"){
                	cols[i] = {id: cols[i], sort: "string"};
            	}
            	else
                	cols[i].sort = "string";
			}
		}
	}
});
~~~

##Prerender Customization

Pivot allows changing the configuration of filtering views and the datatable with the help of the onBeforeRender Event.
The event takes an object with 3 properties as a parameter:

- filters - an array with configurations of views in toolbar. For example, if you set up a filter with select type, there will be configuration for the "select" control;
- header - an array with [configuration for all columns](datatable/columns_configuration.md) of pivot datatable;
- data - json dataset for the datatable.

Pivot fires the onBeforeRender event before it's rendered. So, this event can be used to customize filters, columns array of datatable and its data source. 

Let's consider a couple of examples:

1) changing text in columns header from "value (min)" to "min of value":

~~~js
webix.ui({
	view: "pivot",
	on:{
		onBeforeRender: function(config){
	    	// get columns collection
			var columns = config.header;
			// change text of value columns 
			for(var i=1; i < columns.length; i++){
				var h = columns[i].header;
                var text = h[h.length-1].text.replace(/(\w+)\s\((\w+)\)/,'$2 of $1');
				h[h.length-1].text = text;
			}
		}
	}
});
~~~

2) setting different colors for columns:

~~~js
webix.ui({
	view: "pivot",
	on:{
		onBeforeRender: function(config){
			var columns = config.header;
			for(var i=1; i < columns.length; i++){
				columns[i].cssFormat = function(value){
					var css = "";
					if(value <0)
						css = { "color":"red" };
					else if(value >0 )
						css = { "color":"green" };
					return css;
				};
			}
		}
	}
});
~~~
