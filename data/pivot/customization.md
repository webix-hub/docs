Customizing Pivot
===================

Prerender Customization
------------------------

Pivot allows changing the configuration of filtering views and the datatable with the help of the api/ui.pivot_onbeforerender_event.md event.
The event takes an object with 3 properties as a parameter:

- filters - an array with configurations of views in toolbar. For example, if you set up a filter with select type, there will be configuration for the "select" control;
- header - an array with [configuration for all columns](datatable/columns_configuration.md) of pivot datatable;
- data - JSON dataset for the datatable.

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

Changing Pivot Structure
--------------------

The Pivot structure selected in the Popup can be customized with the help of the api/ui.pivot_onbeforeapply_event.md event. 

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

Getting Datatable Object
----------------------------

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


Popup Customization
---------------------

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

###Accessing Popup

The api/ui.pivot_onpopup_event.md event fires after a popup for configuring Pivot is created. The handler function takes one parameter:

- popup - (object) the popup object

~~~js
pivot.attachEvent("onPopup", function(popup){
	// your code
});
~~~

###"Fields" sorting

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


<h3 id="innerview">Adding and modifying inner views of Pivot popup</h3>

You can customize a view configuration and add a new one into a layout with the help of the api/ui.pivot_onviewinit_event.md event of pivot's popup.


**A search field for fields list**

The “Fields” list and its header are located in the “fieldsLayout” inner view of the Pivot popup. 

To add a search field, you need to insert its configuration into the “rows” collection of the layout. 
The configuration will contain the api/ui.view_ontimedkeypress_event.md event handler for the list filtering

~~~js
webix.ui({
	id: "pivot",
	view: "pivot",
	popup:{
		on:{
			onViewInit: function(name, config){
				if(name == "fieldsLayout"){
					var searchConfig = {
						view: "search",
						on:{
							onTimedKeyPress: function(){
								var list, text,win;
                                win= $$("pivot").getConfigWindow();
								list = win.$$("fields");
								text = this.getValue();
								list.filter("name", text);
							}
						}
					};
					config.rows.splice(1,0,searchConfig);
				}    
			}
		}
	},
	...
});
~~~


{{sample 61_pivot/05_customization/02_popup.html}}

**Groups of fields**

The "Fields" list can be split into multiple groups by replacing the “list" view with the "unitlist" one. 

In the example below “balance”, “gdp” and “oil” will be placed into the “number” group, other fields - into the “text” group.

~~~js
var valueFields = {"balance":1,"gdp":1, "oil": 1};

webix.ui({
	id: "pivot",
	view: "pivot",
	popup:{
		on:{
			onViewInit: function(name, config){
				if(name == "fields"){
					config.view = "unitlist";
					config.uniteBy = function(item){
						return valueFields[item.text]?"Number":"Text";
					};
				}
			}
		}
	},
	...
});
~~~

{{sample 61_pivot/05_customization/03_fields_groups.html}}






